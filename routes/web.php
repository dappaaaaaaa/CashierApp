<?php

use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cashier', [CashierController::class, 'index']);
