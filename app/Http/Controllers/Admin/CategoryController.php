<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::oldest()->paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $parentCategories  = Category::where('parent_id', 0)->get();
        $attributes = Attribute::all();
        return view('admin.categories.create', compact('parentCategories', 'attributes'));
    }


    public function store(Request $request)
    {

        $request->validate(rules: [
            'name' => ['required'],
            'slug' => ['required', 'unique:categories,slug'],
            'parent_id' => ['required'],

            'attribute_ids' => ['required'],
            'attribute_is_filter_ids' => ['required'],
            'variation_id' => ['required'],
        ]);

        try {
            DB::beginTransaction();
            $category = Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'is_active' => $request->is_active,
                'parent_id' => $request->parent_id,
            ]);

            foreach ($request->attribute_ids as $attributeId) {
                $attribute = Attribute::findOrFail($attributeId);
                $attribute->categories()->attach($category->id, [
                    'is_filter' => in_array($attributeId, $request->attribute_is_filter_ids) ? 1 : 0,
                    'is_variation' => $request->variation_id == $attributeId ? 1 : 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            DB::commit();
        } catch (\Throwable $ex) {
            DB::rollBack();
            // $error = $ex->getMessage();

            alert()->error('مشکل در ایجاد دسته بندی',  $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('دسته بندی مورد نظر با موفقیت ایجاد شد', 'با تشکر');

        return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }


    public function edit(Category $category)
    {
        // $parentCategories  = Category::where('parent_id', 0)->get();
        $parentCategories = Category::where('id', '!=', $category->id)->get();
        $attributes = Attribute::all();

        return view('admin.categories.edit', 
        compact('category', 'parentCategories' , 'attributes'
        ));
    }

    public function update(Request $request, Category $category) {
        
        $request->validate(rules: [
            'name' => ['required'],
            'slug' => ['required', 'unique:categories,slug,'.$category->id],
            'parent_id' => ['required'],

            'attribute_ids' => ['required'],
            'attribute_is_filter_ids' => ['required'],
            'variation_id' => ['required'],
        ]);

        try {
            DB::beginTransaction();
            $category->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'is_active' => $request->is_active,
                'parent_id' => $request->parent_id,
            ]);

            $category->attributes()->detach();

            foreach ($request->attribute_ids as $attributeId) {
                $attribute = Attribute::findOrFail($attributeId);
                $attribute->categories()->attach($category->id, [
                    'is_filter' => in_array($attributeId, $request->attribute_is_filter_ids) ? 1 : 0,
                    'is_variation' => $request->variation_id == $attributeId ? 1 : 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            DB::commit();
        } catch (\Throwable $ex) {
            DB::rollBack();
            // $error = $ex->getMessage();

            alert()->error('مشکل در ویرایش دسته بندی',  $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('دسته بندی مورد نظر با موفقیت ویرایش شد', 'با تشکر');

        return redirect()->route('admin.categories.index');
    }

    public function destroy(string $id) {}
}
