@extends('home.layouts.home')

@section('title')
   - صفحه اصلی
@endsection
{{-- @include('sweetalert::alert') --}}

@section('content')
  

 <div class="slider-area section-padding-1">
            <div class="slider-active owl-carousel nav-style-1">
                <div class="single-slider slider-height-1 bg-paleturquoise">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6 text-right">
                                <div class="slider-content slider-animated-1">
                                    <h1 class="animated">لورم ایپسوم</h1>
                                    <p class="animated">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        و با استفاده از طراحان گرافیک است
                                    </p>
                                    <div class="slider-btn btn-hover">
                                        <a class="animated" href="shop.html">
                                            <i class="sli sli-basket-loaded"></i>
                                            فروشگاه
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-single-img slider-animated-1">

                                    <img class="animated" src="assets/img/slider/1.jfif" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height-1 bg-paleturquoise">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6  text-right">
                                <div class="slider-content slider-animated-1">
                                    <h1 class="animated">لورم ایپسوم</h1>
                                    <p class="animated">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        و با استفاده از طراحان گرافیک است
                                    </p>
                                    <div class="slider-btn btn-hover">
                                        <a class="animated" href="shop.html">
                                            <i class="sli sli-basket-loaded"></i>
                                            فروشگاه
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-single-img slider-animated-1">

                                    <img class="animated" src="assets/img/slider/2.jfif" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-area pt-100 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-6.png"
                                    alt="" /></a>
                            <div class="banner-content-2 banner-position-5">
                                <h4>زنانه</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-7.png"
                                    alt="" /></a>
                            <div class="banner-content-2 banner-position-5">
                                <h4>جین</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-8.png"
                                    alt="" /></a>
                            <div class="banner-content-2 banner-position-5">
                                <h4>مردانه</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-9.png"
                                    alt="" /></a>
                            <div class="banner-content banner-position-6 text-right">
                                <h3>لورم ایپسوم</h3>
                                <h2>لورم ایپسوم <br />متن</h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30 text-center scroll-zoom">
                            <a href="product-details.html"><img class="animated"
                                    src="assets/img/banner/banner-10.png" alt="" /></a>
                            <div class="banner-content-3 banner-position-7">
                                <h2>لورم ایپسوم متن ساختگی</h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-area pb-70">
            <div class="container">
                <div class="section-title text-center pb-40">
                    <h2> لورم ایپسوم </h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون
                        بلکه روزنامه و مجله
                    </p>
                </div>
                <div class="product-tab-list nav pb-60 text-center flex-row-reverse">
                    <a class="active" href="#product-1" data-toggle="tab">
                        <h4>مردانه</h4>
                    </a>
                    <a href="#product-2" data-toggle="tab">
                        <h4>زنانه</h4>
                    </a>
                    <a href="#product-3" data-toggle="tab">
                        <h4>بچه گانه</h4>
                    </a>
                </div>
                <div class="tab-content jump-2">
                    <div id="product-1" class="tab-pane active">
                        <div class="ht-products product-slider-active owl-carousel">
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-1.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html"> لورم ایپسوم </a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-3.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    90,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                        </div>
                    </div>

                    <div id="product-2" class="tab-pane">
                        <div class="ht-products product-slider-active owl-carousel">
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-5.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-1.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html"> لورم ایپسوم </a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-3.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    90,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->

                        </div>
                    </div>

                    <div id="product-3" class="tab-pane">
                        <div class="ht-products product-slider-active owl-carousel">
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title">
                                                <a href="#">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-1.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html"> لورم ایپسوم </a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-3.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    90,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg"
                                                alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="testimonial-area pt-80 pb-95 section-margin-1"
            style="background-image: url(assets/img/bg/bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <div class="testimonial-active owl-carousel nav-style-1">
                            <div class="single-testimonial text-center">
                                <img src="assets/img/testimonial/testi-1.png" alt="" />
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                    درصد گذشته، حال و
                                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                </p>
                                <div class="client-info">
                                    <img src="assets/img/icon-img/testi.png" alt="" />
                                    <h5>لورم ایپسوم</h5>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <img src="assets/img/testimonial/testi-2.png" alt="" />
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                    درصد گذشته، حال و
                                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                </p>
                                <div class="client-info">
                                    <img src="assets/img/icon-img/testi.png" alt="" />
                                    <h5>لورم ایپسوم</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-area pt-95 pb-70">
            <div class="container">
                <div class="section-title text-center pb-60">
                    <h2>لورم ایپسوم</h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </p>
                </div>
                <div class="arrivals-wrap scroll-zoom">
                    <div class="ht-products product-slider-active owl-carousel">
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-1.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم</a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html"> لورم ایپسوم </a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                55,000
                                                تومان
                                            </span>
                                            <span class="old">
                                                75,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم </a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                25,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-3.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم</a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                60,000
                                                تومان
                                            </span>
                                            <span class="old">
                                                90,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-4.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم</a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                60,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم </a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                60,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img src="assets/img/banner/banner-4.png"
                                    alt="" /></a>
                            <div class="banner-content banner-position-3">
                                <h3>لورم ایپسوم</h3>
                                <h2>لورم ایپسوم <br />متن </h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img src="assets/img/banner/banner-5.png"
                                    alt="" /></a>
                            <div class="banner-content banner-position-4">
                                <h3>لورم ایپسوم</h3>
                                <h2>لورم ایپسوم </h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-area" style="direction: rtl;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-feature text-right mb-40">
                            <div class="feature-icon">
                                <img src="assets/img/icon-img/free-shipping.png" alt="" />
                            </div>
                            <div class="feature-content">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-feature text-right mb-40 pl-50">
                            <div class="feature-icon">
                                <img src="assets/img/icon-img/support.png" alt="" />
                            </div>
                            <div class="feature-content">
                                <h4>لورم ایپسوم</h4>
                                <p>24x7 لورم ایپسوم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-feature text-right mb-40">
                            <div class="feature-icon">
                                <img src="assets/img/icon-img/security.png" alt="" />
                            </div>
                            <div class="feature-content">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12" style="direction: rtl;">
                                <div class="product-details-content quickview-content">
                                    <h2 class="text-right mb-4">لورم ایپسوم</h2>
                                    <div class="product-details-price">
                                        <span>
                                            50,000
                                            تومان
                                        </span>
                                        <span class="old">
                                            75,000
                                            تومان
                                        </span>
                                    </div>
                                    <div class="pro-details-rating-wrap">
                                        <div class="pro-details-rating">
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </div>
                                        <span>3 دیدگاه</span>
                                    </div>
                                    <p class="text-right">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها
                                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                    </p>
                                    <div class="pro-details-list text-right">
                                        <ul class="text-right">
                                            <li>- لورم ایپسوم</li>
                                            <li>- لورم ایپسوم متن ساختگی</li>
                                            <li>- لورم ایپسوم متن</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-size-color text-right">
                                        <div class="pro-details-size">
                                            <span>سایز</span>
                                            <div class="pro-details-size-content">
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                value="2" />
                                        </div>
                                        <div class="pro-details-cart">
                                            <a href="#">افزودن به سبد خرید</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i
                                                    class="sli sli-heart"></i></a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i
                                                    class="sli sli-refresh"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>دسته بندی :</span>
                                        <ul>
                                            <li><a href="#">مردانه,</a></li>
                                            <li><a href="#">پالتو</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>تگ ها :</span>
                                        <ul>
                                            <li><a href="#">لباس, </a></li>
                                            <li><a href="#">Furniture,</a></li>
                                            <li><a href="#">Electronic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/img/product/quickview-l1.svg" alt="" />
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/img/product/quickview-l2.svg" alt="" />
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/img/product/quickview-l3.svg" alt="" />
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/img/product/quickview-l2.svg" alt="" />
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img
                                                src="assets/img/product/quickview-s1.svg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-2"><img
                                                src="assets/img/product/quickview-s2.svg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-3"><img
                                                src="assets/img/product/quickview-s3.svg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-4"><img
                                                src="assets/img/product/quickview-s2.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div> 

@endsection
