<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $reason = $_POST['reason'];

  echo $name;
  echo $date;
  echo $reason;
}