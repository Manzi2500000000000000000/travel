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
    <title>Home</title> 

    
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

    <!-- -----------home section starts------------  -->
     
    <section class="home">
      <div class="home-slider">
        <div class="swiper-wrapper">

          <div class="swiper-slide slide" style="background:url(images/slider1.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(images/slider2.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background:url(images/slider3.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
          </div>


        </div>
           <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- -----------home section ends------------  -->
    <!-- -----------Service Section Starts------------- -->
     
      <section class="services">
        <h1 class="heading-title">Our Services</h1>

        <div class="box-container">
          <div class="box">
            <img src="images/adventure.png" alt="">
            <h3>Adventure</h3>
          </div>

          <div class="box">
            <img src="images/tour-guide.png" alt="">
            <h3>Tour Guide</h3>
          </div>

          <div class="box">
            <img src="images/trekking.png" alt="">
            <h3>Trekking</h3>
          </div>

          <div class="box">
            <img src="images/camp-fire.png" alt="">
            <h3>Camp Fire</h3>
          </div>

          <div class="box">
            <img src="images/off-road.png" alt="">
            <h3>Off Road</h3>
          </div>

          <div class="box">
            <img src="images/camping-icon.png" alt="">
            <h3>Camping</h3>
          </div>

        </div>
      </section>

          


     <!-- -----------Service Section ends------------- -->

<!-- -------------home about section starts------------- -->

<section class="home-about">
  <div class="image">
    <img src="images/about.jpg" alt="">
  </div>

  <div class="content">
    <h3>About Us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Quas, 
      asperiores. Doloribus, voluptatum! Quisquam, cumque. Quas, asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, repellendus 
      cumque rerum cum iure eos culpa mollitia aperiam, ipsum earum nisi corrupti, sequi facilis vel accusamus debitis error! Accusantium, deleniti?</p>
      <a href="about.php" class="btn">Read More</a>
    

  </div>
</section>

<!-- ------------home about section ends-------------- -->
 <!-- ---------------home packages section starts---------------- -->
 <section class="home-packages">

  <h1 class="heading-title">OUR PACKAGES</h1>

  <div class="box-container">

     <div class="box">
      <div class="image">
        <img src="images/taj.jpeg" alt="">
      </div>
      <div class="content">
        <h3>Adventure & Tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus.</p>
        <a href="book.php" class="btn">Book Now</a>
     </div>
  </div>

  <div class="box">
      <div class="image">
        <img src="images/place1.jpg" alt="">
      </div>
      <div class="content">
        <h3>Adventure & Tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus.</p>
        <a href="book.php" class="btn">Book Now</a>
     </div>
  </div>

  <div class="box">
      <div class="image">
        <img src="images/place2.jpg" alt="">
      </div>
      <div class="content">
        <h3>Adventure & Tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus.</p>
        <a href="book.php" class="btn">Book Now</a>
     </div>
  </div>

</div>

<div class="load-more"><a href="package.php" class="btn">Load More</a></div>

 </section>


<!-- -----------------------home packages section ends---------------- -->
<!-- -------home offer section starts--------- -->

 <section class="home-offer">
  <div class="content">
    <h3>Up to 50% off</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
      Molestiae dignissimos et, vitae modi qui dolores voluptas harum enim odit
       earum unde eveniet sed optio vel ab quo quisquam magni ipsa?</p>
    <a href="book.php" class="btn">Book Now</a>
  </div>
 </section>


<!-- -------home offer section ends--------- -->





      <!-- -------Footer section-------- -->


     <!-- Chatbot Section -->
<!-- Chatbot Toggle Button -->
<button id="chat-toggle" style="position: fixed; bottom: 20px; right: 20px; background-color: #333; color: white; border: none; padding: 10px 14px; border-radius: 50%; cursor: pointer; font-size: 20px; z-index: 1000;">
  💬
</button>

