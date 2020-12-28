@extends('home.layouts.app')
@section('title', '首页')
@section('content')

    <div id="page-content">
        <!--Body Container-->
        <!--Breadcrumbs-->
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a> <span aria-hidden="true">|</span> <span>Product Layout2</span></div>
            </div>
        </div>
        <!--End Breadcrumbs-->
        <div class="container">
            <div class="product-detail-container product-single-style1">
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img product-horizontal-style">
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img id="zoompro" class="zoompro prlightbox" src="home/assets/images/product-images/product2.jpg" data-zoom-image="home/assets/images/product-images/product2.jpg" alt="" />
                                    </div>
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <div class="product-buttons">
                                        <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="mfpbox mfp-with-anim btn popup-video" title="View Video">
                                            <i class="icon anm anm-video2" aria-hidden="true"></i>
                                            <span class="tooltip-label">Watch Video</span>
                                        </a>
                                        <a href="#" class="btn prlightbox" title="Zoom">
                                            <i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i>
                                            <span class="tooltip-label">Zoom Image</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-thumb product-horizontal-thumb">
                                    <div id="gallery" class="product-thumb-style1">
                                        <a data-image="home/assets/images/product-images/product2.jpg" data-zoom-image="home/assets/images/product-images/product2.jpg" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2.jpg" src="home/assets/images/product-images/product2.jpg" alt="" />
                                        </a>
                                        <a data-image="home/assets/images/product-images/product2-1.jpg" data-zoom-image="home/assets/images/product-images/product2-1.jpg" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2-1.jpg" src="home/assets/images/product-images/product2-1.jpg" alt="" />
                                        </a>
                                        <a data-image="home/assets/images/product-images/product2-2.jpg" data-zoom-image="home/assets/images/product-images/product2-2.jpg" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2-2.jpg" src="home/assets/images/product-images/product2-2.jpg" alt="" />
                                        </a>
                                        <a data-image="home/assets/images/product-images/product2-3.jpg" data-zoom-image="home/assets/images/product-images/product2-3.jpg" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2-3.jpg" src="home/assets/images/product-images/product2-3.jpg" alt="" />
                                        </a>
                                        <a data-image="home/assets/images/product-images/product2-4.jpg" data-zoom-image="home/assets/images/product-images/product2-4.jpg" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2-4.jpg" src="home/assets/images/product-images/product2-4.jpg" alt="" />
                                        </a>
                                        <a data-image="home/assets/images/product-images/product2-5.jpg" data-zoom-image="home/assets/images/product-images/product2-5.jpg" class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2-5.jpg" src="home/assets/images/product-images/product2-5.jpg" alt="" />
                                        </a>
                                        <a data-image="home/assets/images/product-images/product2-6.jpg" data-zoom-image="home/assets/images/product-images/product2-6.jpg" class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" data-src="home/assets/images/product-images/product2-6.jpg" src="home/assets/images/product-images/product2-6.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="lightboximages">
                                    <a href="home/assets/images/product-images/product2.jpg" data-size="1000x1280"></a>
                                    <a href="home/assets/images/product-images/product2-1.jpg" data-size="1000x1280"></a>
                                    <a href="home/assets/images/product-images/product2-2.jpg" data-size="1000x1280"></a>
                                    <a href="home/assets/images/product-images/product2-3.jpg" data-size="1000x1280"></a>
                                    <a href="home/assets/images/product-images/product2-4.jpg" data-size="1000x1280"></a>
                                    <a href="home/assets/images/product-images/product2-5.jpg" data-size="1000x1280"></a>
                                    <a href="home/assets/images/product-images/product2-6.jpg" data-size="1000x1280"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">Product Layout Style2</h1>
                                <div class="prInfoRow">
                                    <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                    </span>
                                    <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                        <span>You Save</span>
                                        <span class="product-single__save-amount"><span class="money">$100.00</span></span>
                                        <span class="off">(<span>16</span>%)</span>
                                    </span>
                                </p>
                            </div>
                            <div class="product-single__description rte">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <form method="post" action="" class="product-form product-form-product-template hidedropdown">
                                <div class="swatch clearfix swatch-0 option1">
                                    <div class="product-form__item">
                                        <label class="label">Color:<span class="required">*</span> <span class="slVariant">Red</span></label>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-black" type="radio" name="option-0" value="Black">
                                            <label class="swatchLbl small black" for="swatch-black" title="Black"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-blue" type="radio" name="option-0" value="blue">
                                            <label class="swatchLbl small blue" for="swatch-blue" title="Blue"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-red" type="radio" name="option-0" value="Blue">
                                            <label class="swatchLbl small red" for="swatch-red" title="Red"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-pink" type="radio" name="option-0" value="Pink">
                                            <label class="swatchLbl color small pink" for="swatch-pink" title="Pink"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-orange" type="radio" name="option-0" value="Orange">
                                            <label class="swatchLbl color small orange" for="swatch-orange" title="Orange"></label>
                                        </div>
                                        <div class="swatch-element color">
                                            <input class="swatchInput" id="swatch-yellow" type="radio" name="option-0" value="Yellow">
                                            <label class="swatchLbl color small yellow" for="swatch-yellow" title="Yellow"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                        <label class="label">Size:<span class="required">*</span> <span class="slVariant">XS</span> <a href="#sizechart" class="sizelink btn-link"><i class="anm anm-ruler"></i> Size Guide</a></label>
                                        <div data-value="XS" class="swatch-element xs available">
                                            <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                            <label class="swatchLbl medium" for="swatch-1-xs" title="XS">XS</label>
                                        </div>
                                        <div data-value="S" class="swatch-element s available">
                                            <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                            <label class="swatchLbl medium" for="swatch-1-s" title="S">S</label>
                                        </div>
                                        <div data-value="M" class="swatch-element m available">
                                            <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                            <label class="swatchLbl medium" for="swatch-1-m" title="M">M</label>
                                        </div>
                                        <div data-value="L" class="swatch-element l available">
                                            <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                            <label class="swatchLbl medium" for="swatch-1-l" title="L">L</label>
                                        </div>
                                        <div data-value="XL" class="swatch-element xl available">
                                            <input class="swatchInput" id="swatch-1-xl" type="radio" name="option-1" value="XL">
                                            <label class="swatchLbl medium" for="swatch-1-xl" title="XL">XL</label>
                                        </div>
                                    </div>
                                </div>
                                <p class="infolinks">
                                    <a class="wishlist add-to-wishlist" href="my-wishlist.html" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                    <a class="wishlist add-to-wishlist" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-sync-ar" aria-hidden="true"></i> <span>Add to Compare</span></a>
                                    <a href="#ShippingInfo" class="mfp btn shippingInfo"><i class="anm anm-paper-l-plane"></i> Delivery &amp; Returns</a>
                                    <a href="#productInquiry" class="emaillink btn"> <i class="anm anm-envelope-l"></i> Enquiry</a>
                                </p>
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-form__item--submit">
                                        <button type="button" name="add" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                    <div class="agree-check">
                                        <input type="checkbox" name="tearm" id="prTearm" class="checkbox" value="tearm" required>
                                        <label for="prTearm"><span class="checkbox"></span> I agree with the terms and conditions</label>
                                    </div>
                                    <div class="buy-it-btn">
                                        <button type="button" class="btn" disabled="disabled">Buy it now</button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                            <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> Getting Closer! Only <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> Away From <b>FREE SHIPPING!</b></p>
                            <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> Estimated Delivery Between <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                            <div class="userViewMsg" data-user="20" data-time="11000">
                                <i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> People are Looking for this Product
                            </div>
                            <div class="trustseal-img"><img src="home/assets/images/checkout-cards.png" alt=""></div>
                            <div class="social-sharing">
                                <span class="label">Share:</span>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                    <i class="anm anm-facebook-f" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                </a>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                </a>
                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                </a>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                </a>
                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                </a>
                            </div>
                            <div class="type-product">
                                <span>Type:</span> <a href="#">Dress</a>
                            </div>
                            <div class="category-products-list">
                                <span>Category:</span> <a href="#">All Products</a>, <a href="#">All Products</a>, <a href="#">Hot Collection</a>, <a href="#">New Arrivals</a>, <a href="#">Women</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Product Tabs-->
            <div class="tabs-listing tab-accordian-style">
                <div class="tab-container">
                    <h3 class="acor-ttl active" rel="tab1">Product Details</h3>
                    <div id="tab1" class="tab-content">
                        <div class="product-description rte">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-8 col-lg-8 mb-4">
                                    <h3>Specification</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <ul>
                                        <li>High-neck style</li>
                                        <li>Drop shoulders</li>
                                        <li>Flared cuffs</li>
                                        <li>Asymmetrical hem</li>
                                    </ul>
                                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                    <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                    <h3>Lorem Ipsum is not simply random text.</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    <p>Change colors, fonts, banners, megamenus and more. Preview changes are live before saving them.</p>
                                    <h3>1914 translation by H. Rackham</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                    <img data-src="home/assets/images/detail-img.jpg" src="home/assets/images/detail-img.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
                    <div id="tab2" class="tab-content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                                <div class="spr-form clearfix">
                                    <form method="post" action="#" id="new-review-form" class="new-review-form">
                                        <h3 class="spr-form-title">Write Your Own Review</h3>
                                        <fieldset class="spr-form-contact">
                                            <div class="spr-form-review-rating">
                                                <label class="spr-form-label">How do you rate this product?<span class="required">*</span></label>
                                                <div class="spr-form-input spr-starrating">
                                                    <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="spr-form-contact-name">
                                                <label class="spr-form-label" for="name">What's your nickname?<span class="required">*</span></label>
                                                <input class="spr-form-input spr-form-input-text" type="text" name="name" value="">
                                            </div>
                                            <div class="spr-form-contact-email">
                                                <label class="spr-form-label" for="email">Email Address<span class="required">*</span></label>
                                                <input class="spr-form-input spr-form-input-email " id="email" type="email" name="email" value="">
                                            </div>
                                        </fieldset>
                                        <fieldset class="spr-form-review">
                                            <div class="spr-form-review-title">
                                                <label class="spr-form-label" for="review">Review Title</label>
                                                <input class="spr-form-input spr-form-input-text " id="review" type="text" name="review" value="">
                                            </div>

                                            <div class="spr-form-review-body">
                                                <label class="spr-form-label" for="message">Body of Review <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span></label>
                                                <div class="spr-form-input">
                                                    <textarea class="spr-form-input spr-form-input-textarea " id="message" name="message" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="spr-form-actions">
                                            <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="spr-reviews">
                                    <h3 class="spr-form-title">Customer Reviews</h3>
                                    <div class="review-inner">
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></span></span>
                                                <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                            </div>
                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="spr-review">
                                            <div class="spr-review-header">
                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="acor-ttl" rel="tab3">Size Chart</h3>
                    <div id="tab3" class="tab-content">
                        <h3>Women's Body Sizing Chart</h3>
                        <table>
                            <tbody>
                            <tr>
                                <th>Size</th>
                                <th>XS</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td>31" - 33"</td>
                                <td>33" - 35"</td>
                                <td>35" - 37"</td>
                                <td>37" - 39"</td>
                                <td>39" - 42"</td>
                            </tr>
                            <tr>
                                <td>Waist</td>
                                <td>24" - 26"</td>
                                <td>26" - 28"</td>
                                <td>28" - 30"</td>
                                <td>30" - 32"</td>
                                <td>32" - 35"</td>
                            </tr>
                            <tr>
                                <td>Hip</td>
                                <td>34" - 36"</td>
                                <td>36" - 38"</td>
                                <td>38" - 40"</td>
                                <td>40" - 42"</td>
                                <td>42" - 44"</td>
                            </tr>
                            <tr>
                                <td>Regular inseam</td>
                                <td>30"</td>
                                <td>30½"</td>
                                <td>31"</td>
                                <td>31½"</td>
                                <td>32"</td>
                            </tr>
                            <tr>
                                <td>Long (Tall) Inseam</td>
                                <td>31½"</td>
                                <td>32"</td>
                                <td>32½"</td>
                                <td>33"</td>
                                <td>33½"</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="acor-ttl" rel="tab4">Shipping &amp; Returns</h3>
                    <div id="tab4" class="tab-content">
                        <h4>Returns Policy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                        <h4>Shipping</h4>
                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                    </div>
                    <div id="tab5" class="tab-content">
                        <p>You can set different tabs for each products.</p>
                    </div>
                </div>
            </div>
            <!--End Product Tabs-->

            <!--Related Product Slider-->
            <div class="related-product grid-products">
                <div class="section-header">
                    <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                    <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                </div>
                <div class="productPageSlider">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product-detail1-10.jpg" src="home/assets/images/product-images/product-detail1-10.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product-detail1-9.jpg" src="home/assets/images/product-images/product-detail1-9.jpg" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl pr-label1">new</span></div>
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
                                <a href="product-layout1.html">Edna Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$399.01</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product-detail1.jpg" src="home/assets/images/product-images/product-detail1.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product-detail1-2.jpg" src="home/assets/images/product-images/product-detail1-2.jpg" alt="image" title="product">
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
                                <a href="product-layout1.html">Elastic Waist Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product16.jpg" src="home/assets/images/product-images/product16.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product16-1.jpg" src="home/assets/images/product-images/product16-1.jpg" alt="image">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
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
                                <a href="#">3/4 Sleeve Kimono Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product13.jpg" src="home/assets/images/product-images/product13.jpg" alt="image"/>
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product13-1.jpg" src="home/assets/images/product-images/product13-1.jpg" />
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
                                <a href="product-layout1.html">Cape Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">$900.00</span>
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product18.jpg" src="home/assets/images/product-images/product18.jpg" alt="image"/>
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product18-1.jpg" src="home/assets/images/product-images/product18-1.jpg" alt="image" />
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
                                <a href="product-layout1.html">Paper Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product9.jpg" src="home/assets/images/product-images/product9.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product9-1.jpg" src="home/assets/images/product-images/product9-1.jpg" alt="image">
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
                                <a href="product-layout1.html">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product10.jpg" src="home/assets/images/product-images/product10.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product10-1.jpg" src="home/assets/images/product-images/product10-1.jpg" alt="image">
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
                                <a href="product-layout1.html">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            </div>
            <!--End Related Product Slider-->

            <!--Recently Product Slider-->
            <div class="related-product grid-products">
                <div class="section-header">
                    <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                    <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                </div>
                <div class="productPageSlider">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product6.jpg" src="home/assets/images/product-images/product6.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product6-1.jpg" src="home/assets/images/product-images/product6-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Backpack With Contrast Bow</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$399.01</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product17.jpg" src="home/assets/images/product-images/product17.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product17-1.jpg" src="home/assets/images/product-images/product17-1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Button Up Top Black</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product12.jpg" src="home/assets/images/product-images/product12.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product12-1.jpg" src="home/assets/images/product-images/product12-1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">Martha Knit Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product8.jpg" src="home/assets/images/product-images/product8.jpg" alt="image"/>
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product8-1.jpg" src="home/assets/images/product-images/product8-1.jpg" alt="image" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Toledo Mules shoes</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">$900.00</span>
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product2.jpg" src="home/assets/images/product-images/product2.jpg" alt="image"/>
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product2-1.jpg" src="home/assets/images/product-images/product2-1.jpg" alt="image" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product7.jpg" src="home/assets/images/product-images/product7.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product7-1.jpg" src="home/assets/images/product-images/product7-1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="home/assets/images/product-images/product5.jpg" src="home/assets/images/product-images/product5.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="home/assets/images/product-images/product5-1.jpg" src="home/assets/images/product-images/product5-1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Toledo Mules shoes</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            </div>
            <!--End Recently Product Slider-->

        </div><!--End Body Container-->

        <!--Product Navigation-->
        <a href="#" class="product-nav prev-pro" title="Previous Product">
            <span class="details">Sunset Sleep Scarf Top<br>
                <span class="price">$49</span>
            </span>
            <span class="img"><img src="home/assets/images/product-images/product5.jpg" alt="" /></span>
        </a>
        <a href="#" class="product-nav next-pro" title="Next Product">
            <span class="img"><img src="home/assets/images/product-images/product9.jpg" alt=""></span>
            <span class="details">Toledo Mules shoes<br>
                <span class="price">$588</span>
            </span>
        </a>
        <!--End Product Navigation-->
    </div><!--End Page Wrapper-->

    <!--Size Chart-->
 <div id="sizechart" class="mfpbox mfp-with-anim mfp-hide">
    <h4>Women's Size Guide</h4>
    <p align="center">This is a standardised guide to give you an idea of what size you will need, however some brands may vary from these conversions.</p>
    <p><strong>Ready to Wear Clothing</strong></p>
    <table cellspacing="1">
    <tbody>
    <tr>
    <th>Size</th>
    <th>XXS - XS</th>
    <th>XS - S</th>
    <th>S - M</th>
    <th>M - L</th>
    <th>L - XL</th>
    <th>XL - XXL</th>
    </tr>
    <tr>
    <td>UK</td>
    <td>6</td>
    <td>8</td>
    <td>10</td>
    <td>12</td>
    <td>14</td>
    <td>16</td>
    </tr>
    <tr>
    <td>US</td>
    <td>2</td>
    <td>4</td>
    <td>6</td>
    <td>8</td>
    <td>10</td>
    <td>12</td>
    </tr>
    <tr>
    <td>Italy (IT)</td>
    <td>38</td>
    <td>40</td>
    <td>42</td>
    <td>44</td>
    <td>46</td>
    <td>48</td>
    </tr>
    <tr>
    <td>France (FR/EU)</td>
    <td>34</td>
    <td>36</td>
    <td>38</td>
    <td>40</td>
    <td>42</td>
    <td>44</td>
    </tr>
    <tr>
    <td>Denmark</td>
    <td>32</td>
    <td>34</td>
    <td>36</td>
    <td>38</td>
    <td>40</td>
    <td>42</td>
    </tr>
    <tr>
    <td>Russia</td>
    <td>40</td>
    <td>42</td>
    <td>44</td>
    <td>46</td>
    <td>48</td>
    <td>50</td>
    </tr>
    <tr>
    <td>Germany</td>
    <td>32</td>
    <td>34</td>
    <td>36</td>
    <td>38</td>
    <td>40</td>
    <td>42</td>
    </tr>
    <tr>
    <td>Japan</td>
    <td>5</td>
    <td>7</td>
    <td>9</td>
    <td>11</td>
    <td>13</td>
    <td>15</td>
    </tr>
    <tr>
    <td>Australia</td>
    <td>6</td>
    <td>8</td>
    <td>10</td>
    <td>12</td>
    <td>14</td>
    <td>16</td>
    </tr>
    <tr>
    <td>Korea</td>
    <td>33</td>
    <td>44</td>
    <td>55</td>
    <td>66</td>
    <td>77</td>
    <td>88</td>
    </tr>
    <tr>
    <td>China</td>
    <td>160/84</td>
    <td>165/86</td>
    <td>170/88</td>
    <td>175/90</td>
    <td>180/92</td>
    <td>185/94</td>
    </tr>
    <tr>
    <td><strong>Jeans</strong></td>
    <td>24-25</td>
    <td>26-27</td>
    <td>27-28</td>
    <td>29-30</td>
    <td>31-32</td>
    <td>32-33</td>
    </tr>
    </tbody>
    </table>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>

@stop
