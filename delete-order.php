<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'travel_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $query = "DELETE FROM travel_form WHERE id = $id";

    mysqli_query($connection, $query);
}

header("Location: view-orders.php");
exit();
?>
