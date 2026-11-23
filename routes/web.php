<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\ProfileController;

// Halaman bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});

// Home Silhouette & Co.
Route::get('/home', function () {
    return view('home');
})->name('home');

// Dashboard Customer
Route::get('/customer/dashboard', [DashboardController::class, 'index'])
    ->name('customer.dashboard');

// Profile Customer
Route::get('/customer/profile', [ProfileController::class, 'index'])
    ->name('customer.profile');
