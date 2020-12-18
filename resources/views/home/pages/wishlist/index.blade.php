@extends('home.layouts.app')
@section('title', '首页')
@section('content')

<div id="page-content">        
    <!--Body Container-->
    <!--Breadcrumbs-->
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="breadcrumbs"><a href="{{route('home')}}" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>My Wishlit</span></div>
        </div>
    </div>
    <!--End Breadcrumbs-->
    <!--Page Title with Image-->
    <div class="page-title"><h1>My Wishlit</h1></div>
    <!--End Page Title with Image-->
    <div class="container">
        <div class="row">
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <form action="#">
                    <div class="wishlist-table table-content table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-name text-center alt-font">Remove</th>
                                    <th class="product-price text-center alt-font">Images</th>
                                    <th class="product-name alt-font">Product</th>
                                    <th class="product-price text-center alt-font">Unit Price</th>
                                    <th class="stock-status text-center alt-font">Stock Status</th>
                                    <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                    <td class="product-thumbnail text-center">
                                        <a href="#"><img src="home/assets/images/product-images/product8.jpg" alt="" title=""></a>
                                    </td>
                                    <td class="product-name"><h4 class="no-margin"><a href="#">Minerva Dress black</a></h4></td>
                                    <td class="product-price text-center"><span class="amount">$165.00</span></td>
                                    <td class="stock text-center">
                                        <span class="in-stock">in stock</span>
                                    </td>
                                    <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                    <td class="product-thumbnail text-center">
                                        <a href="#"><img src="home/assets/images/product-images/product4.jpg" alt="" title=""></a>
                                    </td>
                                    <td class="product-name"><h4 class="no-margin"><a href="#">Sueded Cotton Pant in Khaki</a></h4></td>
                                    <td class="product-price text-center"><span class="amount">$150.00</span></td>
                                    <td class="stock text-center">
                                        <span class="out-stock">Out Of stock</span>
                                    </td>
                                    <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                    <td class="product-thumbnail text-center">
                                        <a href="#"><img src="home/assets/images/product-images/product10-1.jpg" alt="" title=""></a>
                                    </td>
                                    <td class="product-name"><h4 class="no-margin"><a href="#">Woven Solid Midi Shirt Dress</a></h4></td>
                                    <td class="product-price text-center"><span class="amount">$150.00</span></td>
                                    <td class="stock text-center">
                                        <span class="in-stock">in stock</span>
                                    </td>
                                    <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                </tr>
                                <tr>
                                    <td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                    <td class="product-thumbnail text-center">
                                        <a href="#"><img src="home/assets/images/product-images/product12-1.jpg" alt="" title=""></a>
                                    </td>
                                    <td class="product-name"><h4 class="no-margin"><a href="#">Woven Solid Midi Shirt Dress</a></h4></td>
                                    <td class="product-price text-center"><span class="amount">$99.00</span></td>
                                    <td class="stock text-center">
                                        <span class="in-stock">in stock</span>
                                    </td>
                                    <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>                   
               </div>
            <!--End Main Content-->
        </div>
    
    </div><!--End Body Container-->
    
</div>

@stop
