<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Content Page</title>
    <link rel="stylesheet" href="themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="content">
    
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg" id="nav-content" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png">
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
        <div class="row align-items-center facts">
            <div class="col-md-7 col-lg-8">
                <form method="get" action="content.php">
                    <h1><label for="facts">Learn about Ice Cream</label></h1>
                    <label>Choose a fact!</label>
                    <select name="facts" id="facts">
                        <option value="1">Fact 1</option>
                        <option value="2">Fact 2</option>
                        <option value="3">Fact 3</option>
                        <option value="4">Fact 4</option>
                    </select>
                    <br>
                    <label for="user">Who are you?</label>
                    <select name="user" id="facts">
                        <option value="I52WK43U">Guest</option>
                    </select>
                    <input type="submit" value="Submit">
                </form>

                <?php
                $id = $_GET['facts'];
                $user = $_GET['user'];
                if($id == "1") {
                    echo "<b>Ice Cream was first invented in 1777</b>";
                } else if($id == "2") {
                    echo "<b>There are 6 main types of sprinkles for different situations";
                } else if($id == "3") {
                    echo "<b>In 2016, China ate 4.3 billion liters of ice cream.</b>";
                } else if ($id == "4") {
                    echo "<b>During economic recessions, ice cream sales tend to increase</b>";
                } else if ($id == "20") {
                    if($user == "MJXWELLCN5RGC===") {
                        echo "<b>I wonder if Chad will ever notice that I'm totally embezelling and that's why we're inn debt...</b>";
                    } else {
                        echo "<b>Nope. Just Nope.</b>";
                    }
                } else if ($id == "43") {
                    // sam-sprinkles or Admin 
                    if($user == "ONQW2LLTOBZGS3TLNRSXG===" || $user == "IFSG22LO") {
                        echo "<b>My secret web hideout in case I forget my ssh credentials again<br>sam-sprinkles:SammyInMiami43</b>";
                    } else {
                        echo "<b>Nice try! You can't touch my stuff!</b>";
                    }

                } else if ($id == "50") {
                    if($user == "NVXWY3DZFVWWS3DL") {
                        echo "<b>THAT PEA BRAINED BETTY BUTTER BETTER LEAVE MY MAN CHAD ALONE OR I'LL FILL HER BLOODSTEAM WITH STRAWBERRY MILK</b>";
                    } else {
                        echo "<b>No secret notes for you!</b>";
                    }

                } else if ($id == "64") {
                    if($user == "MNUGCZBNMNUGK4TSPE======") {
                        echo "<b>Maybe one day I'll hire a hacker to pentest my company... One day...</b>";
                    } else {
                        echo "<b>No Easter eggs for you!</b>";
                    }

                } else {
                    echo "Error $id";
                }
                ?>
            </div>
        </div>
    </div>


    <!-- scripts -->
    <script src="jquery/jquery-3.4.1.js"></script>
    <script src="bootstrap/bootstrap.bundle.js"></script>
    <script src="bootstrap/bootstrap.affix.js"></script>
    <script src="js/script.js"></script>
</body>