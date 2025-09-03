<?php
include 'config.php';
$msg = '';
$questions = [];
$email = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['user_email']) && !empty($_POST['question'])) {
        $email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $question = mysqli_real_escape_string($conn, $_POST['question']);

        $insert = mysqli_query($conn, "INSERT INTO questions (user_email, question) VALUES ('$email', '$question')");
        if ($insert) {
            $msg = "<p style='color: green;'>Question sent to admin successfully!</p>";
        } else {
            $msg = "<p style='color: red;'>Failed to send question. Try again.</p>";
        }

        // Fetch questions after submission
        $fetch = mysqli_query($conn, "SELECT * FROM questions WHERE user_email='$email' ORDER BY asked_at DESC");
        if ($fetch) {
            $questions = mysqli_fetch_all($fetch, MYSQLI_ASSOC);
        }

    } elseif (!empty($_POST['user_email'])) {
        // Only fetch without inserting if email is provided
        $email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $fetch = mysqli_query($conn, "SELECT * FROM questions WHERE user_email='$email' ORDER BY asked_at DESC");
        if ($fetch) {
            $questions = mysqli_fetch_all($fetch, MYSQLI_ASSOC);
        }
    } else {
        $msg = "<p style='color: red;'>Please enter your email to proceed.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ask a Question</title>
    <link rel="icon" type="image/jpeg" href="images/travel2.jpeg">
</head>
<body style="font-family: Arial, sans-serif; padding: 20px; background-color: #f9f9f9;">

<h2 style="text-align: center;">Ask a Question</h2>

<div style="max-width: 600px; margin: auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <?php echo $msg; ?>
    <form method="post">
        <label for="user_email" style="font-weight: bold;">Your Email:</label><br>
        <input type="email" name="user_email" id="user_email" required value="<?php echo htmlspecialchars($email); ?>"
               style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"><br><br>

        <label for="question" style="font-weight: bold;">Your Question:</label><br>
        <textarea name="question" id="question" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea><br><br>

        <button type="submit" style="padding: 10px 15px; font-size: 16px; background-color: black; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Submit / View Questions
        </button>
        <button type="submit" style="padding: 10px 15px; font-size: 16px; background-color: black; color: white; border: none; border-radius: 5px; cursor: pointer;">
           <a href="home.php" style="text-decoration: none; color: white; font-weight: bold;">Back to Home</a> 
        </button>
    </form>
</div>

<?php if (!empty($questions)) { ?>
    <h3 style="text-align: center; margin-top: 40px;">Questions for <?php echo htmlspecialchars($email); ?></h3>
    <div style="max-width: 800px; margin: auto;">
        <?php foreach ($questions as $q): ?>
            <div style="margin-top: 20px; padding: 15px; background-color: #fff; border-radius: 8px; border-left: 4px solid #007BFF;">
                <p><strong>Q:</strong> <?php echo htmlspecialchars($q['question']); ?></p>
                <p style="color: gray; font-size: 12px;">Asked on: <?php echo $q['asked_at']; ?></p>
                <?php if (!empty($q['answer'])): ?>
                    <p><strong>Admin Answer:</strong> <?php echo htmlspecialchars($q['answer']); ?></p>
                    <p style="color: green; font-size: 12px;">Answered on: <?php echo $q['answered_at']; ?></p>
                <?php else: ?>
                    <p style="color: #888;"><em>Awaiting admin response...</em></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php } ?>

</body>
</html>
