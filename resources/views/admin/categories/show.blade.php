@extends('admin.layouts.admin')
@section('title')
    - create category
@endsection
@section('content')
    <!-- show Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" mb-4">
                <h5 class="font-weight-bold">
                    دسته بندی : {{ $category->name }}
                </h5>
            </div>
            <hr>
            {{-- @include('admin.sections.errors') --}}

            <div class="row">

                <div class="form-group col-md-3">
                    <label>نام</label>
                    <input class="form-control" value="{{ $category->name }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>نام انگلیسی</label>
                    <input class="form-control" value="{{ $category->slug }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label> والد</label>
                    <div class="form-control div-desabled">
                        @if ($category->parent_id == 0)
                            {{ $category->name }}
                        @else
                            {{ $category->parent->name }}
                        @endif
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label>وضعیت</label>
                    <input class="form-control" value="{{ $category->is_active }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>ایکون</label>
                    <input class="form-control" value="{{ $category->icon }}" disabled type="text">
                </div>


                <div class="form-group col-md-3">
                    <label>تاریخ ایجاد</label>
                    <input class="form-control" value="{{ verta($category->created_at)->format('Y-n-j   H:I') }}" disabled
                        type="text">
                </div>

                <div class="form-group col-md-12">
                    <label> توضیحات</label>
                    <textarea class="form-control" disabled>{{ $category->description }}</textarea>
                </div>


                <div class="col-md-3">
                    <label> ویژگی ها</label>
                    <div class="form-control div-desabled">
                        @foreach ($category->attributes as $attribute)
                            {{ $attribute->name }} {{ $loop->last ? '' : ',' }}
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3">
                    <label> ویژگی های قابل فیلتر</label>
                    <div class="form-control div-desabled">
                        @foreach ($category->attributes()->wherePivot('is_filter', 1)->get() as $attribute)
                            {{ $attribute->name }} {{ $loop->last ? '' : ',' }}
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3">
                    <label> ویژگی متغیر </label>
                    <div class="form-control div-desabled">
                        @foreach ($category->attributes()->wherePivot('is_variation', 1)->get() as $attribute)
                            {{ $attribute->name }} {{ $loop->last ? '' : ',' }}
                        @endforeach
                    </div>
                </div>

            </div>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-dark mt-5">بازگشت</a>

        </div>
    </div>
@endsection
