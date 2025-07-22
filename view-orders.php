<?php
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$connection = mysqli_connect('localhost', 'root', '', 'travel_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM travel_form";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

// -----Search Funcytionality-----

$searchTerm = '';
if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $searchTerm = mysqli_real_escape_string($connection, $_GET['search']);
    $query = "SELECT * FROM travel_form 
              WHERE name LIKE '%$searchTerm%' 
              OR email LIKE '%$searchTerm%' 
              OR phone LIKE '%$searchTerm%' 
              OR arrivals LIKE '%$searchTerm%'";
} else {
    $query = "SELECT * FROM travel_form";
}
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Bookings</title>
    <script src="script1.js"></script>
    <link rel="stylesheet" href="style1.css">
    <style>
        .orders-table {
            width: 95%;
            margin: 30px auto;
            border-collapse: collapse;
            font-size: 16px;
        }

        .orders-table th, .orders-table td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: center;
        }

        .orders-table th {
            background-color: var(--main-color);
            color: white;
        }

        .orders-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .orders-table tr:hover {
            background-color: #e2e2e2;
        }

        h1.heading-title {
            text-align: center;
            margin-top: 30px;
            font-size: 28px;
            color: #333;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            text-decoration: none;
            background-color: var(--black);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-link a:hover {
            background-color: var(--main-color);
        }
    </style>
</head>
<body>

<a href="logout.php" class="btn"><span>Log Out</span></a>

<h1 class="heading-title">Travel Orders</h1>

<div style="text-align: center; margin-top: 20px;">
    <form method="GET" action="view-orders.php">
        <input 
            type="text" 
            name="search" 
            placeholder="Search by name, email, phone, or arrival date"
            value="<?= htmlspecialchars($searchTerm) ?>"
            style="padding: 10px; width: 40%; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
        <button class="btn" type="submit" > Search</button>
    </form>
    <!-- Total Users Count -->
<div style="text-align: center; margin-top: 20px; margin-bottom: -20px; font-size: 18px; ">
    <strong>Total Orders: <?= mysqli_num_rows($result) ?></strong>
</div>

</div>


<table class="orders-table responsive-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Location</th>
            <th>Guests</th>
            <th>Arrival Date</th>
            <th>Leaving Date</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><?= htmlspecialchars($row['location']) ?></td>
                    <td><?= htmlspecialchars($row['guests']) ?></td>
                    <td><?= htmlspecialchars($row['arrivals']) ?></td>
                    <td><?= htmlspecialchars($row['leaving']) ?></td>
                    <td>
                        <form method="POST" action="delete-order.php" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                            <button type="submit" style="padding: 5px 10px; background-color: red; color: white; border: none; border-radius: 4px; cursor: pointer;">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="10">No bookings found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<div class="back-link">
     <a class="btn" href="view-users.php">← View Users</a>
     <a class="btn" href="book.php">Press Order</a>
    <a class="btn" href="home.php">Back to Home</a>
    <a class="btn" href="map.php">View Destination Locations</a>
</div>

</body>
</html>