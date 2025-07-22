<?php
session_start();

// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'travel_db');
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['send'])) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate password length and characters
    if (strlen($password) < 8 || strlen($password) > 12 || !preg_match('/[^A-Za-z0-9]/', $password)) {
        showMessage("❌ Password must be 8–12 characters long and include at least one special character.", "error");
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        showMessage("❌ Passwords do not match. Please try again.", "error");
        exit();
    }

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM register WHERE email='$email'";
    $checkEmailResult = mysqli_query($connection, $checkEmailQuery);

    if (!$checkEmailResult) {
        showMessage("❌ Failed to check email: " . mysqli_error($connection), "error");
        exit();
    }

    if (mysqli_num_rows($checkEmailResult) > 0) {
        showMessage("❌ Email is already registered. Please use a different email.", "error");
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert data
    $query = "INSERT INTO register(name, phone, email, password) VALUES('$name', '$phone', '$email', '$hashedPassword')";
    if (mysqli_query($connection, $query)) {
        showMessage("✅ Registration successful! <a href='index.php' style='color:#155724;'>Login now</a>", "success");
    } else {
        showMessage("❌ Registration failed: " . mysqli_error($connection), "error");
    }
} else {
    showMessage("❌ Invalid form submission.", "error");
}

// Function to show message
function showMessage($message, $type) {
    $bg = $type === "success" ? "#d4edda" : "#f8d7da";
    $border = $type === "success" ? "#28a745" : "#dc3545";
    $color = $type === "success" ? "#155724" : "#721c24";

    echo "
    <div style='
        background-color: $bg;
        padding: 15px;
        border-left: 5px solid $border;
        margin: 30px auto;
        max-width: 600px;
        font-size: 18px;
        color: $color;
        border-radius: 6px;
        text-align: center;
    '>
        $message
        <br><br><a href='javascript:history.back()' style='color: $color; text-decoration: underline;'>⬅️ Try again</a>
    </div>
    ";
}
?>
