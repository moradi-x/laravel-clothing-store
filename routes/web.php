<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard') ;


Route::prefix('/admin-panel/management')->name('admin.')->group(function(){
    Route::resource('brands',BrandController::class);
});