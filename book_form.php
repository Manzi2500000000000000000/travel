<?php
   session_start(); 

   $connection = mysqli_connect('localhost','root','','travel_db');

   if(isset($_POST['send'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $location = $_POST['location'];
       $guests = $_POST['guests'];
       $arrivals = $_POST['arrivals'];
       $leaving = $_POST['leaving'];

       $request = "INSERT INTO travel_form(name, email, phone, address, location, guests, arrivals, leaving) 
                   VALUES('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

       if(mysqli_query($connection, $request)) {
           $_SESSION['success'] = "Booking completed successfully!";
       } else {
           $_SESSION['error'] = "Something went wrong. Please try again.";
       }

       header('Location: book.php');
       exit();
   } else {
       echo "Please fill out the form properly.";
   }
?>
