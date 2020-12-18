@extends('home.layouts.app')
@section('title', '首页')
@section('content')

    <div id="page-content">
        <!--Home slider-->
        @include('home.layouts._slider')
        <!--End Home slider-->
        <!--Store Feture-->
        {{-- <div class="store-info style2 store-info-section small-pd d-none d-sm-none d-md-block d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="display-table store-info style2">
                            <li class="display-table-cell">
                                <a href="#"><i class="anm anm-phone-call-l" aria-hidden="true"></i>
                                    <h5>Call Us Anytime</h5> <span class="sub-text"> <span>+1 (250)
                                            444-5555</span></span>
                                </a>
                            </li>
                            <li class="display-table-cell">
                                <i class="anm anm-truck-line" aria-hidden="true"></i>
                                <h5>Free Shipping</h5> <span class="sub-text"><span>When you spend
                                        $100+</span></span>
                            </li>
                            <li class="display-table-cell">
                                <i class="anm anm-undo-r" aria-hidden="true"></i>
                                <h5>Free Returns</h5> <span class="sub-text"> <span>30-days free return
                                        policy.</span> </span>
                            </li>
                            <li class="display-table-cell">
                                <i class="anm anm-lock-al" aria-hidden="true"></i>
                                <h5>Secured Payments</h5> <span class="sub-text"> <span>We accept all major credit
                                        cards.</span> </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--End Store Feture-->

        <!--Body Container-->
        <div class="container">
            <!--Image Banner-->
            <div class="section imgBanners style2 no-pb-section">
                <div class="section-header">
                    <h2>Shop The Edit</h2>
                    <p>The easiest and fastest way to create grid banners.</p>
                </div>
                <div class="collection-banners">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 img-banner-item">
                            <div class="imgBanner-grid-item">
                                <div class="inner btmleft">
                                    <a href="{{route('category.women')}}">
                                        <span class="img">
                                            <img class="blur-up lazyload"
                                                data-src="home/assets/images/collection-banner/collection-bn1-style2.jpg"
                                                src="home/assets/images/collection-banner/collection-bn1-style2.jpg" alt=""
                                                title=" " />
                                        </span>
                                        <span class="ttl"><span class="tt-small">女装</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 img-banner-item">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 img-banner-item">
                                    <div class="imgBanner-grid-item">
                                        <div class="inner btmleft">
                                            <a href="{{route('category.men')}}">
                                                <span class="img">
                                                    <img class="blur-up lazyload"
                                                        data-src="home/assets/images/collection-banner/collection-bn2-style2.jpg"
                                                        src="home/assets/images/collection-banner/collection-bn2-style2.jpg"
                                                        alt="" title=" " />
                                                </span>
                                                <span class="ttl"><span class="tt-small">男装</span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 img-banner-item last">
                                    <div class="imgBanner-grid-item">
                                        <div class="inner btmleft">
                                            <a href="#">
                                                <span class="img">
                                                    <img class="blur-up lazyload"
                                                        data-src="home/assets/images/collection-banner/collection-bn3-style2.jpg"
                                                        src="home/assets/images/collection-banner/collection-bn3-style2.jpg"
                                                        alt="" title=" " />
                                                </span>
                                                <span class="ttl"><span class="tt-small">新货上市</span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="imgBanner-grid-item">
                                        <div class="inner btmleft">
                                            <a href="#">
                                                <span class="img">
                                                    <img class="blur-up lazyload"
                                                        data-src="home/assets/images/collection-banner/collection-bn4-style2.jpg"
                                                        src="home/assets/images/collection-banner/collection-bn4-style2.jpg"
                                                        alt="" title=" " />
                                                </span>
                                                <span class="ttl"><span class="tt-small">热销</span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Image Banner-->

            <!--New Arrivals-->
            <div class="section product-slider tab-slider-product no-pb-section">
                <div class="section-header">
                    <h2>Editor's Pick</h2>
                    <p>Shop our Editor's Picks for outfit inspiration and must-have looks</p>
                </div>
                <div class="tabs-listing">
                    <ul class="tabs clearfix">
                        <li class="active" rel="tab1">女士</li>
                        <li rel="tab2">男士</li>
                        <li rel="tab3" class="tab_last">配饰</li>
                    </ul>
                    <div class="tab_container">
                        <h3 class="tab_drawer_heading d_active" rel="tab1">Women <i class="anm anm-angle-down-r"
                                aria-hidden="true"></i></h3>
                        <div id="tab1" class="tab_content grid-products">
                            <div class="productSlider">
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product9-2.jpg"
                                                src="home/assets/images/product-images/product9-2.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product9-1.jpg"
                                                src="home/assets/images/product-images/product9-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Martha Knit Top</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$399.01</span>
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
                                        <!--Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span>
                                            </li>
                                            <li class="swatch small rounded green"><span class="tooltip-label">Green</span>
                                            </li>
                                            <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span>
                                            </li>
                                            <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span>
                                            </li>
                                            <li class="swatch small rounded orange"><span
                                                    class="tooltip-label">Orange</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product2.jpg"
                                                src="home/assets/images/product-images/product2.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product2-1.jpg"
                                                src="home/assets/images/product-images/product2-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Countdown Timer-->
                                        <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                        <!--End Countdown Timer-->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Innerbloom Puffer Jacket</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.01</span>
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
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded black"><span class="tooltip-label">Black</span>
                                            </li>
                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span>
                                            </li>
                                            <li class="swatch small rounded purple"><span
                                                    class="tooltip-label">Purple</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product3.jpg"
                                                src="home/assets/images/product-images/product3.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product3-1.jpg"
                                                src="home/assets/images/product-images/product3-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                                        <!--Product label-->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Button Up Top Black</a>
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
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                            <li class="swatch small rounded orange"><span
                                                    class="tooltip-label">orange</span></li>
                                            <li class="swatch small rounded yellow"><span
                                                    class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product8-1.jpg"
                                                src="home/assets/images/product-images/product8-1.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product8.jpg"
                                                src="home/assets/images/product-images/product8.jpg" alt="" title="">
                                            <!-- End hover image -->
                                            <span class="sold-out"><span>Sold out</span></span>
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Sunset Sleep Scarf Top</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$99.01</span>
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
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded black"><span class="tooltip-label">black</span>
                                            </li>
                                            <li class="swatch small rounded navy"><span class="tooltip-label">navy</span>
                                            </li>
                                            <li class="swatch small rounded darkgreen"><span
                                                    class="tooltip-label">darkgreen</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product6.jpg"
                                                src="home/assets/images/product-images/product6.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product6-1.jpg"
                                                src="home/assets/images/product-images/product6-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Backpack With Contrast Bow</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$39.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded black"><span class="tooltip-label">black</span>
                                            </li>
                                            <li class="swatch small rounded maroon"><span
                                                    class="tooltip-label">maroon</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product4.jpg"
                                                src="home/assets/images/product-images/product4.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product4-1.jpg"
                                                src="home/assets/images/product-images/product4-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                        <!--Product label-->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Toledo Mules shoes</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$299.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded gray"><span class="tooltip-label">gray</span>
                                            </li>
                                            <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                            <li class="swatch small rounded orange"><span
                                                    class="tooltip-label">orange</span></li>
                                            <li class="swatch small rounded yellow"><span
                                                    class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                        <h3 class="tab_drawer_heading" rel="tab2">Men <i class="anm anm-angle-down-r"
                                aria-hidden="true"></i></h3>
                        <div id="tab2" class="grid-products tab_content">
                            <div class="productSlider">
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product10.jpg"
                                                src="home/assets/images/product-images/product10.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product10-1.jpg"
                                                src="home/assets/images/product-images/product10-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Casual Indigo Shirt</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$399.01</span>
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
                                        <!--Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span>
                                            </li>
                                            <li class="swatch small rounded green"><span class="tooltip-label">Green</span>
                                            </li>
                                            <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span>
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product13.jpg"
                                                src="home/assets/images/product-images/product13.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product13-1.jpg"
                                                src="home/assets/images/product-images/product13-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Men Grey Pants</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$90.00</span>
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
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded black"><span class="tooltip-label">Black</span>
                                            </li>
                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span>
                                            </li>
                                            <li class="swatch small rounded purple"><span
                                                    class="tooltip-label">Purple</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product19.jpg"
                                                src="home/assets/images/product-images/product19.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product19-1.jpg"
                                                src="home/assets/images/product-images/product19-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                                        <!--Product label-->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Button Up Top Black</a>
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
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                            <li class="swatch small rounded orange"><span
                                                    class="tooltip-label">orange</span></li>
                                            <li class="swatch small rounded yellow"><span
                                                    class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product12-1.jpg"
                                                src="home/assets/images/product-images/product12-1.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product12.jpg"
                                                src="home/assets/images/product-images/product12.jpg" alt="" title="">
                                            <!-- End hover image -->
                                            <span class="sold-out"><span>Sold out</span></span>
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Men Striped Ringer Tee</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$79.01</span>
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
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product20.jpg"
                                                src="home/assets/images/product-images/product20.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product20-1.jpg"
                                                src="home/assets/images/product-images/product20-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Lace Up Low Top Sneakers</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$59.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded black"><span class="tooltip-label">black</span>
                                            </li>
                                            <li class="swatch small rounded maroon"><span
                                                    class="tooltip-label">maroon</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product21.jpg"
                                                src="home/assets/images/product-images/product21.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product21-1.jpg"
                                                src="home/assets/images/product-images/product21-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                        <!--Product label-->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Top Slip On Velcro Sneakers</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded gray"><span class="tooltip-label">gray</span>
                                            </li>
                                            <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                            <li class="swatch small rounded orange"><span
                                                    class="tooltip-label">orange</span></li>
                                            <li class="swatch small rounded yellow"><span
                                                    class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                        <h3 class="tab_drawer_heading" rel="tab3">Accessories <i class="anm anm-angle-down-r"
                                aria-hidden="true"></i></h3>
                        <div id="tab3" class="grid-products tab_content">
                            <div class="productSlider">
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product22.jpg"
                                                src="home/assets/images/product-images/product22.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product22-1.jpg"
                                                src="home/assets/images/product-images/product22-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Trim Straw Floppy Hat</a>
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
                                        <!--Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span>
                                            </li>
                                            <li class="swatch small rounded green"><span class="tooltip-label">Green</span>
                                            </li>
                                            <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span>
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product23.jpg"
                                                src="home/assets/images/product-images/product23.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product23-1.jpg"
                                                src="home/assets/images/product-images/product23-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Design Cuff Bracelet</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$90.00</span>
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
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product20.jpg"
                                                src="home/assets/images/product-images/product20.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product20-1.jpg"
                                                src="home/assets/images/product-images/product20-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Lace Up Low Top Sneakers</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$59.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded black"><span class="tooltip-label">black</span>
                                            </li>
                                            <li class="swatch small rounded maroon"><span
                                                    class="tooltip-label">maroon</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('product.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload"
                                                data-src="home/assets/images/product-images/product21.jpg"
                                                src="home/assets/images/product-images/product21.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload"
                                                data-src="home/assets/images/product-images/product21-1.jpg"
                                                src="home/assets/images/product-images/product21-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product label-->
                                        <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                        <!--Product label-->
                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <form class="add" action="cart-variant1.html" method="post">
                                                        <button class="btn-icon btn btn-addto-cart" type="button"
                                                            tabindex="0">
                                                            <i class="icon anm anm-cart-l"></i>
                                                            <span class="tooltip-label">Add to Cart</span>
                                                        </button>
                                                    </form>
                                                    <!--end Cart Button-->
                                                </li>
                                                <li>
                                                    <!--Quick View Button-->
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                        data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-l"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                </li>
                                                <li>
                                                    <!--Wishlist Button-->
                                                    <div class="wishlist-btn">
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html">
                                                            <i class="icon anm anm-heart-l"></i>
                                                            <span class="tooltip-label">Add To Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!--End Wishlist Button-->
                                                </li>
                                                <li>
                                                    <!--Compare Button-->
                                                    <div class="compare-btn">
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html" title="Add to Compare">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('product.index')}}">Top Slip On Velcro Sneakers</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price">$199.01</span>
                                        </div>
                                        <!-- End product price -->
                                        <!--Product Review-->
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!--End Product Review-->
                                        <!-- Color Variant -->
                                        <ul class="swatches">
                                            <li class="swatch small rounded gray"><span class="tooltip-label">gray</span>
                                            </li>
                                            <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                            <li class="swatch small rounded orange"><span
                                                    class="tooltip-label">orange</span></li>
                                            <li class="swatch small rounded yellow"><span
                                                    class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End New Arrivals-->
        </div>

        <!--Parallax Banner-->
        <div class="section parallax-banner-style1">
            <div class="hero hero--exlarge hero__overlay bg-size">
                <img class="bg-img" src="home/assets/images/parallax-banner/parallax-banner1-demo2.jpg" alt="">
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text center text-small font-bold">
                            <span>HOT COLLECTION</span>
                            <h2 class="h2 mega-title">SUMMER IN THE CITY</h2>
                            <div class="rte-setting mega-subtitle">the brand continues to champion and further
                                strengthen its core belief of size inclusivity by launching its new collection
                                ‘Summer in the City’. The collection speaks of fresh summer hues, breezy silhouettes
                                and more, available across sizes, all ready to feed the Indian woman’s inner
                                urbanite.</div>
                            <a href="#" class="btn">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Banner-->

        <!--Featured Content-->
        <div class="section style1 featured-content no-pt-section">
            <div class="container">
                <div class="row display-table">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 display-table-cell">
                        <img src="home/assets/images/lookbook/featured-img1.jpg" alt="" title="" />
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 display-table-cell">
                        <div class="featured-text right">
                            <h2>Shop the Best Sellers</h2>
                            <p>Shop our best sellers from emerging and established brands all over the globe</p>
                            <a href="#" class="btn">Shop It Now</a>
                        </div>
                    </div>
                </div>
                <div class="row display-table featured-content-bg">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 display-table-cell">
                        <div class="featured-text left">
                            <h2>Day to Night</h2>
                            <p>Whether you're going to the bar from the office or out on the town, browse our Day to
                                Night looks to take you through to the evening, hassle-free</p>
                            <a href="#" class="btn">View Collection</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 display-table-cell">
                        <img src="home/assets/images/lookbook/featured-img2.jpg" alt="" title="" />
                    </div>
                </div>
            </div>
        </div>
        <!--End Featured Content-->

        <!--Brand Logo Slider-->
        <div class="section logo-section no-pt-section">
            <div class="container">
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
        <!--Newsletter Section-->
        <div class="section newsletter-section">
            <div class="section-header">
                <h2>Newsletter Subscribe</h2>
                <p>Sign up to stay in the loop. Receive updates, access to exclusive deals, and more.</p>
            </div>
            <div class="display-table">
                <div class="display-table-cell newsletter-form">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" class="input-group__field newsletter-input" name="EMAIL" value=""
                                placeholder="Email address" required>
                            <span class="input-group__btn">
                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span
                                        class="newsletter__submit-text--large">Subscribe</span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Newsletter Section-->
    </div>
@stop
