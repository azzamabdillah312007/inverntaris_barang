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
Route::get('/admin/menage-staff' , [AdminController::class , 'showMenageStaff'])->name('admin.menage-staff');
Route::get('/admin/menage-item' , [AdminController::class , 'showMenageItem'])->name('admin.menage-item');
Route::get('/admin/transaction' , [AdminController::class , 'showTransaction'])->name('admin.transaction');

// menage
Route::get('/admin/menage-staff/added-staff' , [AdminController::class , 'showAddedStaff']);
Route::post('/admin/menage-staff/added-staff' , [AdminController::class , 'addedStaff'])->name('added-staff');

Route::get('admin/menage-item/{id}/detail' , [AdminController::class, 'showDetailItem']);
Route::post('admin/menage-item/{id}/detail' , [AdminController::class, 'addStock'])->name('add-stock');



