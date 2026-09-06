catch (\Throwable $ex) {
DB::rollBack();

alert()->error('مشکل در ایجاد محصول', $ex->getMessage())->persistent('حله');
return redirect()->back();
}
<?php

use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::prefix('/admin-panel/management')->name('admin.')->group(function () {
    Route::resource('brands', BrandController::class);
    Route::resource('attributes', AttributeController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('products', ProductController::class);

    Route::get('/category-attribute/{category}', [CategoryController::class, 'getCategoryAttribute']);

    // edit product images
    Route::get('/products/{product}/images-edit', [ProductImageController::class, 'edit'])
        ->name('products.images.edit');

    Route::delete('/products/{product}/images-destroy', [ProductImageController::class, 'destroy'])
        ->name('products.images.destroy');

    Route::put('/products/{product}/images-set-edit', [ProductImageController::class, 'setPrimary'])
        ->name('products.images.set_primary');

    Route::post('/products/{product}/image-add', [ProductImageController::class, 'add'])
        ->name('products.images.add');
});
