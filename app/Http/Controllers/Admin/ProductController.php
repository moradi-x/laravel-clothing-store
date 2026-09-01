<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
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
        $categories = Category::where('parent_id', '!=' , 0)->get();
        $brands = Brand::all();

        return View('admin.products.create' , compact('brands','categories','tags'));
    }

    
    public function store(Request $request)
    {
        //
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
