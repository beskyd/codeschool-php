<?php

use App\Farm;

$farm = Farm::find(3);
$data = [
  'name' => 'Thompson Farms',
  'city' => 'Thomasville',
  'website' => 'thompsonfarms.com'
];

$farm->fill($data);