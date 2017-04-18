<?php 
//check if the server request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = trim($_POST['date']);
    $email = trim($_POST['email']);
    $description = trim($_POST['description']);
    //Echo each item in POST
    if (!empty($date) && !empty($email) && !empty($description)) {
        echo "<p>Date: $date</p>";
        echo "<p>Email: $email</p>";
        echo '<p>' . htmlspecialchars($description) . '</p>';
    }
}
?>