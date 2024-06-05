<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1/client')->group(function () {

    Route::get('/about', function () {
        return "Hello from the API v1 About route!";
    });

    Route::post('/contact', function () {
        return "Hello from the API v1 Contact route!";
    });

    Route::post('/privacy', function () {
        return "Hello from the API v1 Privacy route!";
    });
});
