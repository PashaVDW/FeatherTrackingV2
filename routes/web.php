<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(\App\Http\Controllers\DashboardController::class)->group(function () {
    Route::get('/', 'index');
});
