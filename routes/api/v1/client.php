<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1/client')->group(function () {

    Route::get('/about', function () {
        return "Hello from the API v1 About route!";
    });
});
