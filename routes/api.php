<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;

Route::post('/create-payment', [ReservasiController::class, 'createPayment']);