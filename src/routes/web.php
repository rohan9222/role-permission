<?php

use Rohan\Library\CustomLibrary;

Route::get('/library-test', function () {
    $library = new CustomLibrary();
    return $library->helloLibrary();
});
