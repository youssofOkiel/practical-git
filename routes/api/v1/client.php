<?php

use Illuminate\Support\Facades\Route;

Route::get('/client', function () {
    return "Hello from the API v1 client route!";
});
