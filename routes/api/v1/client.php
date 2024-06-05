<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {

    Route::get('/client', function () {
        return "Hello from the API v1 client route!";
    });
});
