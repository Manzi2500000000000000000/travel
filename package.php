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
    
   <div class="heading" style="background:url(images/travel1.jpeg) no-repeat">
    <h1 style="color:black">Packages</h1>
   </div>

    <!-- package section starts -->

     <section class="packages">

      <h1 class="heading-title">Top destinations</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/taj.jpeg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place1.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place2.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place3.jpeg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place4.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place5.jpeg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place6.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place7.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place8.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place9.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place10.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place11.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/place12.jpg" alt="">
          </div>
          <div class="content">
            <h3>Adventure & Tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, expedita.</p>
            <a href="book.php" class="btn">BOOK Now</a>
          </div>
        </div>
      </div>

      <div class="load-more"><span class="btn">Load More</span></div>

     </section>

     <!-- package section ends -->








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
