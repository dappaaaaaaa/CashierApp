<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/admin/tambah',[AdminController::class,'tambah'])->name('admin.tambah');
Route::post('/admin/submit',[AdminController::class,'submit'])->name('admin.submit');