<?php
use App\Farm;

$farms = Farm::all();

foreach ($farms as $farm) {
    echo $farm->name;
}