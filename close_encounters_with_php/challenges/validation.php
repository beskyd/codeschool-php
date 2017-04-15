<?php
function validate_date($date_raw)
{
  if ($time = strtotime($date_raw)) {
    return date('m d y', $time);
  }
}