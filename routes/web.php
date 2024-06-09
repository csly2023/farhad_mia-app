<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/series', [HomeController::class, 'series'])->name('series');
Route::get('/odd-even', [HomeController::class, 'oddEven'])->name('odd-even');
Route::get('/password', [HomeController::class, 'password'])->name('password');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::post('/series-calculate', [HomeController::class, 'seriesCalculate'])->name('series-calculate');
Route::post('/odd-even-calculate', [HomeController::class, 'oddEvenCalculate'])->name('odd-even-calculate');
Route::post('/password-generator', [HomeController::class, 'passwordGenerator'])->name('password-generator');
