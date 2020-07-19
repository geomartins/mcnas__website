@extends("layouts.frontend")


@section("title")

{{ config("app.name") }} | Home

@endsection



@section("main_content")

  <!--only-title-section-->
  <section class="ttm-row only-title-section ttm-bgcolor-darkgrey clearfix" style="margin-top: 7rem">
            <div class="container">
                <!-- row -->
               <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Our Latest Products</h2>
                            </div>
                            <div class="title-desc">Since its founding Delmont has been providing its patients with the full medical care, encompassing outpatients services, is neurology, laboratory, imaging diagnostics and more.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mb-30 mt-45 res-991-mt-0 float-right" href="#">MORE PRODUCTS</a>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep_holder_box width-100 mt_15 mb-50 res-991-mt-0">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--only-title-section-->

 <!-- product-section -->
 <section class="ttm-row product-section mt_90">
            <div class="container"> 
                <div class="products row">
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <div class="onsale">Sale!</div>
                                    <img class="img-fluid" src="images/product/product-one.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Advertising</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price">
                                    <del><span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">$</span>20.00
                                        </span>
                                    </del>
                                    <ins><span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">$</span>18.00
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end-->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-two.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Strategic Branding</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price"><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">$</span>18.00</span>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <div class="onsale">Sale!</div>
                                    <img class="img-fluid" src="images/product/product-three.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Exclusive Gift Pack </h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price">
                                    <del><span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">$</span>3.00
                                        </span>
                                    </del>
                                    <ins><span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">$</span>2.00
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-four.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Distinctive Award</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price"><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">$</span>15.00</span>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-five.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Prints</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price"><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">$</span>20.00</span>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-six.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Digital & Offset Machine</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price"><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">$</span>25.00</span>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-seven.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Website Development</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price"><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">$</span>45.00</span>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a>
                                    </div>
                                    <div class="product-btn"><a href="#" class="wishlist-btn"><i class="ti ti-heart"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-four.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="product-details.html">
                                    <h2>Mobile App Development</h2>
                                </a>
                                <div class="star-ratings">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price"><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">$</span>90.00</span>
                                </span>
                            </div>
                        </div>
                    </div><!-- product end -->
                </div>
            </div>
        </section><!-- product-section end-->





@endsection