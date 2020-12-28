@extends('home.layouts.app')
@section('title', '首页')
@section('content')

    <div id="page-content">
        <!-- Banner Masonary-->
        <div class="collection-banners style1">
            <div class="container">
                <div class="grid-masonary banner-grid">
                    <div class="grid-sizer"></div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 banner-item">
                            <div class="collection-grid-item">
                                <a href="#" class="overlay"></a>
                                <div class="img">
                                    <img class="blur-up lazyload" data-src="home/assets/images/collection-banner/demo14-collection-bnr1.jpg" src="home/assets/images/collection-banner/demo14-collection-bnr1.jpg" alt="" title=" " />
                                </div>
                                <div class="details center wd-70">
                                    <div class="inner">
                                        <h3 class="title">Instantly update your look with must-have crop tops from Staud, PatBO, A.L.C. + more</h3>
                                        <a href="#;" class="btn">Shop Crop top</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 banner-item">
                            <div class="collection-grid-item">
                                <a href="#" class="overlay"></a>
                                <div class="img">
                                    <img class="blur-up lazyload" data-src="home/assets/images/collection-banner/demo14-collection-bnr2.jpg" src="home/assets/images/collection-banner/demo14-collection-bnr2.jpg" alt="" title=" " />
                                </div>
                                <div class="details center wd-70">
                                    <div class="inner">
                                        <h3 class="title">The Summer Color Code The boldest hues to wear bright about now</h3>
                                        <a href="#;" class="btn">SHOP THE EDIT</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 banner-item full-banner-item">
                            <div class="collection-grid-item">
                                <a href="#" class="overlay"></a>
                                <div class="img">
                                    <img class="blur-up lazyload" data-src="home/assets/images/collection-banner/demo17-collection-bnr1.jpg" src="home/assets/images/collection-banner/demo17-collection-bnr1.jpg" alt="" title=" " />
                                </div>
                                <div class="details center wd-70">
                                    <div class="inner">
                                        <h3 class="title"> The new season calls for washed denim, tie-dye separates &amp; distressed bermuda shorts to add to your everyday wardrobe</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Masonary-->

        <!--Image Banners-->
        <div class="section imgBanners style3 no-pt-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 img-banner-item">
                        <div class="imgBanner-grid-item">
                            <div class="inner">
                                <a href="#">
                                <span class="img">
                                    <img class="blur-up lazyload" data-src="home/assets/images/collection-banner/demo5-collection-bnr2.jpg" src="home/assets/images/collection-banner/demo5-collection-bnr2.jpg" alt="Hot Occasion" title="Hot Occasion" />
                                </span>
                                </a>
                                <div class="details w-70 left-top">
                                    <p class="tt-small">Pre-Fall Collection</p>
                                    <h3 class="title">Accessories</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 img-banner-item">
                        <div class="imgBanner-grid-item">
                            <div class="inner">
                                <a href="#">
                                <span class="img">
                                    <img class="blur-up lazyload" data-src="home/assets/images/collection-banner/demo5-collection-bnr3.jpg" src="home/assets/images/collection-banner/demo5-collection-bnr3.jpg" alt="Hot Occasion" title="Hot Occasion" />
                                </span>
                                </a>
                                <div class="details w-70 left">
                                    <p class="tt-small">Best Brands</p>
                                    <h3 class="title">Elegant Shoes</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 img-banner-item">
                        <div class="imgBanner-grid-item">
                            <div class="inner">
                                <a href="#">
                                <span class="img">
                                    <img class="blur-up lazyload" data-src="home/assets/images/collection-banner/demo5-collection-bnr1.jpg" src="home/assets/images/collection-banner/demo5-collection-bnr1.jpg" alt="Trend Alert" title="Trend Alert" />
                                </span>
                                </a>
                                <div class="details w-70 right">
                                    <p class="tt-small">Best Clothes Online</p>
                                    <h3 class="title">New Style</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Image Banners-->

        <!--Products Grid Section NEW ARRIVALS-->
        <div class="section products-grid-section no-pt-section">
            <div class="container">
                <div class="section-header">
                    <h2>New Arrivals</h2>
                </div>
                <div class="grid-products style2 grid--view-items">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                            <a class="overlay" href="{{route('products.index')}}"></a>
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="{{route('products.index')}}" class="product-img">
                                    <!-- image -->
                                    <img class="blur-up lazyload" data-src="home/assets/images/demo/66864-gray.jpg" src="home/assets/images/demo/66864-gray.jpg" alt="" title="">
                                    <!-- End image -->
                                </a>
                                <!--end product image-->
                                <!--Product Label-->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!--Product Label-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="{{route('products.index')}}">Top Slip On Velcro Sneakers</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$99.01</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!--End Product Review-->
                                <!--Product Button-->
                                <div class="button-set">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                            <a class="overlay" href="{{route('products.index')}}"></a>
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="{{route('products.index')}}" class="product-img">
                                    <!-- image -->
                                    <img class="blur-up lazyload" data-src="home/assets/images/demo/66398-YELLOW.jpg" src="home/assets/images/demo/66398-YELLOW.jpg" alt="" title="">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="{{route('products.index')}}">Button Up Top Black</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$199.01</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                                <!--Product Button-->
                                <div class="button-set">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                            <a class="overlay" href="{{route('products.index')}}"></a>
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="{{route('products.index')}}" class="product-img">
                                    <!-- image -->
                                    <img class="blur-up lazyload" data-src="home/assets/images/demo/55354-brown0828.jpg" src="home/assets/images/demo/55354-brown0828.jpg" alt="" title="">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="{{route('products.index')}}">Button Up Top Black</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$199.01</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                                <!--Product Button-->
                                <div class="button-set">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                            <a class="overlay" href="{{route('products.index')}}"></a>
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="{{route('products.index')}}" class="product-img">
                                    <!-- image -->
                                    <img class="blur-up lazyload" data-src="home/assets/images/demo/NSBNC0120E0003BNC0120E0003_x_a001.jpg" src="home/assets/images/demo/NSBNC0120E0003BNC0120E0003_x_a001.jpg" alt="" title="">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="{{route('products.index')}}">Crop Top Green</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$59.00</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                                <!--Product Button-->
                                <div class="button-set">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <a class="overlay" href="{{route('products.index')}}"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="home/assets/images/demo/60184-GRAY1.jpg" src="home/assets/images/demo/" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Backpack With Contrast Bow</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$99.01</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <a class="overlay" href="{{route('products.index')}}"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="home/assets/images/demo/66398-YELLOW.jpg" src="home/assets/images/product-images/66398-YELLOW.jpg" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Top Slip On Velcro Sneakers</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$99.01</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <a class="overlay" href="{{route('products.index')}}"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="home/assets/images/demo/se-6614-charcoal.jpg" src="home/assets/images/demo/se-6614-charcoal.jpg" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Backpack With Contrast Bow</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$99.01</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                                <a class="overlay" href="{{route('products.index')}}"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="home/assets/images/demo/CFTS01796274-black.jpg" src="home/assets/images/demo/CFTS01796274-black.jpg" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Crop Top Green</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$59.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Products Grid Section NEW ARRIVALS-->

        <!--Brand Logo Slider-->
        <div class="section logo-section no-pt-section">
            <div class="container">
                <div class="section-header">
                    <h2>Shop by Brands</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">
                            <div class="logo-bar__item">
                                <a href="#;"><img src="home/assets/images/logo/brandlogo1.png" alt="" title="" /></a>
                            </div>
                            <div class="logo-bar__item">
                                <a href="#;"><img src="home/assets/images/logo/brandlogo2.png" alt="" title="" /></a>
                            </div>
                            <div class="logo-bar__item">
                                <a href="#;"><img src="home/assets/images/logo/brandlogo3.png" alt="" title="" /></a>
                            </div>
                            <div class="logo-bar__item">
                                <a href="#;"><img src="home/assets/images/logo/brandlogo4.png" alt="" title="" /></a>
                            </div>
                            <div class="logo-bar__item">
                                <a href="#;"><img src="home/assets/images/logo/brandlogo5.png" alt="" title="" /></a>
                            </div>
                            <div class="logo-bar__item">
                                <a href="#;"><img src="home/assets/images/logo/brandlogo6.png" alt="" title="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Brand Logo Slider-->

        <!--Blog Post-->
        <div class="section home-blog-post">
            <div class="container">
                <div class="section-header">
                    <h2>News &amp; Edit</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="blog-post-slider">
                            <div class="blogpost-item">
                                <a href="#;" class="post-thumb">
                                    <img src="home/assets/images/blog/post-img1.jpg" alt="" title=""/>
                                </a>
                                <div class="post-detail">
                                    <h3 class="post-title"><a href="#;">Our development is your success</a></h3>
                                    <ul class="publish-detail">
                                        <li><span class="article__date">March 06, 2019</span></li>
                                        <li><i class="anm anm-comments-l"></i> <a href="#;" class="btn-link">1 comment</a></li>
                                    </ul>
                                    <div class="rte article-excerpt">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or rand... </div>
                                    <a href="blog-single-post.html" class="btn btn--small">Read more</a>
                                </div>
                            </div>
                            <div class="blogpost-item">
                                <a href="#;" class="post-thumb">
                                    <img src="home/assets/images/blog/post-img2.jpg" alt="" title=""/>
                                </a>
                                <div class="post-detail">
                                    <h3 class="post-title"><a href="#;">Ensuring Customer Success</a></h3>
                                    <ul class="publish-detail">
                                        <li><span class="article__date">February 11, 2019</span></li>
                                    </ul>
                                    <div class="rte article-excerpt">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or rand... </div>
                                    <a href="blog-single-post.html" class="btn btn--small">Read more</a>
                                </div>
                            </div>
                            <div class="blogpost-item">
                                <a href="#;" class="post-thumb">
                                    <img src="home/assets/images/blog/post-img3.jpg" alt="" title=""/>
                                </a>
                                <div class="post-detail">
                                    <h3 class="post-title"><a href="#;">We can make your business shine!</a></h3>
                                    <ul class="publish-detail">
                                        <li><span class="article__date">February 19, 2019</span></li>
                                        <li><i class="anm anm-comments-l"></i> <a href="#;" class="btn-link">2 comments</a></li>
                                    </ul>
                                    <div class="rte article-excerpt">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or rand... </div>
                                    <a href="blog-single-post.html" class="btn btn--small">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Blog Post-->

    </div><!--End Page Wrapper-->

@stop
