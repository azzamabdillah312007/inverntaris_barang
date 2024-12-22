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

Route::get('/admin/menage-item/added-item' , [AdminController::class , 'showAddedItem']);
Route::post('/admin/menage-item/added-item' , [AdminController::class , 'addedItem'])->name('added-item');
Route::get('/admin/menage-item/{id}/detail' , [AdminController::class, 'showDetailItem']);
Route::post('admin/menage-item/{id}/detail' , [AdminController::class, 'addStock'])->name('add-stock');

Route::get('/admin/menage-category' , [AdminController::class , 'showCategory']);
Route::get('/admin/menage-category/added-category' , [AdminController::class , 'showAddCategory']);
Route::post('/admin/menage-category/added-category' , [AdminController::class , 'addedCategory'])->name('added-category');
Route::get('/admin/menage-sub_category' , [AdminController::class , 'showSubCategory']);
Route::get('/admin/menage-sub_category/added-sub_category' , [AdminController::class , 'showAddSubCategory']);
Route::post('/admin/menage-sub_category/added-sub_category' , [AdminController::class , 'addedSubCategory'])->name('added-sub_category');

Route::get('/admin/menage-location' , [AdminController::class , 'showlocation']);
Route::get('/admin/menage-location/added-location' , [AdminController::class , 'showAddLocation']);
Route::post('/admin/menage-location/added-location' , [AdminController::class , 'addedLocation'])->name('added-location');

Route::get('/admin/menage-transaction' , [AdminController::class , 'showTransaction']);
Route::get('/admin/menage-transaction/added-transaction' , [AdminController::class , 'showAddTransaction']);
Route::post('/admin/menage-transaction/added-transaction' , [AdminController::class , 'addedTransaction'])->name('added-transaction');





