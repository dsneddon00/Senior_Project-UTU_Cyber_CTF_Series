<?php
session_start();

$uploadOk = 2;

if (isset($_POST["submit"])){
    $target_dir = "uploads/"; // default file upload directory
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    $file_filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($file_filetype == "php"){
        $result = "PHP is not forbidden!";
        $uploadOk = 0;
    } else {
        if (file_exists($target_file)){
            $result = "File already exists!";
            $uploadOk = 0;
        }
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            $result = "File has been successfully uploaded!";
            $uploadOk = 1;
        } else {
            $result = "Error uploading file!";
            $uploadOk = 0;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="first">
        <div class="contact-form">
            <form action="" method="POST" enctype="multipart/form-data">
                <h2>Contact Us:</h2>
                <h3>Message us:</h3>
                <input type="text" name="textSubmit" class="textSubmit">
                <h3>Upload image:</h3>
                <input type="file" name="fileUpload" class="fileUpload">
                <input type="submit" value="Submit" name="submit">    
            </form>
        </div>
    </div>
</body>
</html>
