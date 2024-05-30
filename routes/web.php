<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RTController;
use App\Http\Controllers\LingkunganController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('rts', RTController::class);
Route::resource('lingkungans', LingkunganController::class);
Route::resource('wargas', WargaController::class);
Route::resource('tagihans', TagihanController::class);
Route::resource('pembayarans', PembayaranController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');