<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;

class BannerController extends Controller
{

    public function index()
    {
        $banners = Banner::oldest()->paginate(20);
        return view('admin.banners.index', compact('banners'));
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
            'image' => $fileNameImage,
            'title' => $request->title,
            'text' => $request->text,
            'priority' => $request->priority,
            'is_active' => $request->is_active,
            'type' => $request->type,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button_icon' => $request->button_icon,
        ]);


        alert()->success('بنر مورد نظر با موفقیت ایجاد شد', 'با تشکر');

        return redirect()->route('admin.banners.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(Banner $banner)
    {
        // $banners = Banner::all();
        return view('admin.banners.edit', compact('banner'));
    }


    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image' => ['nullable', 'mimes:jpg,jpeg,png,svg'],
            'priority' => ['required', 'integer'],
            'type' => ['required']
        ]);
        if ($request->has('image')) {

            $fileNameImage = now()->format('Ymd_His')
                . '_' . Str::random(3)
                . '_' . $request->image->getClientOriginalName();

            $oldImagePath = public_path(
                env('BANNER_IMAGES_UPLOAD_PATH') . '/' . $banner->image
            );

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            $request->image->move(public_path(env('BANNER_IMAGES_UPLOAD_PATH'),), $fileNameImage);
        }


        $banner->update([
            'image' => $request->has('image') ? $fileNameImage : $banner->image,
            'title' => $request->title,
            'text' => $request->text,
            'priority' => $request->priority,
            'is_active' => $request->is_active,
            'type' => $request->type,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button_icon' => $request->button_icon,
        ]);


        alert()->success('بنر مورد نظر با موفقیت ویرایش شد', 'با تشکر');

        return redirect()->route('admin.banners.index');
    }


    public function destroy(Banner $banner)
    {
        $imagePath = public_path(env('BANNER_IMAGES_UPLOAD_PATH') . '/' . $banner->image);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $banner->delete();

        alert()->success('بنر مورد نظر با موفقیت حذف شد', 'با تشکر');

        return redirect()->back();
    }
}
