<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentCategories  = Category::where('parent_id', 0)->get();
        $attributes = Attribute::all();
        return view('admin.categories.create', compact('parentCategories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(rules: [
            'name' => ['required'],
            'slug' => ['required', 'unique:categories'],
            'parent_id' => ['required'],
            
            'attribute_ids' => ['required'],
            'attribute_is_filter_ids' => ['required'],
            'variation_id' => ['required'],
        ]);

        $category = Category::create([
            'name' => $request->name ,
            'slug' => $request->slug ,
            'parent_id' => $request->parent_id ,
            'attribute_ids' => $request->attribute_ids ,
            'attribute_is_filter_ids' => $request->attribute_is_filter_ids ,
            'variation_id' => $request->variation ,
        ]);

        foreach ($request->attribute_ids as $attributeId) {
            $attribute = Attribute::findOrFail($attributeId);
            $attribute->categories()->attach($category->id , [
                'is_filter' => in_array($attributeId , $request->attribute_is_filter_ids) ? 1 : 0 ,
                'is_variation' => $request->variation_id == $attributeId ? 1 : 0 ,
            ] )  ;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
