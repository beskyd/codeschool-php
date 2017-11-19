<?php

namespace App\Http\Controllers;

use App\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function index() 
    {
      $farms = Farm::all();
      return view('farms.index', ['farms' => $farms]);
    }
    
    public function show(Farm $farm)
    {
      return view('farms.show', ['farm' => $farm]);
    }
}
