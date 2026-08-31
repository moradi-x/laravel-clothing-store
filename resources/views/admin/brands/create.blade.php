@extends('admin.layouts.admin')
@section('title')
    - create brands
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" mb-4">
                <h5 class="font-weight-bold">
                    ایجاد برند
                </h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.brands.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">نام</label>
                        <input class="form-control" id="name" name="name" type="text"
                            value="{{ old('name') }} ">

                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیر فعال </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('admin.brands.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection
