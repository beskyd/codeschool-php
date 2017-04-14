<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $reason = $_POST['reason'];

  echo $name;
  echo $date;
  echo $reason;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Travel to Earth Request</title>
  </head>
  <body>
    <div class="content">
      <?php include('content.php'); ?>
    </div>
  </body>
</html>