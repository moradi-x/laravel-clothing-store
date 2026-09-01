<?php

use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/dashboard', function () {
   return view('admin.dashboard');
})->name('dashboard') ;


Route::prefix('/admin-panel/management')->name('admin.')->group(function(){
    Route::resource('brands',BrandController::class);
    Route::resource('attributes',AttributeController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('tags',TagController::class);
    Route::resource('products',ProductController::class);

    Route::get('/category-attribute/{category}',[CategoryController::class ,'getCategoryAttribute' ]);
});