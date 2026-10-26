<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/business', BusinessController::class)->name('business');
Route::get('/operations', OperationsController::class)->name('operations');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])
    ->middleware('throttle:5,1')
    ->name('contact.submit');
