<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('admin.banners.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'priority' => ['required', 'integer'],
            'type' => ['required']
        ]);

        $fileNameImage = now()->format('Ymd_His')
            . '_' . Str::random(3)
            . '_' . $request->image->getClientOriginalName();

        $request->image->move(public_path(env('BANNER_IMAGES_UPLOAD_PATH'),), $fileNameImage);

        Banner::create([
            'image' => $fileNameImage ,
            'title' => $request->title ,
            'text' => $request->text ,
            'priority' => $request->priority ,
            'is_active' => $request->is_active ,
            'type' => $request->type ,
            'button_text' => $request->button_text ,
            'button_link' => $request->button_link ,
            'button_icon' => $request->button_icon ,
        ]);

        
        alert()->success('بنر مورد نظر با موفقیت ایجاد شد', 'با تشکر');

        return redirect()->route('admin.banners.index');
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
