<?php
use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;


$v = new Validator;
//var_dump($v);

function validate_date($date_string) 
{
    $date_validator = Validator::date('d-m-Y')->notEmpty();
    try:
        $date_validator->assert($date_string);
        //strtotime will convert most any date to a Unix timestamp
        $date_time = strtotime($date_string);
        return date('F jS Y', $date_time);
    } catch (NestedValidationException $e) {
        //The NestedValidationException has a method named getMessages that will return some useful information
        //will return the array of errors
        var_dump($e->getMessages());
        //return 'The date must be in a DD-MM-YYYY format.';
    }
    
}