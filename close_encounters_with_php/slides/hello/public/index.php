<?php 
//check if the server request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    //Echo each item in POST
    echo "<p>Date: $date</p>";
    echo "<p>Email: $email</p>";
    echo "<p>$description</p>";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP Demo</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="css/application.css" type="text/css" />
    </head>
    <body>
        <?php 
            include('../app/views/header.php');
            include('../app/views/content.php');
            include('../app/views/footer.php');
        ?>
        
        
    </body>
</html>



