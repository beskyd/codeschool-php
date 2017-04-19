<?php 
require __DIR__ . '/validation.php';

//check if the server request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = trim($_POST['date']);
    $email = trim($_POST['email']);
    $description = trim($_POST['description']);
    //Echo each item in POST
    if (!empty($date) && !empty($email) && !empty($description)) {
        echo validate_date($date);
        //filter_var checks a variable against a filter and returns TRUE if it passes
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email: $email</p>";
        }
        echo '<p>' . htmlspecialchars($description) . '</p>';
    }
}
?>