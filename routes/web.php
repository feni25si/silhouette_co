<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\ServiceController;
use App\Http\Controllers\Customer\MeasurementController;

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

// Layanan Customer
Route::get('/layanan', [ServiceController::class, 'index'])
    ->name('layanan.index');


// Detail Produk
Route::get('/layanan/{id}', [ServiceController::class, 'show'])
    ->name('layanan.detail');

// Data Ukuran Pelanggan
Route::get('/customer/ukuran', [MeasurementController::class, 'index'])
    ->name('customer.ukuran.index');

Route::get('/customer/ukuran/tambah', [MeasurementController::class, 'create'])
    ->name('customer.ukuran.create');