<?php

Route::get('/', function() {
  return "this is the home page";
});

Route::get('farms/{id}', function ($id) {
  return 'The id requested is ' . $id;
});


