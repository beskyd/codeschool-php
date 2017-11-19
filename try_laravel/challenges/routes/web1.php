<?php
 
Route::get('/', 'FarmController@index');

Route::resource('farms', 'FarmController');