<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<section class="login">
  <h1 class="heading-title">FORGOT YOUR PASSWORD, EASY TO RESET</h1>
  
  <form action="send-password-reset.php" method="post" class="login-form">
    <div class="flex">
      <div class="inputBox">
        <span>Email :</span>
        <input type="email" placeholder="enter your email" name="email" required> 
      </div>
    </div>

    <input type="submit" value="Reset" class="btn" name="send">
  </form>
</section>
    
</body>
</html>