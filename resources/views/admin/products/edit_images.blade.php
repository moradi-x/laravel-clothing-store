@extends('admin.layouts.admin')
@section(section: 'title')
    - edit product images
@endsection
@section('script')
    <script>
        // نمایش نام فایل تصویر اصلی
        $('#primary_image').change(function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        });

        // نمایش نام فایل تصاویر
        $('#images').change(function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" mb-4">
                <h5 class="font-weight-bold">
                    ویرایش تصاویر محصول : {{ $product->name }}
                </h5>
            </div>
            <hr>
            @include('admin.sections.errors')

            {{-- ویرایش عکس اصلی --}}
            <div class="row">
                <div class="col-12 col-md-12 mb-5 ">
                    <h5>تصویر اصلی : </h5>
                </div>
                <div class="col-12 col-md-3 mb-5 ">
                    <div class="card">
                        <img class="card-img-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $product->primary_image) }}"
                            alt="{{ $product->name }}">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-12 col-md-12 mb-5 ">
                    <h5>تصآویر : </h5>
                </div>
                @foreach ($product->images as $image)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-image-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $image->image) }}"
                                alt="{{ $product->name }}">

                            <div class="card-body text-center">
                                <form
                                    action="
                                {{ route('admin.products.images.destroy', ['product' => $product->id]) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                                    <button type="submit" class=" btn btn-danger btn-sm mb-3">
                                        حذف
                                    </button>
                                </form>

                                <form
                                    action="
                                {{ route('admin.products.images.set_primary', ['product' => $product->id]) }}"
                                    method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                                    <button type="submit" class=" btn btn-primary btn-sm mb-3">
                                        انتخاب به عنوان تصویر اصلی
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>

            <form action=" {{ route('admin.products.images.add', ['product' => $product->id]) }} " method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{-- انتخاب تصویر --}}
                    <div class="form-group col-md-4 ">
                        <label for="primary_image">انتخاب تصویر اصلی</label>
                        <div class="custom-file">
                            <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                            <label for="primary_image" class="custom-file-label">انتخاب فایل</label>
                        </div>
                    </div>

                    <div class="form-group col-md-4 ">
                        <label for="images">انتخاب تصاویر </label>
                        <div class="custom-file">
                            <input type="file" name="images[]" class="custom-file-input" id="images" multiple>
                            <label for="images" class="custom-file-label">انتخاب فایل ها</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>
@endsection
