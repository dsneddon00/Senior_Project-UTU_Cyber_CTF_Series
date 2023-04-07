<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome <?php echo $username; ?></title>
</head>
<body>
    <h1>Welcome <?php echo $username; ?></h1>
    <p>You are now logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
