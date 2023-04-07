<?php
session_start();

ini_set('display_errors', '1');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to sqlite3
    $db = new SQLite3('users.db');

    // Query user with given username
    $stmt = $db->prepare("SELECT * FROM users WHERE username=:username");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute();

    // allow for online password cracking via error validating

    if ($row = $result->fetchArray()) {
	    // Verify password
        if ($password == $row['password']) {
            // Login successful, set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: command.php");
            exit();
        } else {
            // Invalid password
            $error = "Invalid password";
        }
    } else {
        // User not found
        $error = "User not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <?php if (isset($error)) { ?>
        <div style="color: red;"><?php echo $error; ?></div>
    <?php } ?>
    <form method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>
</html>
