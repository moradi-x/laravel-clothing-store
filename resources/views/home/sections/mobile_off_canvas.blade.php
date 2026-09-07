<div class="mobile-off-canvas-active">
    <a class="mobile-aside-close">
        <i class="sli sli-close"></i>
    </a>

    <div class="header-mobile-aside-wrap">
        <div class="mobile-search">
            <form class="search-form" action="#">
                <input type="text" placeholder=" ... جستجو " />
                <button class="button-search">
                    <i class="sli sli-magnifier"></i>
                </button>
            </form>
        </div>

        <div class="mobile-menu-wrap">
            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu text-right">
                        <li class="menu-item-has-children">
                            <a href="index.html"> صفحه ای اصلی </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="shop.html">فروشگاه</a>
                            @php
                                $parentCategories = App\Models\Category::where('parent_id', 0)->get();
                            @endphp
                            <ul class="dropdown">
                                @foreach ($parentCategories as $parentCategory)
                                    <li class="menu-item-has-children">
                                        <a href="#">{{ $parentCategory->name }}</a>

                                        <ul class="dropdown">
                                            @foreach ($parentCategory->children as $childCategory)
                                                <li><a href="#"> {{ $childCategory->name }} </a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="contact-us.html">تماس با ما</a></li>

                        <li><a href="about_us.html"> در باره ما</a></li>
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->
        </div>

        <div class="mobile-curr-lang-wrap">
            <div class="single-mobile-curr-lang">
                <ul class="text-right">
                    <li class="my-3"><a href="login.html"> ورود </a></li>
                    <li class="my-3">
                        <a href="register.html"> ایجاد حساب </a>
                    </li>
                    <li class="my-3"><a href="my-account.html"> پروفایل </a></li>
                </ul>
            </div>
        </div>

        <div class="mobile-social-wrap text-center">
            <a class="facebook" href="#"><i class="sli sli-social-facebook"></i></a>
            <a class="twitter" href="#"><i class="sli sli-social-twitter"></i></a>
            <a class="pinterest" href="#"><i class="sli sli-social-pinterest"></i></a>
            <a class="instagram" href="#"><i class="sli sli-social-instagram"></i></a>
            <a class="google" href="#"><i class="sli sli-social-google"></i></a>
        </div>
    </div>
</div>
