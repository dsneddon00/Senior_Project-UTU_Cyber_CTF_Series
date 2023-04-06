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
<body>
    <?php
    $id = $_GET['id'];
    if($id == 1){
        echo "Hello World! $id";
    } else {
        echo "Error $id";
    }



    ?>
    <!-- scripts -->
    <script src="jquery/jquery-3.4.1.js"></script>
    <script src="bootstrap/bootstrap.bundle.js"></script>
    <script src="bootstrap/bootstrap.affix.js"></script>
    <script src="js/script.js"></script>
</body>