<?php

use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/dashboard', function () {
})->name('dashboard') ;


Route::prefix('/admin-panel/management')->name('admin.')->group(function(){
    Route::resource('brands',BrandController::class);
    Route::resource('attributes',AttributeController::class);
    Route::resource('categories',CategoryController::class);
});