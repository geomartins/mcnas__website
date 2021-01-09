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
                                <div class="title-desc"> McNas Communications was Incorporated in the year 2000. Our success emanates from our dynamic, committed and creative staff who are focused on delivering value to our esteemed customers.</div>
                                
                                <div class="featured-title">
                                    <h5>We offer the following services:</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Advertising</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Exclusive Gift Pack</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Prints (Screen, Offset And Digital)</span></li>
                                           
                                            
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Distinctive Award</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Strategic Branding Products</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Website Design </span></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="title-desc">Our management is poised to enhance the company’s capacity through continuous innovative practices through the application of technology so as to stand out in this industry.</div>
                                {{-- <div class="title-desc">We defined a new way of doing things that add value, that allow organizations to unlock trapped value that will better position them for future success. We are going to disrupt the status quo and shape a new reality for their industries, but many feel unprepared for the level of potential disruption they face addressing endemic challenges.</div> --}}
                            </div><!-- section title end -->
                            <!-- acadion -->
                            <div class="accordion">
                                <!-- toggle -->
                                <div class="toggle">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >Our Mission</a></div>
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>To add value to customers satisfactions through the delivery of world class services at a price that represent value. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >Our Vision</a></div>
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>To always surpass our previous services in creativity and Corporate branding. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >Core Value</a></div>
                                    <div class="toggle-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Consistence</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Integrity</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Team Work</span></li>
        
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Personal </span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Commitment</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Creativity</span></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                            </div><!-- acadion end-->
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

 <!--about-section-->
 <section class="ttm-row about-section break-991-colum bg-img10 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="pt-50 res-991-pt-0">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h2 class="title">Quality Policy Statement</h2>
                        </div>
                    </div><!-- section title end -->
                    <div class="mb-30 clearfix">
                        <p> We at  McNas Communications are dedicated
                            to achieve Customer/ Client Satisfaction by
                            Continually Improving service of excellent Quality.
                            We will continue to strive for excellence in 
                            Creativity, Unique Idea, Exciting products and 
                            services, combine with prompt Delivery 
                            and Competitive price through continuous
                            Improvement in our 
                            Quality Management System.
                            </p>
                    </div>
                    <div class="testimonial-caption">
                        <h5>"Yemi Bakare"</h5>
                        <span>CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <!-- ttm_single_image-wrapper -->
                <div class="ttm_single_image-wrapper">
                    <div class="pl-40 pb-40 ttm-bg-pattern text-right">
                        <img class="img-fluid" src="images/single-img-one.jpg" alt="">
                    </div>
                    <!-- ttm-fid -->
                    <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon ttm-highlight-fid">
                        <div class="ttm-fid-icon-wrapper">
                            <i class="fa fa-hospital-o"></i>
                        </div>
                        <div class="ttm-fid-contents">
                            <h4 class="ttm-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="20" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sup">
                                    20
                                </span><sup>+</sup>
                            </h4>
                            <h3 class="ttm-fid-title"><span>Years Of<br>Experience<br></span></h3>
                        </div>
                    </div><!-- ttm-fid end -->
                </div><!-- ttm_single_image-wrapper end -->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--about-section end-->

 <!--portfolio-section-->
 <section class="ttm-row portfolio-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- section-title -->
                <div class="section-title with-desc clearfix">
                    <div class="title-header">
                        <h2 class="title">Clientele</h2>
                    </div>
                    <div class="title-desc">Our  reference of corporate entity and Individuals that had enjoyed our services In the  past and still savour their experience for engaging us are:</div>
                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="sep_holder_box width-100 mt_5 mb-20 res-991-mt-0">
                    <span class="sep_holder"><span class="sep_line"></span></span>
                    <span class="sep_holder"><span class="sep_line"></span></span>
                </div>
            </div>
        </div>
        <!-- row -->
        {{-- <div class="row multi-columns-row ttm-boxes-row-wrapper ttm-boxes-spacing-10px"> --}}
            <div class="row">
                <div class="col-md-3">
                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content"> Lafarge Cement Wapco Nig. PLC.</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Boye  Komolafe & Co.</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">May & Baker PLC.</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Citizens Liberation Advocacy Initiative (CLAI)</span></li>

                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Datab Oil & Gas Ltd.</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Skyward Nig Ltd.</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">NuVerus Africa Limited</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Top Flight School, Gbagada, Lagos</span></li>
                        
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Hon. Shokoya Omowumi  </span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">CRELLIN </span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Excalibur Power & Gas Limited </span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Samdoro football Club  </span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content"> Hon. Abiodun Ayileka</span></li>

                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Peace Consult Limited </span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content"> Aroaic  Nig. Limited</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content"> Col. O.O Soile etc</span></li>
                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content"> R.C.C.G Gethsamane Parish</span></li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        
        <!-- row end-->
    </div>
</section>
<!--portfolio-section end-->



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
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img src="images/client/client-04.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                            <div class="client-thumbnail">
                                <img src="images/client/client-05.png" alt="image">
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