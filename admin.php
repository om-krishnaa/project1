<?php
// session_start(); // Ensure session start in case this file is accessed directly
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<header class="header">
    <div class="flex">
        <a href="admin_pannel.php" class="logo"><img src="logo1.png" alt="Logo"></a>
        <nav class="navbar">
            <a href="admin_pannel.php">Home</a>
            <a href="admin_product.php">Products</a>
            <a href="admin_order.php">Orders</a>
            <a href="admin_user.php">Users</a>
            <a href="admin_message.php">Messages</a>
        </nav>
        <div class="icons">
            <i class="bi bi-person" id="user-btn"></i>
            <i class="bi bi-list" id="menu-btn"></i>
        </div>
        <div class="user-box">
            <!-- Check if session variables are set before displaying them -->
            <p>Username: <span><?php echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : 'N/A'; ?></span></p>
            <p>Email: <span><?php echo isset($_SESSION['admin_email']) ? $_SESSION['admin_email'] : 'N/A'; ?></span></p>
            <form method="post">
                <button type="submit" name="logout" class="logout">Log Out</button>
            </form>
        </div>
    </div>
</header>

<div class="banner">
    <div class="details">
        <h1>Admin Panel</h1>
        <p>Manage products, orders, users, and more from the admin dashboard.</p>
    </div>
</div>


</body>
</html>