<!-- Chatbot Container -->
<div id="chatbot-container" style="display: none; position: fixed; bottom: 80px; right: 20px; width: 300px; max-height: 450px; background: white; border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.15); display: flex; flex-direction: column; overflow: hidden; font-family: sans-serif; z-index: 999;">
  <div style="background: #333; color: white; padding: 12px; font-size: 16px; font-weight: bold; text-align: center;">
    Ask Us Anything
  </div>
  <div id="chatbox" style="flex: 1; padding: 10px; overflow-y: auto; font-size: 14px;">
    <div style="text-align: left; background: #f1f1f1; padding: 8px 10px; border-radius: 8px; display: inline-block; margin-bottom: 10px;">
      Hi there! 👋 How can I help you today?
    </div>
  </div>
  <form id="chat-form" style="display: flex; border-top: 1px solid #ddd;">
    <input type="text" id="userInput" placeholder="Type your message..." autocomplete="off" required
           style="flex: 1; padding: 10px; border: none; font-size: 14px; outline: none;">
    <button type="submit" style="background: #333; color: white; border: none; padding: 0 15px; cursor: pointer; font-size: 16px;">
      <i class="fas fa-paper-plane"></i>
    </button>
  </form>
</div>



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


      <script>
document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('chat-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const inputField = document.getElementById('userInput');
      const message = inputField.value.trim();
      if (!message) return;

      appendMessage('user', message);
      inputField.value = '';

      setTimeout(() => {
          const reply = getBotReply(message);
          appendMessage('bot', reply);
      }, 500);
  });

  function appendMessage(sender, text) {
      const chatbox = document.getElementById('chatbox');
      const msgDiv = document.createElement('div');
      msgDiv.textContent = text;

      if (sender === 'bot') {
          msgDiv.setAttribute('style', 'text-align: left; background: #f1f1f1; padding: 8px 10px; border-radius: 8px; display: inline-block; margin-bottom: 10px;');
      } else {
          msgDiv.setAttribute('style', 'text-align: right; background: #333; color: white; padding: 8px 10px; border-radius: 8px; display: inline-block; align-self: flex-end; margin-bottom: 10px; float: right; clear: both;');
      }

      chatbox.appendChild(msgDiv);
      chatbox.scrollTop = chatbox.scrollHeight;
  }

  function getBotReply(input) {
      const msg = input.toLowerCase();

      if (msg.includes('hello') || msg.includes('hi')) {
          return 'Hello! 👋 How can I assist you today?';
      } else if (msg.includes('book')) {
          return 'You can book a trip by clicking on the "Book" menu above.';
      } else if (msg.includes('package')) {
          return 'We offer multiple tour packages. Check them out on the Packages page.';
      } else if (msg.includes('contact')) {
          return 'You can find our contact information at the bottom of this page.';
      }else if (msg.includes('about')){
          return 'We are a travel agency dedicated to providing the best travel experiences. Learn more on our About page.';
      } else if (msg.includes('help')) {
          return 'How can I help you? Please ask your question.';
      } else if (msg.includes('thank you') || msg.includes('thanks')) {
          return 'You are welcome! If you have any other questions, feel free to ask.';
      } else if (msg.includes('bye') || msg.includes('goodbye')) {
          return 'Goodbye! See you soon!';
      } else if (msg.includes('weather')) {
          return 'I can’t provide weather updates, but you can check a weather website or app for the latest information.';
      } else if (msg.includes('location')) {
          return 'We are located in Kigali, Rwanda. You can find us on Google Maps.';
      } else if (msg.includes('services')) {
          return 'We offer various services including adventure tours, trekking, and camping. Check our Services section for more details.';
      } else if (msg.includes('travel')) {
          return 'Traveling is a great way to explore new places and cultures. Let us help you plan your next trip!';
      } else if (msg.includes('love')) {
          return 'Am an AI, but I appreciate your sentiment! Love for travel is what drives us to create amazing experiences.';
      } else if (msg.includes('good morning') || msg.includes('good evening')) {
          return 'Hello, How are you today, and how should i help you?';
      }
      else {
          return 'Sorry, I didn’t understand that. Try asking something else!';
      }
  }
});

// Toggle chatbot visibility
document.getElementById('chat-toggle').addEventListener('click', function () {
  const chatbot = document.getElementById('chatbot-container');
  chatbot.style.display = (chatbot.style.display === 'none' || chatbot.style.display === '') ? 'flex' : 'none';
});
</script>


       
</body>
</html>
