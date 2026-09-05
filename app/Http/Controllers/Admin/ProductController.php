<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $tags = Tag::all();
        $categories = Category::where('parent_id', '!=', 0)->get();
        $brands = Brand::all();

        return View('admin.products.create', compact('brands', 'categories', 'tags'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'brand_id' => ['required'],
            'is_active' => ['required'],
            'tag_ids' => ['required'],
            'description' => ['required'],
            'primary_image' => [
                'required',
                'mimes:jpg,jpeg,png,svg'
            ],
            'images' => ['required'],
            'images.*' => ['mimes:jpg,jpeg,png,svg'],
            'category_id' => ['required'],
            'attribute_ids' => ['required'],
            'attribute_ids.*' => ['required'],
            'variation_values' => ['required'],
            'variation_values.*.*' => ['required'],
            'variation_values.price.*' => ['integer'],
            'variation_values.quantity.*' => ['integer'],
            'delivery_amount' => ['required', 'integer'],
            'delivery_amount_per_product' => ['nullable', 'integer'],
        ]);

        try {
            DB::beginTransaction();

            $ProductImageController =  new ProductImageController();
            $fileNameImages = $ProductImageController->upload(
                $request->primary_image,
                $request->images
            );

            //    محصول ایجاد 
            $product = Product::create([
                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'primary_image' => $fileNameImages['fileNamePrimaryImage'],
                'description' => $request->description,
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivery_amount_per_product,
            ]);
            //   ها عکس ایجاد  
            foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $fileNameImage
                ]);
            }
            // ایجاد ویژگی
            $ProductAttributeController =  new ProductAttributeController();
            $ProductAttributeController->store(
                $request->attribute_ids,
                $product
            );

            $category = Category::find($request->category_id);
            // ایجاد متغیر
            $ProductVariationController =  new ProductVariationController();
            $ProductVariationController->store(
                $request->variation_values,
                $category
                    ->attributes()
                    ->wherePivot('is_variation', 1)
                    ->first()
                    ->id,
                $product
            );

            $product->tags()->attach($request->tag_ids);


            DB::commit();
        } catch (\Throwable $ex) {
            DB::rollBack();

            alert()->error('مشکل در ایجاد  محصول',  $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success(' محصول مورد نظر با موفقیت ایجاد شد', 'با تشکر');

        return redirect()->route('admin.products.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
