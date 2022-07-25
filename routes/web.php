<?php

use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('stripe',[StripePaymentController::class,'stripe']);
Route::post('stripePost',[StripePaymentController::class,'stripePost'])->name('stripePost');
