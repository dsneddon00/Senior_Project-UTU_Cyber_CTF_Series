<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="content">

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

    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg" id="nav-content" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/hood.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Go Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row align-items-center login">
            <div class="col-md-7 col-lg-8">
                <h1>Admin Portal</h1>
                <?php if (isset($error)) { ?>
                    <div><?php echo $error; ?></div>
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
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="jquery/jquery-3.4.1.js"></script>
    <script src="bootstrap/bootstrap.bundle.js"></script>
    <script src="bootstrap/bootstrap.affix.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
