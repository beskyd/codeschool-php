<?php
require __DIR__ . '/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $date = trim($_POST['date']);
  $reason = trim($_POST['reason']);

  echo $name . "<br>";
  echo validate_date($date) . "<br>";
  echo htmlspecialchars($reason);
}
