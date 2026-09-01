@extends('admin.layouts.admin')

@section('title')
    - index products
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white ">
            <div class=" d-flex justify-content-between mb-4">
                <h5 class="font-weight-bold">
                    لیست محصول ها ( {{ $products->total() }} )
                </h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.products.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد محصول
                </a>
            </div>
            <div>
                <table class="table table-bordered table-striped  text-center ">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> نام </th>
                            <th> عملیات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <th>
                                    {{ $products->firstitem() + $key }}
                                </th>
                                <th>
                                    {{ $product->name }}
                                </th>

                                <th>
                                    <a class="btn btn-sm btn-outline-success"
                                        href="{{ route('admin.products.show', ['product' => $product->id]) }}">نمایش</a>
                                    <a class="btn btn-sm btn-outline-info mr-3 "
                                        href="{{ route('admin.products.edit', ['product' => $product->id]) }}">ویرایش</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
