<?php
use Respect\Validation\Validator;

$v = new Validator;
//var_dump($v);

function validate_date($date_string) 
{
    $date_validator = Validator::date('d-m-Y')->notEmpty();
    if ($date_validator->validate($date_string)) {
        //strtotime will convert most any date to a Unix timestamp
        $date_time = strtotime($date_string);
        return date('F jS Y', $date_time);
    } else {
        return 'The date must be in a DD-MM-YYYY format.';
    }
    
}