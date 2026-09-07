@extends('admin.layouts.admin')
@section('title')
   - show banners
@endsection
@section('content')
    <!-- show Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white ">
            <div class=" mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">
                    بنر : {{ $banner->name }}
                </h5>
            </div>
            <hr>
            {{-- @include('admin.sections.errors') --}}
   
                <div class="row">
                    <div class="form-group col-md-3">
                        <label >نام</label>
                        <input class="form-control" value="{{ $banner->name }}" disabled type="text">
                    </div>

                    <div class="form-group col-md-3">
                        <label >وضعیت</label>
                        <input class="form-control" value="{{ $banner->is_active }}" disabled type="text">
                    </div>

                    <div class="form-group col-md-3">
                        <label >تاریخ ایجاد</label>
                        <input class="form-control" value="{{ verta($banner->created_at)->format('Y-n-j   H:I')  }}" disabled type="text">
                    </div>
                    
                </div>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-dark mt-5">بازگشت</a>
            
        </div>
    </div>
@endsection
