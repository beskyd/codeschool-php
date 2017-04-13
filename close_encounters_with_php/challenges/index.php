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
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Travel to Earth Request</title>
  </head>
  <body>
    <div class="content">
      <form class="form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label for="date">Date of Departure</label>
          <input type="date" class="form-control" id="date">
        </div>

        <div class="form-group">
          <label for="reason">Reason for Visit</label>
          <input type="text" class="form-control" id="reason">
        </div>

        <button type="submit" class="btn" disabled="disabled">Submit</button>
      </form>
    </div>
  </body>
</html>