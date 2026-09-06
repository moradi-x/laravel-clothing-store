@extends('admin.layouts.admin')
@section('title')
    - show products
@endsection
@section('content')
    <!-- show Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white ">
            <div class=" mb-4 text-center text-md-right ">
                <h5 class="font-weight-bold">
                    محصول : {{ $product->name }}
                </h5>
            </div>
            <hr>
            {{-- @include('admin.sections.errors') --}}

            <div class="row">
                <div class="form-group col-md-3">
                    <label>نام</label>
                    <input class="form-control" value="{{ $product->name }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label> نام برند </label>
                    <input class="form-control" value="{{ $product->brand->name }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>نام دسته بندی </label>
                    <input class="form-control" value="{{ $product->category->name }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>وضعیت</label>
                    <input class="form-control" value="{{ $product->is_active }}" disabled type="text">
                </div>

                <div class="form-group col-md-3  ">
                    <label>تگ ها</label>
                    <div  class="form-control div-desabled">
                     @foreach ($product->tags as $tag)
                         {{ $tag->name }} {{ $loop->last ? '' : ',' }}
                     @endforeach   
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label>تاریخ ایجاد</label>
                    <input class="form-control" value="{{ verta($product->created_at)->format('Y/m/d H:i:s') }}" disabled
                        type="text">
                </div>

                <div class="form-group col-md-12">
                    <label>توضیحات</label>
                    <textarea class="form-control" disabled rows="3">{{ $product->description }}</textarea>
                </div>
                {{-- هزینه ارسال --}}
                <div class="col-md-12">
                    <hr>
                    <p> هزینه ارسال :</p>
                </div>

                <div class="form-group col-md-3">
                    <label>هزینه ارسال</label>
                    <input class="form-control" value="{{ $product->delivery_amount }}" disabled type="text">
                </div>

                <div class="form-group col-md-3">
                    <label>هزینه ارسال به ازای هر محصول اضافی</label>
                    <input class="form-control" value="{{ $product->delivery_amount_per_product }}" disabled type="text">
                </div>
                {{-- نشان دادن ویژگی ها و متغیر  --}}
                <div class="col-md-12">
                    <hr>
                    <p>ویژگی ها :</p>
                </div>
                @foreach ($productAttributes as $productAttribute)
                    <div class="form-group col-md-3">
                        <label>{{ $productAttribute->attribute->name }}</label>
                        <input class="form-control" value="{{ $productAttribute->value }}" disabled type="text">
                    </div>
                @endforeach

                @foreach ($productVariations as $variation)
                    <div class="col-md-12">
                        <hr>
                        <div class="d-flex">
                            <p class="mb-0 ">قیمت و موجودی برای متغیر
                                ({{ $variation->value }})
                                :
                            </p>
                            <p class=" mb-0 mr-3">
                                <button class="btn btn-sm btn-primary" type="button" data-toggle="collapse"
                                    data-target="#collapse-{{ $variation->id }}"> نمایش

                                </button>
                            </p>
                        </div>
                    </div>

                    <div class="com-md-12">
                        <div class="collapse mt-2 " id="collapse-{{ $variation->id }}">
                            <div class="card card-body ">
                                <div class="row">
                                    <div class="form-group col-md-3 ">
                                        <label> قیمت </label>
                                        <input type="text" disabled class="form-control"
                                            value="{{ $variation->price }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">تعداد</label>
                                        <input type="text" disabled class="form-control"
                                            value="{{ $variation->quantity }}">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">sku</label>
                                        <input type="text" disabled class="form-control" value="{{ $variation->sku }}">
                                    </div>

                                    <div class="col-md-12">
                                        <p>حراج : </p>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="">قیمت حراجی</label>
                                        <input type="text" disabled class="form-control"
                                            value="{{ $variation->sale_price }}">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>تاریخ شروع حراجی</label>
                                        <input type="text" disabled class="form-control"
                                            value="{{ $variation->date_on_sale_from == null ? null : verta($variation->date_on_sale_from)->format('Y/m/d H:i:s') }}">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>تاریخ پایان حراجی</label>
                                        <input type="text" disabled class="form-control"
                                            value="{{ $variation->date_on_sale_from == null ? null : verta($variation->date_on_sale_to)->format('Y/m/d H:i:s') }}">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--  نمایش تصاویر --}}
                <div class="col-md-12">
                    <hr>
                    <p>تصاویر محصول :</p>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-image-top"
                            src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $product->primary_image) }}"
                            alt="{{ $product->name }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>
                @foreach ($images as $image)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-image-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $image->image) }}"
                                alt="{{ $product->name }}">
                        </div>
                    </div>
                @endforeach

            </div>
            <a href="{{ route('admin.products.index') }}" class="btn btn-dark mt-5">بازگشت</a>

        </div>
    </div>
@endsection
