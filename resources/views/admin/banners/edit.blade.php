@extends('admin.layouts.admin')
@section('title')
    - edit banners
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white ">
            <div class=" mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">
                    ویرایش بنر {{ $banner->name }}
                </h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.banners.update', ['banner' => $banner->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">نام</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{ $banner->name }}">

                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $banner->getRawOriginal('is_active') == 1 ? 'selected' : '' }}> فعال
                            </option>
                            <option value="0" {{ $banner->getRawOriginal('is_active') == 0 ? 'selected' : '' }}> غیر
                                فعال </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection
