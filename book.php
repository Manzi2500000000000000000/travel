<?php
session_start();

// Send headers to prevent browser cache
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

<!--Auto hide alert-->
<script>
  setTimeout(() => {
    const alert = document.querySelector('div[style*="background-color"]');
    if (alert) alert.style.display = 'none';
  }, 5000);
</script>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title> 
    
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
    <!-- ---header section start----- -->
     <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="logout.php" class="btn"><span>Log Out</span></a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

     </section>
    <!-- ------header section end---- -->
    
   <div class="heading" style="background:url(images/travel2.jpeg) no-repeat">
    <h1>Book now</h1>
   </div>

    <!-- booking section starts -->

    <section class="booking">

    <?php if(isset($_SESSION['success'])): ?>
    <div class="alert" style="background-color: #d4edda; padding: 15px; border-left: 5px solid #28a745; margin-bottom: 20px; font-size: 18px;">
      <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
    </div>
  <?php endif; ?>

  <?php if(isset($_SESSION['error'])): ?>
    <div class="alert" style="background-color: #f8d7da; padding: 15px; border-left: 5px solid #dc3545; margin-bottom: 20px; font-size: 18px;">
     <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
    </div>
  <?php endif; ?>


      <h1 class="heading-title">book your trip!</h1>
      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>Full Name :</span>
            <input type="text" placeholder="enter your name" name="name" required> 
          </div>
          <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email" required> 
          </div>
          <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="enter your phone" name="phone"> 
          </div>
          <div class="inputBox">
            <span>Address  :</span>
            <input type="text" placeholder="enter your address" name="address"> 
          </div>
          <div class="inputBox">
            <span>Where to :</span>
            <input type="text" placeholder="place your want to visit" name="location" required> 
          </div>
          <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="number of guests" name="guests" required> 
          </div>
          <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals" required> 
          </div>
          <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="leaving" required> 
          </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

      </form>
    </section>

     <!-- booking section ends -->








      <!-- -------Footer section-------- -->
       <section class="footer">
        <div class="box-container">
          <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php">  <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php">  <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php">  <i class="fas fa-angle-right"></i> book</a>
          </div>

          <div class="box">
            <h3>Extra Links</h3>
            <a href="questions.php"> <i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="map.php"> <i class="fas fa-angle-right"></i>Google Map</a>
              <a href="privacy-policy.php"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
               <a href="terms.php"> <i class="fas fa-angle-right"></i>Terms of Use</a>
          </div>

          <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+1111 111 1111</a>
            <a href="#"> <i class="fas fa-phone"></i>+1111 111 1111</a>
            <a href="#"> <i class="fas fa-envelope"></i>sheif@travel.com</a>
            <a href="#"> <i class="fas fa-map"></i>kigali, Rwanda</a>
          </div>

          <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-x-twitter"></i>X</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
           

          </div>
        </div>

        <div class="credit">created by <span>Mr.Manzi Hodari</span> | all rights reserved!</div>

       </section>










      <!-- ---------swiper js link-------------- -->
      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     
      <!-- --------custom js file link-------- -->
      <script src="script.js"></script>

       
</body>
</html>






