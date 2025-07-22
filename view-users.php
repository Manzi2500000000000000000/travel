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
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle Admin Actions
if (isset($_GET['make_admin'])) {
    $userId = intval($_GET['make_admin']);
    $query = "UPDATE register SET role='admin' WHERE id=$userId";
    mysqli_query($connection, $query);
    header("Location: view-users.php");
    exit;
}

if (isset($_GET['revoke_admin'])) {
    $userId = intval($_GET['revoke_admin']);
    $query = "UPDATE register SET role='user' WHERE id=$userId";
    mysqli_query($connection, $query);
    header("Location: view-users.php");
    exit;
}

if (isset($_GET['delete_user'])) {
    $userId = intval($_GET['delete_user']);
    $query = "DELETE FROM register WHERE id=$userId";
    mysqli_query($connection, $query);
    header("Location: view-users.php");
    exit;
}

// Search Logic
$search = '';
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($connection, $_GET['search']);
    $query = "SELECT * FROM register WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
} else {
    $query = "SELECT * FROM register";
}

$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Users</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        .action-btn {
            display: inline-block;
            padding: 6px 12px;
            width: 120px;
            text-align: center;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            margin: 2px auto;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .make-admin {
            background-color: #28a745;
        }

        .revoke-admin {
            background-color: #e0a800;
        }

        .delete-user {
            background-color: #dc3545;
        }

        .action-btn:hover {
            opacity: 0.9;
            transform: scale(1.03);
        }

        .search-container {
            text-align: center;
            margin: 20px 0;
        }

        .search-container input[type="text"] {
            padding: 8px;
            width: 250px;
            border: 2px solid #444;
            border-radius: 5px;
            font-size: 14px;
        }

        .search-container button {
            padding: 8px 16px;
            margin-left: 5px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            background-color: var(--black);
            color: white;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: var(--main-color);
        }

    </style>
</head>
<body>

<a href="logout.php" class="btn"><span>Log Out</span></a>

<h1 class="heading-title">List of Registered Users</h1>

<!-- Search Form -->
<div class="search-container">
    <form action="view-users.php" method="GET">
        <input type="text" name="search" placeholder="Search by name or email" value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
    </form>
</div>

<!-- Total Users Count -->
<div style="text-align: center; margin-bottom: -40px; font-size: 18px; ">
    <strong>Total Users: <?= mysqli_num_rows($result) ?></strong>
</div>

<table class="user-table responsive-table">


<table class="user-table responsive-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password (Hashed)</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['password']) ?></td>
                    <td><?= htmlspecialchars($row['role']) ?></td>
                    <td class="actions">
                        <?php if ($row['role'] !== 'admin'): ?>
                            <a class="action-btn make-admin" href="?make_admin=<?= $row['id'] ?>" onclick="return confirm('Make this user an admin?')">Make Admin</a>
                        <?php else: ?>
                            <a class="action-btn revoke-admin" href="?revoke_admin=<?= $row['id'] ?>" onclick="return confirm('Revoke admin role?')">Revoke</a>
                        <?php endif; ?>
                        <a class="action-btn delete-user" href="?delete_user=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">No users found</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<div class="back-link">
    <a class="btn" href="home.php">← Back to Home</a>
    <a class="btn" href="register.php">Register a User</a>
    <a class="btn" href="view-questions.php">View Questions</a>
    <a class="btn" href="view-orders.php">View Orders</a>
</div>

</body>
</html>
