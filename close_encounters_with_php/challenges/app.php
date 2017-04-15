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
    
  } catch (NestedValidationException $e) {
    
  }