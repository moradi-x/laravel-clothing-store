<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductImageController extends Controller
{
    public function upload($primaryimage, $images)
    {

        $fileNamePrimaryImage = now()->format('Ymd_His')
            . '_' . Str::random(3)
            . '_' . $primaryimage->getClientOriginalName();

        $primaryimage->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH'),), $fileNamePrimaryImage);


        $fileNameImages = [];
        foreach ($images as $image) {
            $fileNameImage = now()->format('Ymd_His')
                . '_' . Str::random(3)
                . '_' . $image->getClientOriginalName();

            $image->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNameImage);

            array_push($fileNameImages, $fileNameImage);
        }
        return [
            'fileNamePrimaryImage' => $fileNamePrimaryImage,
            'fileNameImages' => $fileNameImages
        ];
    }

    public function edit(Product $product)
    {
        return  view('admin.products.edit_images', compact('product'));
    }

    public function destroy(Request $request)
    {

        $request->validate(rules: [
            "image_id" => ['required', 'exists:product_images,id']
        ]);

        ProductImage::destroy(  $request->image_id );

        alert()->success('تصویر محصول  مورد نظر با موفقیت حذف شد', 'با تشکر');

        return redirect()->back();
    }

    public function setPrimary(Request $request)
    {

        $request->validate(rules: [
            "image_id" => ['required', 'exists:product_images,id']
        ]);

        ProductImage::destroy(  $request->image_id );

        alert()->success('تصویر محصول  مورد نظر با موفقیت حذف شد', 'با تشکر');

        return redirect()->back();
    }
}
