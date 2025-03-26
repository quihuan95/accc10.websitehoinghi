<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\VisaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VisaController::class, 'index'])->name('home.index');
Route::get('/visa', [VisaController::class, 'index'])->name('visa.index');
Route::get('/transportation', [TransportationController::class, 'index'])->name('transportation.index');
Route::get('/accommodation', [AccommodationController::class, 'index'])->name('accommodation.index');