<?php 
//check if the server request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    //Echo each item in POST
    if (!empty($date)) {
        echo "<p>Date: $date</p>";
    }
    echo "<p>Email: $email</p>";
    echo "<p>$description</p>";
}
?>