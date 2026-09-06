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
        $products = Product::oldest()->paginate(21);
        return view('admin.products.index', compact('products'));
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


    public function show(Product $product)
    {
        $productAttributes = $product->attributes()->with('attribute')->get();
        $productVariations = $product->variations;
        $images = $product->images;
        return view(
            'admin.products.show',
            compact(
                'product',
                'productAttributes',
                'productVariations',
                'images'
            )
        );
    }



    public function edit(Product $product)
    {
        $brands = Brand::all();
        $tags = Tag::all();
        $productAttributes = $product->attributes()->with('attribute')->get();
        $productVariations = $product->variations;
        $images = $product->images;
        return view('admin.products.edit', compact(
            'brands',
            'tags',
            'product',
            'productAttributes',
            'productVariations'
        ));
    }


    public function update(Request $request, Product $product)
    {

        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'brand_id' => ['required', 'exists:brands,id'],
            'is_active' => ['required'],
            'tag_ids' => ['required'],
            'tag_ids.*' => ['exists:tags,id'],
            'description' => ['required'],
            'attribute_values' => ['required'],
            'variation_values' => ['required'],
            'variation_values.*.price' => ['required', 'integer'],
            'variation_values.*.quantity' => ['required', 'integer'],
            'variation_values.*.sale_price' => ['nullable', 'integer'],
            'variation_values.*.data_on_sale_from' => ['nullable', 'date'],
            'variation_values.*.date_on_sale_to' => ['nullable', 'date'],

            'delivery_amount' => ['required', 'integer'],
            'delivery_amount_per_product' => ['nullable', 'integer'],
        ]);

        try {
            DB::beginTransaction();

            //    محصول ایجاد 
            $product->update([
                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivery_amount_per_product,
            ]);

            // ایجاد ویژگی
            $ProductAttributeController =  new ProductAttributeController();
            $ProductAttributeController->update(
                $request->attribute_values
            );

            // ایجاد متغیر
            $ProductVariationController =  new ProductVariationController();
            $ProductVariationController->update(
                $request->variation_values,
            );

            $product->tags()->sync($request->tag_ids);


            DB::commit();
        } catch (\Throwable $ex) {
            DB::rollBack();

            alert()->error('مشکل در ویرایش  محصول',  $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success(' محصول مورد نظر با موفقیت ویرایش شد', 'با تشکر');

        return redirect()->route('admin.products.index');
    }


    public function destroy(string $id)
    {
        //
    }
    public function editCategory(Request $request, Product $product)
    {
        $categories = Category::where('parent_id', '!=', 0)->get();

        return view('admin.products.edit_category', compact('product', 'categories'));
    }

    public function updateCategory(Request $request, Product $product)
    {
        $request->validate([

            'category_id' => ['required'],
            'attribute_ids' => ['required'],
            'attribute_ids.*' => ['required'],
            'variation_values' => ['required'],
            'variation_values.*.*' => ['required'],
            'variation_values.price.*' => ['integer'],
            'variation_values.quantity.*' => ['integer']
        ]);

        try {
            DB::beginTransaction();

            //    محصول ایجاد 
            $product->update([
                'category_id' => $request->category_id,
            ]);


            // ایجاد ویژگی
            $ProductAttributeController =  new ProductAttributeController();
            $ProductAttributeController->change(
                $request->attribute_ids,
                $product
            );

            $category = Category::find($request->category_id);
            // ایجاد متغیر
            $ProductVariationController =  new ProductVariationController();
            $ProductVariationController->change(
                $request->variation_values,
                $category
                    ->attributes()
                    ->wherePivot('is_variation', 1)
                    ->first()
                    ->id,
                $product
            );

            DB::commit();
            alert()->success('دسته بندی محصول با موفقیت ویرایش شد', 'با تشکر');
            return redirect()->route('admin.products.show', ['product' => $product->id]);
            
        } catch (\Throwable $ex) {
            DB::rollBack();

            alert()->error('مشکل در ایجاد  محصول',  $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }
    }
}
