<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
