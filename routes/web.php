<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/customers',
    [CustomerController::class,'customers'])->name('customers.customer');

Route::get('/api/v1/new-customer-form',
    [CustomerController::class,'new'])->name('customers.new');

Route::post('/api/v1/add-customer',
    [CustomerController::class,'add'])->name('customers.add');
