<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Rohan\Library\Http\Controllers'], function () {
    Route::get('library-example', function () {
        return "Hello from the Library!";
    });
});
