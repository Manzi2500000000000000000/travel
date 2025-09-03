<?php
include 'config.php';
session_start();

// Optional: Add simple admin protection
// if (!isset($_SESSION['is_admin'])) { header("Location: login.php"); exit(); }

$msg = '';

// Handle admin answering a question
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $qid = $_POST['qid'];
    $answer = $_POST['answer'];
    $update = mysqli_query($conn, "UPDATE questions SET answer='$answer' WHERE id=$qid");
    $msg = $update ? "<p style='color:green;'>Answer submitted successfully.</p>" : "<p style='color:red;'>Error submitting answer.</p>";
}

// Fetch all questions
$results = mysqli_query($conn, "SELECT * FROM questions ORDER BY asked_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin - View Questions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/jpeg" href="images/travel2.jpeg">
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
      max-width: 800px;
      margin: auto;
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .question-box {
      background: #fdfdfd;
      border-left: 4px solid var(--main-color);
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 0 5px rgba(0,0,0,0.05);
    }

    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 10px;
      background-color: var(--black);
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: var(--main-color);
    }

    .answered {
      background-color: #e8ffe8;
      border-left: 4px solid green;
    }

    .pending {
      background-color: #fff7e6;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Admin Panel - View and Answer Questions</h2>
  <?= $msg ?>

  <?php while ($row = mysqli_fetch_assoc($results)) { ?>
    <div class="question-box <?= $row['answer'] ? 'answered' : 'pending' ?>">
      <p><strong>User:</strong> <?= htmlspecialchars($row['user_email']) ?></p>
      <p><strong>Question:</strong> <?= htmlspecialchars($row['question']) ?></p>

      <?php if ($row['answer']) { ?>
        <p><strong>Answer:</strong> <?= htmlspecialchars($row['answer']) ?></p>
      <?php } else { ?>
        <form method="post">
          <textarea name="answer" rows="3" placeholder="Type your answer..." required></textarea>
          <input type="hidden" name="qid" value="<?= $row['id'] ?>">
          <button type="submit">Submit Answer</button>
        </form>
      <?php } ?>

      <p><small><strong>Asked at:</strong> <?= date('d M Y H:i', strtotime($row['asked_at'])) ?></small></p>
    </div>
  <?php } ?>
</div>

</body>
</html>
