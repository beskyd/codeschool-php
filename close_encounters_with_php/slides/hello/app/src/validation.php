<?php
use Respect\Validation\Validator;

$v = new Validator;

function validate_date($date_string) 
{
    //strtotime will convert most any date to a Unix timestamp
    if ($time = strtotime($date)) {
        return date('F jS Y', $time);
    } else {
        return $date_string . ' does not look valid';
    }
        
}