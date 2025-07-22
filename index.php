<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'travel_db');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role']; // Store role

            if ($user['role'] === 'admin') {
                header("Location: view-users.php");
            } else {
                header("Location: home.php");
            }
            exit();
        } else {
            $_SESSION['error'] = "❌ Incorrect password. Please try again.";
        }
    } else {
        $_SESSION['error'] = "❌ No account found with that email.";
    }

    header("Location: index.php");
    exit();
}

?>




<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .alert {
      max-width: 600px;
      margin: 20px auto;
      padding: 15px;
      border-radius: 6px;
      font-size: 16px;
      text-align: center;
    }

    .alert-success {
      background-color: #d4edda;
      border-left: 5px solid #28a745;
      color: #155724;
    }

    .alert-error {
      background-color: #f8d7da;
      border-left: 5px solid #dc3545;
      color: #721c24;
    }
  </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.</title>

     <!-- ----custom css file links------ -->
    <link rel="stylesheet" href="style1.css">

    <!-- -------swiper css link--------- -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- ---Font awesome cdn link---- -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   
</head>
<body>

<?php if (isset($_SESSION['success'])): ?>
  <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
  <div class="alert alert-error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
<?php endif; ?>


<section class="header">
        <a href="index.php" class="logo">travel.</a>
</section>
    
<!-- login starts -->
<section class="login">
  <h1 class="heading-title">Hello, Login and Enjoy the Best of Travel</h1>
  
  <form action="index.php" method="post" class="login-form">
    <div class="flex">
      <div class="inputBox">
        <span>Email :</span>
        <input type="email" placeholder="enter your email" name="email" required> 
      </div>
      <div class="inputBox">
        <span>Password :</span>
        <input type="password" placeholder="enter your password" name="password" required> 
      </div>
    </div>

    <input type="submit" value="Login" class="btn" name="send">

    <!-- Forgot password link -->
    <div class="helper-links">
      <p><a href="forgot-password.php">Forgot Password?</a></p>
    </div>

    <!-- Registration link -->
    <div class="helper-links">
      <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
  </form>
</section>

<script>
  setTimeout(() => {
    const alert = document.querySelector('.alert');
    if (alert) alert.style.display = 'none';
  }, 5000);
</script>

 <!-- login ends -->






<!-- ---------swiper js link-------------- -->
      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     
      <!-- --------custom js file link-------- -->
      <script src="script.js"></script>
</body>
</html>