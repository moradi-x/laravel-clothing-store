@extends('admin.layouts.admin')
@section('title')
    - edit  products 
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" mb-4">
                <h5 class="font-weight-bold">
                    ویرایش محصول {{ $product->name }}
                </h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">نام</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{ $product->name }}">

                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection
