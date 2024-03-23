<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(\App\Http\Controllers\DashboardController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index');
})->name('dashboard');

Route::controller(\App\Http\Controllers\CategoryController::class)->middleware('auth')->group(function () {
    Route::post('/storeCategory', 'store')->name('createstore');
})->name('category');
