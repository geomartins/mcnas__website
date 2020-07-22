@extends("layouts.frontend")


@section("title")

{{ config("app.name") }} | Home

@endsection

@section('slider')
    @includeIf('layouts.slider')
@endsection



@section("main_content")

  <!--only-title-section-->
  <section class="ttm-row only-title-section ttm-bgcolor-darkgrey clearfix" style="margin-top: 0rem">
            <div class="container">
                <!-- row -->
               <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Our Trending services</h2>
                            </div>
                            <div class="title-desc">Since its founding {{ config('app.name') }} has been providing its client with uninterrupted digital services such as advertising, printing, strategic branding and more.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mb-30 mt-45 res-991-mt-0 float-right" href="/job-order">JOB ORDER</a>
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
                                   
                                    <div class="product-btn"><a href="/advertising" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    {{-- <div class="onsale">Sale!</div> --}}
                                    <img class="img-fluid" src="images/product/product-one.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/advertising">
                                    <h2>Advertising</h2>
                                </a>
                              
                            </div>
                        </div>
                    </div><!-- product end-->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="/strategic-branding" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-two.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/strategic-branding">
                                    <h2>Strategic Branding</h2>
                                </a>
                                
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="/exclusive-gift-pack" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    {{-- <div class="onsale">Sale!</div> --}}
                                    <img class="img-fluid" src="images/product/product-three.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/exclusive-gift-pack">
                                    <h2>Exclusive Gift Pack </h2>
                                </a>
                                
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    <div class="product-btn"><a href="/distinctive-award" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-four.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/distinctive-award">
                                    <h2>Distinctive Award</h2>
                                </a>
                                
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                   
                                    <div class="product-btn"><a href="/prints" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-five.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/prints">
                                    <h2>Prints</h2>
                                </a>
                                
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                   
                                    <div class="product-btn"><a href="/digital-offset-machine" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-six.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/digital-offset-machine">
                                    <h2>Digital & Offset Machine</h2>
                                </a>
                               
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    
                                    <div class="product-btn"><a href="/website-development" class="search-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                   
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-seven.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/website-development">
                                    <h2>Website Development</h2>
                                </a>
                                
                            </div>
                        </div>
                    </div><!-- product end -->
                    <!-- product -->
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <div class="ttm-product-box">
                            <!-- ttm-product-box-inner -->
                            <div class="ttm-product-box-inner">
                                <div class="ttm-shop-icon">
                                    
                                   
                                    <div class="product-btn"><a href="/mobile-app-development" class="wishlist-btn"><i class="ti ti-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ttm-product-image-box">
                                    <img class="img-fluid" src="images/product/product-four.jpg" alt="">
                                </div>
                            </div><!-- ttm-product-box-inner end -->
                            <div class="ttm-product-content">
                                <a class="ttm-product-title" href="/mobile-app-development">
                                    <h2>Mobile App Development</h2>
                                </a>
                               
                            </div>
                        </div>
                    </div><!-- product end -->
                </div>
            </div>
        </section><!-- product-section end-->





@endsection