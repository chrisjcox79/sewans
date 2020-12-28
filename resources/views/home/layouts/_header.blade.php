    <div class="top-header-wrapper">
        <!--Promotion Bar-->
        <div class="notification-bar mobilehide" style="background-color: rgb(189, 223, 201);">
            <a href="#" class="notification-bar__message"><img src="home/assets/images/1140x50-a_8.jpg" alt="" class="img-fluid"></a>
            <span class="close-announcement"><i class="anm anm-times-l" aria-hidden="true"></i></span>
        </div>
        <!--End Promotion Bar-->
        </div>
        <header class="header animated d-flex align-items-center header-1">
            <div class="container">
                <div class="row">
                    <!--Mobile Icons-->
                    <div class="col-4 col-sm-4 col-md-4 d-block d-lg-none mobile-icons">
                        <!--Mobile Toggle-->
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                        <!--End Mobile Toggle-->
                        <!--Search-->
                        <div class="site-search iconset">
                            <i class="icon anm anm-search-l"></i>
                        </div>
                        <!--End Search-->
                    </div>
                    <!--Mobile Icons-->
                    <!--Desktop Logo-->
                    <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                        <a href="{{route('home')}}">
                            <img src="{{asset('home/assets/images/logo.jpg')}}" alt="SEWANS" class="img-fluid"
                                title="SEWANS" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu mdropdown"><a href="{{route('home')}}">首页 <i
                                            class="anm anm-angle-down-l"></i></a>
                                    {{-- <div class="megamenu style1">
                                        <ul class="grid mmWrapper">
                                            <li class="grid__item large-up--one-whole">
                                                <ul class="grid">
                                                    <li class="grid__item lvl-1 col-md-6 col-lg-6">
                                                        <a href="{{route('root')}}" class="site-nav lvl-1 menu-title">首页</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="{{route('root')}}"
                                                                    class="site-nav lvl-2">Home 01</a></li>
                                                            <li class="lvl-2"><a href="index-demo2.html"
                                                                    class="site-nav lvl-2">Home 02</a></li>
                                                            <li class="lvl-2"><a href="index-demo3.html"
                                                                    class="site-nav lvl-2">Home 03</a></li>
                                                            <li class="lvl-2"><a href="index-demo4.html"
                                                                    class="site-nav lvl-2">Home 04</a></li>
                                                            <li class="lvl-2"><a href="index-demo5.html"
                                                                    class="site-nav lvl-2">Home 05</a></li>
                                                            <li class="lvl-2"><a href="index-demo6.html"
                                                                    class="site-nav lvl-2">Home 06</a></li>
                                                            <li class="lvl-2"><a href="index-demo7.html"
                                                                    class="site-nav lvl-2">Home 07</a></li>
                                                            <li class="lvl-2"><a href="index-demo8.html"
                                                                    class="site-nav lvl-2">Home 08</a></li>
                                                            <li class="lvl-2"><a href="index-demo9.html"
                                                                    class="site-nav lvl-2">Home 09</a></li>
                                                            <li class="lvl-2"><a href="index-medical-demo.html"
                                                                    class="site-nav lvl-2">Medical <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-6 col-lg-6">
                                                        <a href="#" class="site-nav lvl-1 menu-title">Homepages</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="index-demo10.html"
                                                                    class="site-nav lvl-2">Home 10</a></li>
                                                            <li class="lvl-2"><a href="index-demo11.html"
                                                                    class="site-nav lvl-2">Home 11</a></li>
                                                            <li class="lvl-2"><a href="index-demo12.html"
                                                                    class="site-nav lvl-2">Home 12</a></li>
                                                            <li class="lvl-2"><a href="index-demo13.html"
                                                                    class="site-nav lvl-2">Home 13</a></li>
                                                            <li class="lvl-2"><a href="index-demo14.html"
                                                                    class="site-nav lvl-2">Home 14</a></li>
                                                            <li class="lvl-2"><a href="index-demo15.html"
                                                                    class="site-nav lvl-2">Home 15</a></li>
                                                            <li class="lvl-2"><a href="index-demo16.html"
                                                                    class="site-nav lvl-2">Home 16</a></li>
                                                            <li class="lvl-2"><a href="index-demo17.html"
                                                                    class="site-nav lvl-2">Home 17</a></li>
                                                            <li class="lvl-2"><a href="index-demo18.html"
                                                                    class="site-nav lvl-2">Home 18</a></li>
                                                            <li class="lvl-2"><a href="index-pet-store.html"
                                                                    class="site-nav lvl-2">Pet Store <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </li>
                                <li class="lvl1 parent megamenu"><a href="{{route('category.men')}}">男装 <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <div class="megamenu style4">
                                        <ul class="grid grid--uniform mmWrapper">
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                    class="site-nav lvl-1 menu-title">外套</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="category-2columns.html"
                                                            class="site-nav lvl-2">羽绒</a></li>
                                                    <li class="lvl-2"><a href="category-3columns.html"
                                                            class="site-nav lvl-2">大衣</a></li>
                                                    <li class="lvl-2"><a href="category-4columns.html"
                                                            class="site-nav lvl-2">休闲外套</a></li>
                                                    <li class="lvl-2"><a href="category-5columns.html"
                                                            class="site-nav lvl-2">外套</a></li>
                                                    <li class="lvl-2"><a href="category-6columns.html"
                                                            class="site-nav lvl-2">开胸外套</a></li>
                                                    <li class="lvl-2"><a href="category-7columns.html"
                                                            class="site-nav lvl-2">连衣帽</a></li>
                                                    <li class="lvl-2"><a href="category-empty.html"
                                                            class="site-nav lvl-2">超轻型羽绒</a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                    class="site-nav lvl-1 menu-title">上身类</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="shop-list-view.html"
                                                            class="site-nav lvl-2">运动系列</a></li>
                                                    <li class="lvl-2"><a href="shop-category-slideshow.html"
                                                            class="site-nav lvl-2">长袖</a></li>
                                                    <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                            class="site-nav lvl-2">休闲衬衫</a></li>
                                                    <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                            class="site-nav lvl-2">商务衬衫</a></li>
                                                    <li class="lvl-2"><a href="shop-fullwidth.html"
                                                            class="site-nav lvl-2">针织衫</a></li>
                                                    <li class="lvl-2"><a href="shop-no-sidebar.html"
                                                            class="site-nav lvl-2">短袖T恤/背心</a></li>
                                                    <li class="lvl-2"><a href="shop-category-slideshow.html"
                                                            class="site-nav lvl-2">POLO恤衫</a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                    class="site-nav lvl-1 menu-title">下身类</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                            class="site-nav lvl-2">牛仔裤</a></li>
                                                    <li class="lvl-2"><a href="shop-small-heading.html"
                                                            class="site-nav lvl-2">9分裤</a></li>
                                                    <li class="lvl-2"><a href="shop-no-sidebar.html"
                                                            class="site-nav lvl-2">休闲裤</a></li>
                                                    <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                            class="site-nav lvl-2">暖裤</a></li>
                                                    <li class="lvl-2"><a href="shop-heading-with-banner2.html"
                                                            class="site-nav lvl-2">西装裤</a></li>
                                                    <li class="lvl-2"><a href="swatches-style.html"
                                                            class="site-nav lvl-2">短裤</a></li>
                                                    <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                            class="site-nav lvl-2">Chino裤</a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                    class="site-nav lvl-1 menu-title">其他系列</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                                class="site-nav lvl-2">牛仔裤</a></li>
                                                        <li class="lvl-2"><a href="shop-small-heading.html"
                                                                class="site-nav lvl-2">9分裤</a></li>
                                                        <li class="lvl-2"><a href="shop-no-sidebar.html"
                                                                class="site-nav lvl-2">休闲裤</a></li>
                                                        <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                class="site-nav lvl-2">暖裤</a></li>
                                                        <li class="lvl-2"><a href="shop-heading-with-banner2.html"
                                                                class="site-nav lvl-2">西装裤</a></li>
                                                        <li class="lvl-2"><a href="swatches-style.html"
                                                                class="site-nav lvl-2">短裤</a></li>
                                                        <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                class="site-nav lvl-2">Chino裤</a></li>
                                                    </ul>
                                            </li>
                                        </ul>
                                        <div class="row clear">
                                            <div class="col-md-4 col-lg-4">
                                                <a href="#;"><img src="home/assets/images/megamenu-banner4.jpg"
                                                        data-src="home/assets/images/megamenu-banner4.jpg" alt="" /></a>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <a href="#;"><img src="home/assets/images/megamenu-banner5.jpg"
                                                        data-src="home/assets/images/megamenu-banner5.jpg" alt="" /></a>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <a href="#;"><img src="home/assets/images/megamenu-banner6.jpg"
                                                        data-src="home/assets/images/megamenu-banner6.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="{{route('category.women')}}">女装 <i
                                            class="anm anm-angle-down-l"></i></a>
                                            <div class="megamenu style4">
                                                <ul class="grid grid--uniform mmWrapper">
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1 menu-title">外套</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="category-2columns.html"
                                                                    class="site-nav lvl-2">羽绒</a></li>
                                                            <li class="lvl-2"><a href="category-3columns.html"
                                                                    class="site-nav lvl-2">大衣</a></li>
                                                            <li class="lvl-2"><a href="category-4columns.html"
                                                                    class="site-nav lvl-2">休闲外套</a></li>
                                                            <li class="lvl-2"><a href="category-5columns.html"
                                                                    class="site-nav lvl-2">外套</a></li>
                                                            <li class="lvl-2"><a href="category-6columns.html"
                                                                    class="site-nav lvl-2">开胸外套</a></li>
                                                            <li class="lvl-2"><a href="category-7columns.html"
                                                                    class="site-nav lvl-2">连衣帽</a></li>
                                                            <li class="lvl-2"><a href="category-empty.html"
                                                                    class="site-nav lvl-2">超轻型羽绒</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1 menu-title">上身类</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="shop-list-view.html"
                                                                    class="site-nav lvl-2">运动系列</a></li>
                                                            <li class="lvl-2"><a href="shop-category-slideshow.html"
                                                                    class="site-nav lvl-2">长袖</a></li>
                                                            <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                                    class="site-nav lvl-2">休闲衬衫</a></li>
                                                            <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                    class="site-nav lvl-2">商务衬衫</a></li>
                                                            <li class="lvl-2"><a href="shop-fullwidth.html"
                                                                    class="site-nav lvl-2">针织衫</a></li>
                                                            <li class="lvl-2"><a href="shop-no-sidebar.html"
                                                                    class="site-nav lvl-2">短袖T恤/背心</a></li>
                                                            <li class="lvl-2"><a href="shop-category-slideshow.html"
                                                                    class="site-nav lvl-2">POLO恤衫</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1 menu-title">下身类</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                                    class="site-nav lvl-2">牛仔裤</a></li>
                                                            <li class="lvl-2"><a href="shop-small-heading.html"
                                                                    class="site-nav lvl-2">9分裤</a></li>
                                                            <li class="lvl-2"><a href="shop-no-sidebar.html"
                                                                    class="site-nav lvl-2">休闲裤</a></li>
                                                            <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                    class="site-nav lvl-2">暖裤</a></li>
                                                            <li class="lvl-2"><a href="shop-heading-with-banner2.html"
                                                                    class="site-nav lvl-2">西装裤</a></li>
                                                            <li class="lvl-2"><a href="swatches-style.html"
                                                                    class="site-nav lvl-2">短裤</a></li>
                                                            <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                    class="site-nav lvl-2">Chino裤</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1 menu-title">其他系列</a>
                                                            <ul class="subLinks">
                                                                <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                                        class="site-nav lvl-2">牛仔裤</a></li>
                                                                <li class="lvl-2"><a href="shop-small-heading.html"
                                                                        class="site-nav lvl-2">9分裤</a></li>
                                                                <li class="lvl-2"><a href="shop-no-sidebar.html"
                                                                        class="site-nav lvl-2">休闲裤</a></li>
                                                                <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                        class="site-nav lvl-2">暖裤</a></li>
                                                                <li class="lvl-2"><a href="shop-heading-with-banner2.html"
                                                                        class="site-nav lvl-2">西装裤</a></li>
                                                                <li class="lvl-2"><a href="swatches-style.html"
                                                                        class="site-nav lvl-2">短裤</a></li>
                                                                <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                                        class="site-nav lvl-2">Chino裤</a></li>
                                                            </ul>
                                                    </li>
                                                </ul>
                                                <div class="row clear">
                                                    <div class="col-md-4 col-lg-4">
                                                        <a href="#;"><img src="home/assets/images/megamenu-banner4.jpg"
                                                                data-src="home/assets/images/megamenu-banner4.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4">
                                                        <a href="#;"><img src="home/assets/images/megamenu-banner5.jpg"
                                                                data-src="home/assets/images/megamenu-banner5.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4">
                                                        <a href="#;"><img src="home/assets/images/megamenu-banner6.jpg"
                                                                data-src="home/assets/images/megamenu-banner6.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">童装 <i
                                            class="anm anm-angle-down-l"></i></a>
{{--                                    <ul class="dropdown">--}}
{{--                                        <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>--}}
{{--                                        <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>--}}
{{--                                        <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>--}}
{{--                                        <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="lookbook-shop.html" class="site-nav">Lookbook Shop</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">MAGAZINE <i
                                            class="anm anm-angle-down-l"></i></a>
                                    {{-- <ul class="dropdown">
                                        <li><a href="{{route('login')}}" class="site-nav">Login</a></li>
                                        <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                        <li><a href="aboutus-style1.html" class="site-nav">About Us <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a>
                                                </li>
                                                <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-style1.html" class="site-nav">Contact Us <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a>
                                                </li>
                                                <li><a href="contact-style2.html" class="site-nav">Contact Us Style2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="faqs-style1.html" class="site-nav">FAQs <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="faqs-style1.html" class="site-nav">FAQs Style1</a></li>
                                                <li><a href="faqs-style2.html" class="site-nav">FAQs Style2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="cms.html" class="site-nav">CMS</a></li>
                                        <li><a href="error-404.html" class="site-nav">Error 404</a></li>
                                        <li><a href="coming-soon.html" class="site-nav">Coming soon <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                    </ul> --}}
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">新品上市 <i
                                            class="anm anm-angle-down-l"></i></a>
                                    {{-- <ul class="dropdown">
                                        <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                        <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                        <li><a href="blog-2columns.html" class="site-nav">2 Columns</a></li>
                                        <li><a href="blog-3columns.html" class="site-nav">3 Columns</a></li>
                                        <li><a href="blog-4columns.html" class="site-nav">4 Columns</a></li>
                                        <li><a href="blog-single-post.html" class="site-nav">Single Post</a></li>
                                    </ul> --}}
                                </li>

                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 align-self-center icons-col text-right">
                        <!--Search-->
                      @include('home.layouts._search')
                        <!--End Search-->
                        <!--Setting Dropdown-->
                        @include('home.layouts._setting')
                        <!--End Setting Dropdown-->
                        <!--Wishlist-->
                        <div class="wishlist-link iconset">
                            <a href="{{route('wishlist.index')}}">
                            <i class="icon anm anm-heart-l"></i>
                            <span class="wishlist-count">0</span>
                        </a>
                        </div>
                        <!--End Wishlist-->
                        <!--Minicart Dropdown-->
                        <div class="header-cart iconset">
                            <a href="#" class="site-header__cart btn-minicart" data-toggle="modal"
                                data-target="#minicart-drawer">
                                <i class="icon anm anm-bag-l"></i>
                                <span class="site-cart-count">2</span>
                            </a>
                        </div>
                        <!--End Minicart Dropdown-->
                    </div>
                </div>
            </div>
        </header>
