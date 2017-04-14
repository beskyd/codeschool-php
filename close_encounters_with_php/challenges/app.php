<?php
function validate_date($date_raw) {
  if ($time = strtotime($date_raw)) {
    return date('m d y', $time);
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $date = trim($_POST['date']);
  $reason = trim($_POST['reason']);

  echo $name . "<br>";

  echo validate_date($date);

  echo "<br>" . htmlspecialchars($reason);
}
