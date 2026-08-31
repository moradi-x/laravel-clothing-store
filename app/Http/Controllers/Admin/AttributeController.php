<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\AttributeNode;

class AttributeController extends Controller
{

    public function index()
    {

        $attributes = Attribute::oldest()->paginate(20);
        return view('admin.attributes.index', compact('attributes'));
    }

    public function create()
    {
        return view('admin.attributes.create');
    }


    public function store(Request $request)
    {
        $request->validate(rules: [
            "name" => ['required']
        ]);

        Attribute::create([
            'name' => $request->name,
        ]);

        alert()->success('ویژگی مورد نظر با موفقیت ایجاد شد', 'با تشکر');

        return redirect()->route('admin.attributes.index');
    }


    public function show(Attribute $attribute)
    {
        return view('admin.attributes.show', compact('attribute'));
    }


    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.edit', compact('attribute'));
    }


    public function update(Request $request, Attribute $attribute)
    {
        $request->validate(rules: [
            "name" => ['required']
        ]);

        $attribute->update([
            'name' => $request->name,
        ]);

        alert()->success('ویژگی مورد نظر با موفقیت ویرایش شد', 'با تشکر');

        return redirect()->route('admin.attributes.index');
    }


    public function destroy(string $id)
    {
        //
    }
}
