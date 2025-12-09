<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fecha', function() {
return date("d/m/y h:i:s");
});

?>
