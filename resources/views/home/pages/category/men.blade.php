@extends('home.layouts.app')
@section('title', '首页')
@section('content')

<div id="page-content">
    <!--Body Container-->
    <!--Breadcrumbs-->
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="breadcrumbs"><a href="{{route('home')}}" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>男装</span></div>
        </div>
    </div>
    <!--End Breadcrumbs-->
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title"><h2>Categories</h2></div>
                        <div class="widget-content" style="">
                            <ul class="sidebar_categories">
                                <li class="level1 sub-level"><a href="#;" class="site-nav">Clothing</a>
                                    <ul class="sublinks" style="display: none;">
                                        <li class="level2"><a href="#;" class="site-nav">Men</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Women</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Child</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">View All Clothing</a></li>
                                    </ul>
                                </li>
                                <li class="level1 sub-level"><a href="#;" class="site-nav">Jewellery</a>
                                    <ul class="sublinks">
                                        <li class="level2"><a href="#;" class="site-nav">Ring</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Neckalses</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Eaarings</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">View All Jewellery</a></li>
                                    </ul>
                                </li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Shoes</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Accessories</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Collections</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Sale</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Page</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="#" method="post" class="price-filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 46.8085%;"></span>
                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 46.8085%;"></div></div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn">X</span><span class="tooltip-label">X</span></li>
                                <li><span class="swacth-btn">XL</span><span class="tooltip-label">XL</span></li>
                                <li><span class="swacth-btn">XLL</span><span class="tooltip-label">XLL</span></li>
                                <li><span class="swacth-btn">M</span><span class="tooltip-label">M</span></li>
                                <li><span class="swacth-btn">L</span><span class="tooltip-label">L</span></li>
                                <li><span class="swacth-btn">S</span><span class="tooltip-label">S</span></li>
                                <li><span class="swacth-btn">XXL</span><span class="tooltip-label">XLL</span></li>
                                <li><span class="swacth-btn">XS</span><span class="tooltip-label">XS</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="filter-color swacth-list clearfix">
                            <ul>
                                <li><span class="swacth-btn black"></span><span class="tooltip-label">Black</span></li>
                                <li><span class="swacth-btn white"></span><span class="tooltip-label">White</span></li>
                                <li><span class="swacth-btn red"></span><span class="tooltip-label">Red</span></li>
                                <li><span class="swacth-btn blue"></span><span class="tooltip-label">Blue</span></li>
                                <li><span class="swacth-btn pink"></span><span class="tooltip-label">Pink</span></li>
                                <li><span class="swacth-btn gray"></span><span class="tooltip-label">Gray</span></li>
                                <li><span class="swacth-btn green"></span><span class="tooltip-label">Green</span></li>
                                <li><span class="swacth-btn orange"></span><span class="tooltip-label">Orange</span></li>
                                <li><span class="swacth-btn yellow"></span><span class="tooltip-label">Yellow</span></li>
                                <li><span class="swacth-btn blueviolet"></span><span class="tooltip-label">Blue Violet</span></li>
                                <li><span class="swacth-btn brown"></span><span class="tooltip-label">Brown</span></li>
                                <li><span class="swacth-btn darkGoldenRod"></span><span class="tooltip-label">Dark Golden Red</span></li>
                                <li><span class="swacth-btn darkGreen"></span><span class="tooltip-label">Dark Green</span></li>
                                <li><span class="swacth-btn darkRed"></span><span class="tooltip-label">Dark Red</span></li>
                                <li><span class="swacth-btn khaki"></span><span class="tooltip-label">Khaki</span></li>
                                <li><span class="swacth-btn blue-red"></span><span class="tooltip-label">Blue/Red</span></li>
                                <li><span class="swacth-btn black-grey"></span><span class="tooltip-label">Black/Grey</span></li>
                                <li><span class="swacth-btn pink-black"></span><span class="tooltip-label">pink-Black</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget brand-filter">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <ul>
                            <li>
                              <input type="checkbox" value="allen-vela" id="check1">
                              <label for="check1"><span><span></span></span>Allen Vela</label>
                            </li>
                            <li>
                              <input type="checkbox" value="oxymat" id="check3">
                              <label for="check3"><span><span></span></span>Oxymat</label>
                            </li>
                            <li>
                              <input type="checkbox" value="vanelas" id="check4">
                              <label for="check4"><span><span></span></span>Vanelas</label>
                            </li>
                            <li>
                              <input type="checkbox" value="pagini" id="check5">
                              <label for="check5"><span><span></span></span>Pagini</label>
                            </li>
                            <li>
                              <input type="checkbox" value="monark" id="check6">
                              <label for="check6"><span><span></span></span>Monark</label>
                            </li>
                        </ul>
                    </div>
                    <!--End Brand-->
                    <!--Popular Products-->
                    <div class="sidebar_widget sidePro">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="sideProSlider grid-products">
                                <div class="item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('products.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product1.jpg" src="home/assets/images/product-images/product1.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product1-1.jpg" src="home/assets/images/product-images/product1-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style1">
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
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="{{route('products.index')}}">Martha Knit Top</a>
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
                                            <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                            <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                            <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                            <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                            <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                                <div class="item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product2.jpg" src="home/assets/images/product-images/product2.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product2-1.jpg" src="home/assets/images/product-images/product2-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Innerbloom Puffer Jacket</a>
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
                                        <li class="swatch small rounded black"><span class="tooltip-label">Black</span></li>
                                        <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                        <li class="swatch small rounded purple"><span class="tooltip-label">Purple</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                                <div class="item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{route('products.index')}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product3.jpg" src="home/assets/images/product-images/product3.jpg" alt="" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product3-1.jpg" src="home/assets/images/product-images/product3-1.jpg" alt="" title="">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--Product Button-->
                                        <div class="button-set style1">
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
                                            <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                            <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                                        </ul>
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End Popular Products-->
                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <a href="#"><img src="home/assets/images/collection-side-banner.png" alt=""></a>
                    </div>
                    <!--Banner-->
                    <!--Information-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>GLOBAL TEXT BLOCK</h2></div>
                        <div class="widget-content"><p>Use this text to share information about your brand with your customers.</p><p>Describe a product, share announcements, or welcome customers to your store.</p></div>
                    </div>
                    <!--end Information-->
                    <!--Product Tags-->
                    <div class="sidebar_widget">
                      <div class="widget-title">
                        <h2>Product Tags</h2>
                      </div>
                      <div class="widget-content">
                        <ul class="product-tags">
                          <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                          <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                          <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                          <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                          <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                          <li><a href="#" title="Show products matching tag Black">Black</a></li>
                          <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                          <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                          <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                          <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                          <li><a href="#" title="Show products matching tag Green">Green</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Hot">Hot</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag L">L</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag lareida">lareida</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag M">M</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Monark">Monark</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Navy">Navy</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag new">new</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Orange">Orange</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag oxford">oxford</a></li>
                          <li style="display: none;"><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                        </ul>
                        <span class="btn btn--small btnview">View all</span> </div>
                    </div>
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                <div class="category-text-banner">
                    <div class="page-title text-left block-ttl">
                        <h1>Shop Heading With Banners</h1>
                        <p>Add the finishing touch to your outfit with our range of accessories</p>
                    </div>
                </div>

                <!--Toolbar-->
                <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                    <i class="anm anm-th" aria-hidden="true"></i>
                                </a>
                                <a href="shop-list-view.html" title="List View" class="change-view">
                                    <i class="anm anm-th-list" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                <span class="filters-toolbar__product-count">Showing: 15 Results</span>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 text-right">
                                <div class="filters-toolbar__item">
                                    <label for="SortBy" class="hidden">Sort</label>
                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                        <option value="title-ascending" selected="selected">Sort</option>
                                        <option>Best Selling</option>
                                        <option>Alphabetically, A-Z</option>
                                        <option>Alphabetically, Z-A</option>
                                        <option>Price, low to high</option>
                                        <option>Price, high to low</option>
                                        <option>Date, new to old</option>
                                        <option>Date, old to new</option>
                                    </select>
                                    <input class="collection-header__default-sort" type="hidden" value="manual">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Toolbar-->
                <!--Product Grid-->
                <div class="product-load-more">
                    <div class="grid-products grid--view-items">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product7.jpg" src="home/assets/images/product-images/product7.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product7-1.jpg" src="home/assets/images/product-images/product7-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                    <div class="brands">
                                        <p><span class="label">SKU:</span> URBW06W-IN</p>
                                        <p><span class="label">Brand:</span> Avone</p>
                                    </div>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product17.jpg" src="home/assets/images/product-images/product17.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product17-1.jpg" src="home/assets/images/product-images/product17-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">High Neck Ribbed Knit</a>
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
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> STU</p>
                                    <p><span class="label">Brand:</span> Belle</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product11.jpg" src="home/assets/images/product-images/product11.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product11-1.jpg" src="home/assets/images/product-images/product11-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                        <span class="price">$59.01</span>
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
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> GTUI</p>
                                    <p><span class="label">Brand:</span> SKF</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product1.jpg" src="home/assets/images/product-images/product1.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product1-1.jpg" src="home/assets/images/product-images/product1-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Martha Knit Top</a>
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
                                        <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                        <li class="swatch small rounded green"><span class="tooltip-label">Green</span></li>
                                        <li class="swatch small rounded gray"><span class="tooltip-label">Gray</span></li>
                                        <li class="swatch small rounded aqua"><span class="tooltip-label">Aqua</span></li>
                                        <li class="swatch small rounded orange"><span class="tooltip-label">Orange</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Product001</p>
                                    <p><span class="label">Brand:</span> DLF</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product2.jpg" src="home/assets/images/product-images/product2.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product2-1.jpg" src="home/assets/images/product-images/product2-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Countdown Timer-->
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    <!--End Countdown Timer-->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Innerbloom Puffer Jacket</a>
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
                                        <li class="swatch small rounded black"><span class="tooltip-label">Black</span></li>
                                        <li class="swatch small rounded navy"><span class="tooltip-label">Navy</span></li>
                                        <li class="swatch small rounded purple"><span class="tooltip-label">Purple</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Product02</p>
                                    <p><span class="label">Brand:</span> UTI</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product3.jpg" src="home/assets/images/product-images/product3.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product3-1.jpg" src="home/assets/images/product-images/product3-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product label-->
                                    <div class="product-labels"><span class="lbl pr-label1">New</span></div>
                                    <!--Product label-->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                        <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                        <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Pro02</p>
                                    <p><span class="label">Brand:</span> Oxgygen</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product8-1.jpg" src="home/assets/images/product-images/product8-1.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product8.jpg" src="home/assets/images/product-images/product8.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Sunset Sleep Scarf Top</a>
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
                                        <li class="swatch small rounded black"><span class="tooltip-label">black</span></li>
                                        <li class="swatch small rounded navy"><span class="tooltip-label">navy</span></li>
                                        <li class="swatch small rounded darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Pro099</p>
                                    <p><span class="label">Brand:</span> Krl</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product6.jpg" src="home/assets/images/product-images/product6.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product6-1.jpg" src="home/assets/images/product-images/product6-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                        <li class="swatch small rounded black"><span class="tooltip-label">black</span></li>
                                        <li class="swatch small rounded maroon"><span class="tooltip-label">maroon</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Pro100</p>
                                    <p><span class="label">Brand:</span> YTU</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product4.jpg" src="home/assets/images/product-images/product4.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product4-1.jpg" src="home/assets/images/product-images/product4-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product label-->
                                    <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                    <!--Product label-->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Toledo Mules shoes</a>
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
                                        <li class="swatch small rounded gray"><span class="tooltip-label">gray</span></li>
                                        <li class="swatch small rounded red"><span class="tooltip-label">red</span></li>
                                        <li class="swatch small rounded orange"><span class="tooltip-label">orange</span></li>
                                        <li class="swatch small rounded yellow"><span class="tooltip-label">yellow</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Pro111</p>
                                    <p><span class="label">Brand:</span> JKL</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product14.jpg" src="home/assets/images/product-images/product14.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product14-1.jpg" src="home/assets/images/product-images/product14-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                        <span class="price">$139.01</span>
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
                                        <li class="swatch small rounded black"><span class="tooltip-label">black</span></li>
                                        <li class="swatch small rounded maroon"><span class="tooltip-label">maroon</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <div class="brands">
                                    <p><span class="label">SKU:</span> Pro89</p>
                                    <p><span class="label">Brand:</span> RTL</p>
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product10-1.jpg" src="home/assets/images/product-images/product10-1.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product10.jpg" src="home/assets/images/product-images/product10.jpg" alt="" title="">
                                        <!-- End hover image -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">High Waist Jeans</a>
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
                                   <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch small rounded black"><span class="tooltip-label">black</span></li>
                                        <li class="swatch small rounded navy"><span class="tooltip-label">navy</span></li>
                                        <li class="swatch small rounded darkgreen"><span class="tooltip-label">darkgreen</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product5.jpg" src="home/assets/images/product-images/product5.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product5-1.jpg" src="home/assets/images/product-images/product5-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product label-->
                                    <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                    <!--Product label-->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">Women Shandals</a>
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
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!--End Product Review-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{route('products.index')}}" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product15.jpg" src="home/assets/images/product-images/product15.jpg" alt="" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product15-1.jpg" src="home/assets/images/product-images/product15-1.jpg" alt="" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
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
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="{{route('products.index')}}">High Neck Ribbed Knit</a>
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
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                    <!--End Product Grid-->
                    <!--Load More Button-->
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">
                            <a href="#" class="btn loadMore">Load More</a>
                        </div>
                    </div>

                    <!--End Load More Button-->
                </div>
            </div>
            <!--End Main Content-->
        </div>

    </div><!--End Body Container-->

</div>
@stop
