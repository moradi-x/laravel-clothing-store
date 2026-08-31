<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = tag::oldest()->paginate(20);
        return view('admin.tags.index', compact('tags'));
    }

    
    public function create()
    {
        return view('admin.tags.create');

    }

    
    public function store(Request $request)
    {
           $request->validate(rules: [
            "name" => ['required']
        ]);

        tag::create([
            'name' => $request->name,
        ]);

        alert()->success('تگ مورد نظر با موفقیت ایجاد شد', 'با تشکر');

        return redirect()->route('admin.tags.index');
    }

   
    public function show(tag $tag)
    {
                return view('admin.tags.show', compact('tag'));

    }

    
    public function edit(tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));

    }

  
    public function update(Request $request, tag $tag)
    {
         $request->validate(rules: [
            "name" => ['required']
        ]);

        $tag->update([
            'name' => $request->name,
        ]);

        alert()->success('تگ مورد نظر با موفقیت ویرایش شد', 'با تشکر');

        return redirect()->route('admin.tags.index');
    }

    
    public function destroy(string $id)
    {
        //
    }
}
