@extends("layouts.frontend")

@section("title")

   {{ config("app.name") }} | About Us  

@endsection

@section("breadcrumb")

   @includeIf("layouts.breadcrumb" , [ "title" => "About Us" , "subtitle" => "About Us" ])

@endsection

@section("main_content")

<!--experiance-section-->
<section class="ttm-row experiance-section bg-layer break-1199-colum clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12">
                <!-- ttm_single_image-wrapper -->
                <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span pt-95 pb-100 res-991-pt-50 res-991-pb-50">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ttm-bgcolor-grey"></div>
                    <div class="layer-content">
                        <div class="ttm_single_image-wrapper mr_240 res-1199-mr-0">
                            <img class="img-fluid" src="images/single-img-four.png" alt="">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                </div>
                <!-- about-img end -->
            </div>
            <div class="col-lg-10 col-md-12">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <div class="pt-105 pb-30 res-1199-plr-15 res-991-pt-50">
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>WHAT WE DO</h5>
                                    <h2 class="title">McNas Communications</h2>
                                </div>
                                <div class="title-desc">McNas Communications Incorporated in Nigeria since the year 2000. The success story of the Firm is an example of a stable, dynamic and well focused staff with a deliberate policy of the development of appropriate personnel for effective delivery of services and integrity.</div>
                                
                                <div class="featured-title">
                                    <h5>We offer the following services:</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Advertising</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Exclusive Gift Pack</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Prints (Screen, Offset And Digital)</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Digital And Offset Machine Supplier</span></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Distinctive Award</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Strategic Branding Products</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Website Design And Development</span></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="title-desc">The management is poised to enhanced it capacity build innovation into the fabric of the business by adopting all innovation practices. Again we stand out in our ability to continuously be network powered, data driven and hyper relevant.</div>
                                <div class="title-desc">We defined a new way of doing things that add value, that allow organizations to unlock trapped value that will better position them for future success. We are going to disrupt the status quo and shape a new reality for their industries, but many feel unprepared for the level of potential disruption they face addressing endemic challenges.</div>
                            </div><!-- section title end -->
                            <!-- acadion -->
                            {{-- <div class="accordion">
                                <!-- toggle -->
                                <div class="toggle">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >Our Mission</a></div>
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="toggle-figure res-991-mb-15">
                                                    <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >Our Vision</a></div>
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="toggle-figure res-991-mb-15">
                                                    <img class="img-fluid" src="images/portfolio/post-two-1200x800.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >Our Stratagies</a></div>
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="toggle-figure res-991-mb-15">
                                                    <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                            </div><!-- acadion end--> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- experiance-section end -->

<!-- fid-section -->
<section class="ttm-row fid-section ttm-bg ttm-bgcolor-skincolor clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row ttm-facts-colum-sep">
            <div class="col-md-3 col-sm-3 co-xs-12">
                <div class="ttm-fid inside ttm-fid-view-topicon">
                    <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-user"></i></div>
                    <div class="ttm-fid-contents">
                        <h4><span   data-appear-animation = "animateDigits"
                                    data-from             = "0"
                                    data-to               = "3215"
                                    data-interval         = "10"
                                    data-before           = ""
                                    data-before-style     = "sup"
                                    data-after            = ""
                                    data-after-style      = "sub"
                                >3215
                            </span>
                        </h4>
                        <h3 class="ttm-fid-title"><span>Clients<br></span></h3>
                    </div><!-- ttm-fid-contents end -->
                </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12">
                <div class="ttm-fid inside ttm-fid-view-topicon">
                    <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-envelope"></i></div>
                    <div class="ttm-fid-contents">
                        <h4><span   data-appear-animation = "animateDigits"
                                    data-from             = "0"
                                    data-to               = "9520"
                                    data-interval         = "5"
                                    data-before           = ""
                                    data-before-style     = "sup"
                                    data-after            = ""
                                    data-after-style      = "sub"
                                >152
                            </span>
                        </h4>
                        <h3 class="ttm-fid-title"><span>Completed Projects<br></span></h3>
                    </div><!-- ttm-fid-contents end -->
                </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12">
                <div class="ttm-fid inside ttm-fid-view-topicon">
                    <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-heart-broken"></i></div>
                    <div class="ttm-fid-contents">
                        <h4><span   data-appear-animation = "animateDigits"
                                    data-from             = "0"
                                    data-to               = "30"
                                    data-interval         = "10"
                                    data-before           = ""
                                    data-before-style     = "sup"
                                    data-after            = ""
                                    data-after-style      = "sub"
                                >30
                            </span>
                        </h4>
                        <h3 class="ttm-fid-title"><span>Years of Experiance<br></span></h3>
                    </div><!-- ttm-fid-contents end-->
                </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12">
                <div class="ttm-fid inside ttm-fid-view-topicon">
                    <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-thumb-up"></i></div>
                    <div class="ttm-fid-contents">
                        <h4><span   data-appear-animation = "animateDigits"
                                    data-from             = "0"
                                    data-to               = "124"
                                    data-interval         = "10"
                                    data-before           = ""
                                    data-before-style     = "sup"
                                    data-after            = ""
                                    data-after-style      = "sub"
                                >124
                            </span>
                        </h4>
                        <h3 class="ttm-fid-title"><span>Qualified Staffs<br></span></h3>
                    </div><!-- ttm-fid-contents end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fid-section end -->

<!--team-section-->
<section class="ttm-row team-section clearfix">
     <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <!-- section-title -->
                <div class="section-title with-desc clearfix">
                    <div class="title-header">
                        <h5>MEET OUR EXPERIENCED TEAM</h5>
                        <h2 class="title">Our Dedicated Team</h2>
                    </div>
                    <div class="title-desc">We offer extensive  procedures to outbound and inbound patients what it is and we are very proud of achievement of our staff, We are all work together to help our all patients for recovery</div>
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-2 col-md-2"></div>
        </div><!-- row end -->
        <!-- row -->
        <div class="row">
            <div class="wrap-team team-slide owl-carousel" data-item="4" data-nav="true" data-dots="false" data-auto="false">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image"> 
                    </div> 
                    <div class="ttm-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="featured-content featured-content-team">
                        <div class="ttm-team-position">Graphic Designer</div>
                        <div class="featured-title">
                            <h5><a href="team-details.html">Martins Abiodun</a></h5>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                    </div> 
                    <div class="ttm-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="featured-content featured-content-team">
                        <div class="ttm-team-position">Animation Specialist</div>
                        <div class="featured-title">
                            <h5><a href="team-details.html">Emmanuel Olayomi</a></h5>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image"> 
                    </div>
                    <div class="ttm-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                        </div>
                    </div> 
                    <div class="featured-content featured-content-team">
                        <div class="ttm-team-position">Mobile App developer</div>
                        <div class="featured-title">
                            <h5><a href="team-details.html">Tolani Williams</a></h5>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image"> 
                    </div>
                    <div class="ttm-box-view-overlay">
                        <div class="featured-iconbox ttm-media-link">
                            <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="featured-content featured-content-team">
                        <div class="ttm-team-position">Chief Financial Officer</div>
                        <div class="featured-title">
                            <h5><a href="team-details.html">Dr Dora Williams</a></h5>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--team-section end-->


<!-- testimonial-section -->
<section class="ttm-row broken-section bg-layer break-991-colum clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
               <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-5">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>CLIENTS</h5>
                                <h2 class="title">Happy Patients & Clients</h2>
                            </div>
                            <div class="title-desc">If you need any industrial solution we are available for you. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div><!-- section title end -->
                        <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-white btn-inline mt_25" href="#">VIEW MORE DETAILS<i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <!-- testimonial-box -->
                <div class="testimonial-box">
                    <div class="ttm-col-bgcolor-yes ttm-right-span ttm-bg ttm-bgcolor-darkgrey spacing-6">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- wrap-testimonial -->
                            <div class="testimonial-slide owl-carousel" data-item="1" data-nav="true" data-dots="false" data-auto="true">
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="images/testimonial/01.jpg" alt="testimonial-img">
                                        </div>
                                         <div class="testimonial-caption">
                                            <h5>RAshley Foster</h5>
                                            <label>Patient</label>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <blockquote class="ttm-testimonial-text">Prior to my stay at Delmont, I was aware of their stellar reputation and multiple friends commented about how lucky I was to have my surgery scheduled there. As a result my expectations were high and yet the kind and professional staff with excellent patient care surpassed them.</blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1"> 
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                        </div>
                                        <div class="testimonial-caption">
                                            <h5>Alan Sears</h5>
                                            <label>Patient</label>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <blockquote class="ttm-testimonial-text">Great co workers, really good environment and excellent patient care. They are continuously innovating themselves which is why they remain a premier dental clinic.This was the cleanest medical establishment I've ever been in. They just loved the welcoming and warm atmosphere in there.</blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1"> 
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img class="img-fluid" src="images/testimonial/03.jpg" alt="testimonial-img">
                                        </div>
                                        <div class="testimonial-caption">
                                            <h5>Raymon Myers</h5>
                                            <label>Patient</label>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <blockquote class="ttm-testimonial-text">The doctors and nurses and aides were excellent. The food was excellent. I am feeling fine and very lucky, back to my old self again and it feels great. Thank God for clinics such as yours. I appreciate all your kindness and good care you gave me is beyond my expectations they wonder for me.</blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                            </div><!-- wrap-testimonial end-->
                        </div>
                    </div>
                </div><!-- testimonial-box end-->
            </div>
        </div><!-- row end-->
    </div>
</section>
<!-- testimonial-section end-->

<!--clientbox-section-->
<div class="ttm-row clientbox-section ttm-bgcolor-grey mt_70 res-991-mt-0 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row text-center">
            <div class="col-md-12">
                <!-- ttm-client -->
                <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded mt-5" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                            <div class="client-thumbnail">
                                <img src="images/client/client-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img src="images/client/client-02.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                            <div class="client-thumbnail">
                                <img src="images/client/client-03.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                            <div class="client-thumbnail">
                                <img src="images/client/client-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img src="images/client/client-02.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                            <div class="client-thumbnail">
                                <img src="images/client/client-03.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-client end -->      
            </div>
        </div><!-- row end -->
    </div>
</div>
<!--clientbox-section end-->

@endsection