<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $date = trim($_POST['date']);
  $reason = trim($_POST['reason']);

  echo $name . "<br>";
  if ($time = strtotime($date)) {
    echo date('m d Y', $time);
  }
  echo "<br>" . htmlspecialchars($reason);
}
