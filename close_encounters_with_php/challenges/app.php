<?php
require __DIR__ . '/vendor/autoload.php';

use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $date = trim($_POST['date']);
  $reason = trim($_POST['reason']);

  echo $name;

  $dateValidator = Validator::notEmpty()->date();

  try {
    $dateValidator->assert($date);
    echo date('m d Y', strtotime($date));
  } catch (NestedValidationException $e) {
    foreach ($e->getMessages() as $message) {
      echo $message;
    }
  }

  echo htmlspecialchars($reason);
}
