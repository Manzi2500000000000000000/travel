<?php
include 'config.php'; // DB connection
session_start();

$msg = '';
$questions = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $question = $_POST['question'];

    // Check if user exists
    $check = mysqli_query($conn, "SELECT * FROM register WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $insert = mysqli_query($conn, "INSERT INTO questions (user_email, question) VALUES ('$email', '$question')");
        if ($insert) {
            $msg = "<p style='color:green;'>Question sent to admin successfully!</p>";
        } else {
            $msg = "<p style='color:red;'>Error sending question.</p>";
        }
    } else {
        $msg = "
        <div style='padding: 20px; background: #ffe0e0; border: 2px solid red; color: red; margin-top: 15px; border-radius: 5px;'>
            <strong>User not registered!</strong><br>
            <a href='register.php' style='color: var(--main-color); text-decoration: none; display: inline-block; margin-top: 10px;'>
                <i class='fas fa-arrow-left'></i> Go to Register Page
            </a>
        </div>";
    }

    // Fetch that user's questions and answers
    $fetch = mysqli_query($conn, "SELECT * FROM questions WHERE user_email='$email' ORDER BY asked_at DESC");
    if ($fetch) {
        $questions = mysqli_fetch_all($fetch, MYSQLI_ASSOC);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ask Question</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --main-color: #a226b3ff;
      --black: #222;
      --white: #fff;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 40px;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      padding: 10px 15px;
      font-size: 16px;
      background-color: var(--black);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 15px;
    }

    button:hover {
      background-color: var(--main-color);
    }

    .qa-box {
      background: #fdfdfd;
      border-left: 4px solid var(--main-color);
      margin-top: 20px;
      padding: 15px;
      border-radius: 6px;
      box-shadow: 0 0 5px rgba(0,0,0,0.05);
    }

    .qa-box p {
      margin: 8px 0;
    }

    .qa-box strong {
      color: var(--black);
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Ask a Question to Admin</h2>
  <?= $msg ?>
  <form method="post">
    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Your Question:</label>
    <textarea name="question" rows="5" required></textarea>

    <button type="submit">Send</button>
  </form>

  <?php if (!empty($questions)) { ?>
    <h3 style="margin-top: 30px;">Your Previous Questions</h3>
    <?php foreach ($questions as $q) { ?>
      <div class="qa-box">
        <p><strong>Question:</strong> <?= htmlspecialchars($q['question']) ?></p>
        <p><strong>Answer:</strong> <?= $q['answer'] ? htmlspecialchars($q['answer']) : "<span style='color:gray;'>Pending...</span>" ?></p>
        <p><small><strong>Asked:</strong> <?= date('d M Y H:i', strtotime($q['asked_at'])) ?></small></p>
      </div>
    <?php } ?>
  <?php } ?>
</div>

</body>
</html>
