<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM register
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<section class="register">
  <h1 class="heading-title">EASILY RESET YOUR PASSWORD</h1>
  
  <form action="process-reset-password.php" method="post" class="register-form">

  <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
    <div class="flex">
      <div class="inputBox">
        <span>Password :</span>
        <input type="password" placeholder="enter your password" name="password" id="password" required> 
      </div>

      <div class="inputBox">
        <span>Confirm Password :</span>
        <input type="password" placeholder="confirm your password" name="password_confirmation" id="password_confirmation" required> 
      </div>
    </div>

    <input type="submit" value="Reset Password" class="btn" name="send">

    
  </form>
</section>
    
</body>
</html>



