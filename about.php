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
    
   <div class="heading" style="background:url(images/heading.jpg) no-repeat">
    <h1>About Us</h1>
   </div>

   <!-- about section starts -->

   <section class="about">

    <div class="image">
      <img src="images/about.jpg" alt="">
    </div>

    <div class="content">
      <h3>why choose us?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Aliquid, quibusdam quod culpa atque odio, numquam minus aliquam perspiciatis architecto consequuntur ipsa aspernatur fuga quae rem. 
          Illo a eveniet quod. Repellat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis labore ullam culpa, reprehenderit ex voluptatum facilis quidem voluptatem, eligendi quas 
          officia laborum mollitia corrupti facere cupiditate nesciunt vero sequi veniam?</p>
        <div class="icons-container">
          <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destination</span>
          </div>

          <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
          </div>

          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
          </div>
        </div>
    </div> 

   </section>

    <!-- about section ends -->

    <!-- ----------review section starts--------------- -->

     <section class="reviews">

         <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

         <div class="swiper-slide slide">
             <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             </div>
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo accusamus odit dolor laboriosam, iusto molestiae repellat a distinctio porro fuga natus autem 
              labore earum! Ex, doloremque 
              totam? Labore, vero officiis!</p>
              <h3>John Doe</h3>
              <span>traveler</span>
              <img src="images/person1.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
             <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             </div>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo recusandae repellendus harum a voluptatibus error placeat dolores hic! Consectetur nisi accusantium quisquam illum dignissimos voluptate architecto, nesciunt unde nostrum voluptatum rem aperiam modi quibusdam
               obcaecati corporis, dolor quidem consequatur. Itaque.</p>
              <h3>John Doe</h3>
              <span>traveler</span>
              <img src="images/person3.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
             <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             </div>
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo accusamus odit dolor laboriosam, iusto molestiae repellat a distinctio porro fuga natus autem 
              labore earum! Ex, doloremque 
              totam? Labore, vero officiis!</p>
              <h3>John Doe</h3>
              <span>traveler</span>
              <img src="images/person2.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
             <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             </div>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Et blanditiis mollitia voluptas rem. Veniam, assumenda.</p>
              <h3>John Doe</h3>
              <span>traveler</span>
              <img src="images/person4.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
             <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             </div>
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta delectus quia laborum reprehenderit nulla impedit? Eaque velit, repellendus quae nihil aliquid, corrupti, magnam ad similique consequatur illum ipsum illo voluptates?
               Nostrum consequuntur fugiat illo maxime?</p>
              <h3>John Doe</h3>
              <span>traveler</span>
              <img src="images/person5.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
             <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
             </div>
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo accusamus odit dolor laboriosam, iusto molestiae repellat a distinctio porro fuga natus autem 
              labore earum! Ex, doloremque 
              totam? Labore, vero officiis!</p>
              <h3>John Doe</h3>
              <span>traveler</span>
              <img src="images/person6.jpg" alt="">
         </div>
         </div>

         </div>
     </section>

     <!-- ----------review section ends--------------- -->







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
