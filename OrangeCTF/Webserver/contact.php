<?php
session_start();

$uploadOk = -1;

if (isset($_POST["submit"])){
    $target_dir = "uploads/"; // default file upload directory
    $filename = basename($_FILES["fileUpload"]["name"]);
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);;
    $file_filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // blacklist
    if ($file_filetype == "php" || $file_filetype == "php2" || $file_filetype == "php3" || $file_filetype == "php4" || $file_filetype == "php5"){
        $result = "PHP is forbidden! Nice try hacker!";
        $uploadOk = 0;

    //whitelist
    } elseif (strpos($target_file . $file_filetype, ".jpg") === false && strpos($target_file . $file_filetype, ".png") === false && strpos($target_file . $file_filetype, ".img") === false && strpos($target_file . $file_filetype, ".jpeg") === false) {
        $result = "Please upload only images";
        $uploadOk = 0;

    } else {
        if (file_exists($target_file)){
            $result = "{$filename} already exists!";
            $uploadOk = 0;
        }
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            $result = "{$filename} has been successfully uploaded!";
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

                <!-- error responses -->
                <?php
                  if ($uploadOk == 1){

                    echo "<p class='success'>{$result}</p>";

                  } elseif ($uploadOk == 0){
                    echo "<p class='error'>{$result}</p>";
                  }
                  ?>

            </form>
        </div>
    </div>
</body>
</html>
