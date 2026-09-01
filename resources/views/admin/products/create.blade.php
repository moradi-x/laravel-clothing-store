@extends('admin.layouts.admin')
@section(section: 'title')
    - create product

@section('script')
    <script>
        $('#brandSelect').selectpicker({
            'title': 'انتخاب برند'
        });

        $('#tagSelect').selectpicker({
            'title': 'انتخاب ویژگی'
        });

         $('#categoryelect').selectpicker({
            'title': 'انتخاب دسته بندی'
        });

        $('#primary_image').change(function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName)
        });

        $('#images').change(function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName)
        });
    </script>
@endsection
@endsection
@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
        <div class=" mb-4">
            <h5 class="font-weight-bold">
                ایجاد محصول
            </h5>
        </div>
        <hr>
        @include('admin.sections.errors')
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="name">نام</label>
                    <input class="form-control" id="name" name="name" type="text"
                        value="{{ old('name') }} ">
                </div>

                <div class="form-group col-md-3">
                    <label for="brand_id">برند</label>
                    <select id="brandSelect" name="brand_id" class="form-control" data-live-search= "true">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"> {{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="is_active">وضعیت</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="1" selected>فعال</option>
                        <option value="0">غیر فعال </option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="tag_ids">ویژگی</label>
                    <select id="tagSelect" name="tag_ids[]" class="form-control" multiple data-live-search= "true">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"> {{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="description">توضیحات </label>
                    <textarea class="form-control" id="description" name="description" value="{{ old('description') }}"> </textarea>
                </div>

                {{-- pdroduct images ection  --}}

                <div class="col-md-12">
                    <hr>
                    <p>تصاویر محصول :</p>
                </div>

                <div class="form-group col-md-3 ">
                    <label for="primary_image">انتخاب تصویر اصلی</label>
                    <div class="custom-file">
                        <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                        <label for="primary_image" class="custom-file-label">انتخاب فایل</label>
                    </div>
                </div>

                <div class="form-group col-md-3 ">
                    <label for="images">انتخاب تصاویر </label>
                    <div class="custom-file">
                        <input type="file" name="image[]" class="custom-file-input" id="primary_image" multiple>
                        <label for="images" class="custom-file-label">انتخاب فایل ها</label>
                    </div>
                </div>

                {{--  Category & attribute ection  --}}

                <div class="col-md-12">
                    <hr>
                    <p> دسته بندی و ویژگی ها :</p>
                </div>
                
                 <div class="col-md-12">
                    <div class="row justify-center ">
                        <div class="form-group col-md-3">
                    <label for="category_id">دسته بندی </label>
                    <select id="categorySelect" name="category_id" class="form-control" data-live-search= "true">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} - {{ $category->parent->name }}</option>
                        @endforeach
                    </select>
                </div>
                    </div>
                 </div>



            </div>
            <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
        </form>
    </div>
</div>
@endsection
