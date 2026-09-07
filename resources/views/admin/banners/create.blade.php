@extends('admin.layouts.admin')
@section('title')
    - create banners
@endsection
@section('script')
    <script>
        $('#banner_image').change(function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white ">
            <div class=" mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">
                    ایجاد بنر
                </h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    {{-- انتخاب تصویر --}}
                    <div class="form-group col-md-3 ">
                        <label for="primary_image">انتخاب تصویر </label>
                        <div class="custom-file"> 
                            <input type="file" name="image" class="custom-file-input" id="banner_image">
                            <label for="banner_image" class="custom-file-label">انتخاب فایل</label>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="title">عنوان</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title') }} ">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="text">متن</label>
                        <input class="form-control" id="text" name="text" type="text"
                            value="{{ old('text') }} ">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="priority">اولویت</label>
                        <input class="form-control" id="priority" name="priority" type="number"
                            value="{{ old('priority') }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیر فعال </option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="type"> نوع بنر </label>
                        <input class="form-control" id="type" name="type" type="text"
                            value="{{ old('type') }} ">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="button_text">  متن دکمه </label>
                        <input class="form-control" id="button_text" name="button_text" type="text"
                            value="{{ old('button_text') }} ">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="button_link">  لینک دکمه </label>
                        <input class="form-control" id="button_link" name="button_link" type="text"
                            value="{{ old('button_link') }} ">
                    </div>

                     <div class="form-group col-md-3">
                        <label for="button_icon">  ایکون دکمه </label>
                        <input class="form-control" id="button_icon" name="button_icon" type="text"
                            value="{{ old('button_icon') }} ">
                    </div>

                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection
