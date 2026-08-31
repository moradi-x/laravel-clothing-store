@extends('admin.layouts.admin')
@section('title')
   - create attribute
@endsection
@section('content')
    <!-- show Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" mb-4">
                <h5 class="font-weight-bold">
                    ویژگی : {{ $attribute->name }}
                </h5>
            </div>
            <hr>
            {{-- @include('admin.sections.errors') --}}
   
                <div class="row">
                    <div class="form-group col-md-3">
                        <label >نام</label>
                        <input class="form-control" value="{{ $attribute->name }}" disabled type="text">
                    </div>

                    <div class="form-group col-md-3">
                        <label >تاریخ ایجاد</label>
                        <input class="form-control" value="{{ verta($attribute->created_at)->format('Y-n-j   H:I')  }}" disabled type="text">
                    </div>
                    
                </div>
                <a href="{{ route('admin.attributes.index') }}" class="btn btn-dark mt-5">بازگشت</a>
            
        </div>
    </div>
@endsection
