@extends('admin.layouts.admin')

@section('title')
    - index banners
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white ">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">
                    لیست بنر ها ( {{ $banners->total() }} )
                </h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.banners.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد بنر
                </a>
            </div>
            <div>
                <div class="table-responsive">

                    <table class="table table-bordered table-striped  text-center ">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> نام </th>
                                <th> وضعیت </th>
                                <th> عملیات </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $banner)
                                <tr>
                                    <th>
                                        {{ $banners->firstitem() + $key }}
                                    </th>
                                    <th>
                                        {{ $banner->name }}
                                    </th>
                                    <th>
                                        <span
                                            class="{{ $banner->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                            {{ $banner->is_active }}
                                        </span>
                                    </th>
                                    <th  style="white-space: nowrap;">
                                        <a class="btn btn-sm btn-outline-success"
                                            href="{{ route('admin.banners.show', ['banner' => $banner->id]) }}">نمایش</a>
                                        <a class="btn btn-sm btn-outline-info mr-3 "
                                            href="{{ route('admin.banners.edit', ['banner' => $banner->id]) }}">ویرایش</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5 ">
                {{ $banners->render() }}
            </div>
        </div>
    </div>
@endsection
