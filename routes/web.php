<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;

// ===============================
// HALAMAN UTAMA (HOME)
// ===============================
Route::get('/', function () {
    return view('home');
})->name('home');

// ===============================
// CUSTOMER (PUBLIC)
// ===============================
Route::get('/monitoring', function () {
    return view('customer');
})->name('monitoring');

// ===============================
// MENU
// ===============================
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// ===============================
// RESERVASI
// ===============================
Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');

// ===============================
// LOGIN OWNER (FIREBASE)
// ===============================
Route::get('/login', function () {
    return view('login');
})->name('login');

// ===============================
// DASHBOARD OWNER
// ===============================
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');