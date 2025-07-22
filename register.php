<?php 
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.</title>

     <!-- ----custom css file links------ -->
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" type="image/jpeg" href="images/travel2.jpeg">

    <!-- -------swiper css link--------- -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- ---Font awesome cdn link---- -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   
</head>
<body>

<section class="header">
        <a href="index.php" class="logo">travel.</a>
</section>
    
<!-- login starts -->
<section class="register">
  <h1 class="heading-title">Hello, Are You new here?</h1>
  
  <form action="register_form.php" method="post" class="register-form">
    <div class="flex">
      <div class="inputBox">
        <span>Full name :</span>
        <input type="text" placeholder="enter your name" name="name" required> 
      </div>

      <div class="inputBox">
        <span>Telephone :</span>
        <input type="number" placeholder="enter your phone" name="phone" required> 
      </div>

      <div class="inputBox">
        <span>Email :</span>
        <input type="email" placeholder="enter your email" name="email" required> 
      </div>

      <div class="inputBox">
        <span>Password :</span>
        <input type="password" placeholder="enter your password" name="password" required> 
      </div>

      <div class="inputBox">
        <span>Confirm Password :</span>
        <input type="password" placeholder="confirm your password" name="confirm_password" required> 
      </div>
    </div>

    <input type="submit" value="Register" class="btn" name="send">

    <div class="helper-links">
      <p>Already have an account? <a href="index.php">Login here</a></p>
    </div>
  </form>
</section>


 <!-- login ends -->






<!-- ---------swiper js link-------------- -->
      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     
      <!-- --------custom js file link-------- -->
      <script src="script.js"></script>
</body>
</html>