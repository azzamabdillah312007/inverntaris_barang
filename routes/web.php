<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login' , [AuthController::class , 'showLogin'])->name('login.form');
Route::post('/login' , [AuthController::class , 'login'])->name('login.submit');
Route::get('/admin/dashboard' , [AdminController::class , 'index'])->name('admin.dashboard');