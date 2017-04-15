<?php
require __DIR__ . '/vendor/autoload.php';

use Respect\Validation\Validator;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $date = trim($_POST['date']);
  $reason = trim($_POST['reason']);

  echo $name;
  
  $dateValidator = Validator::notEmpty()->date();
  
  if ($dateValidator->validate($date)) {
    echo $date;
  }
  
  echo htmlspecialchars($reason);
}
