<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\RegController::class,'index']);

Route::get('/customer/register',[\App\Http\Controllers\CustomerAuthController::class,'register'])->name('customer.register');
Route::post('/customer/register',[\App\Http\Controllers\CustomerAuthController::class,'newCustomer'])->name('customer.register');

Route::middleware(['customer'])->group(function () {
    Route::get('/customer-dashboard', [\App\Http\Controllers\CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
});
