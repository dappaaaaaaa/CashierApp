<?php

<<<<<<< HEAD
use App\Http\Controllers\AdminController;
=======
use App\Http\Controllers\CashierController;
>>>>>>> ac1c16d5522b7b244086611614532aebb2092326
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/admin/tambah',[AdminController::class,'tambah'])->name('admin.tambah');
Route::post('/admin/submit',[AdminController::class,'submit'])->name('admin.submit');
=======
Route::get('/cashier', [CashierController::class, 'index']);
>>>>>>> ac1c16d5522b7b244086611614532aebb2092326
