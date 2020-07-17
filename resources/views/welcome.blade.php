@extends("layouts.frontend")


@section("title")

{{ config("app.name") }} | Homepage

@endsection


@section("slider")

@includeIf("layouts.slider")

@endsection

@section("main_content")
   
<!--intro-section-->
<section class="ttm-row intro-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!-- ttm_single_image-wrapper -->
                <div class="ttm_single_image-wrapper text-right">
                    <img class="img-fluid" src="images/single-img-three.png" alt="" />
                </div><!-- ttm_single_image-wrapper end -->
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="pt-50 pl-20 res-991-pl-0">
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h5>INTRODUCING</h5>
                            <h2 class="title">We Thrive on Building a Healthy Community for All Individuals.</h2>
                        </div>
                    </div><!-- section title end -->
                    <div class="mb-25 clearfix">
                        <p>On the basis of the medical center “Delmont” can be given a thorough examination of the body and get the advice of highly qualified specialists in various fields of medicine. According to studies, our doctors will make an individual program of prevention and treatment of identified diseases, directed to a surgical treatment if necessary.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Adult Trauma Center</span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Birthing and Lactation Classes</span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Dental and Oral Surgery</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Children's Trauma Center</span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Heart and Vascular Institute</span></li>
                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Plastic Surgery</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-20">
                                <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry.</p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mt-20" href="#">MORE ABOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--intro-section end-->


<!--service-section-->
<section class="ttm-row service-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- section-title -->
                <div class="section-title with-desc clearfix">
                    <div class="title-header">
                        <h5>WHAT WE DO</h5>
                        <h2 class="title">Managed Healthcare Services</h2>
                    </div>
                    <div class="title-desc">Since its founding Delmont has been providing its patients with the full medical care, encompassing outpatients services, is neurology, laboratory, imaging diagnostics and more.</div>
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-3 col-md-12">
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-30 mt-45 res-991-mt-0 float-right" href="#">ALL DEPARTMENTS</a>
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row row-equal-height ttm-bgcolor-white ttm-box-seperator ttm-row-seperator box-shadow mt-20">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-child"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Paediatric</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our paediatric services utilizes state technology and employs team of experts for paediatric.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-charity"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Neurology</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We offer for severals services helps with yours neurological condition our patient services.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-heart-5"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Cardiology</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Your heart is the best hands state-of-the-arts cardiovascu-lar of the cardiology institute.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-dentist"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Dental Care</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We offers a greats dental cares including cosmetic and an oral dental implant emergency care.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-walk"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Pulmonary</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our endoscopic procedures is include is the bronchoscopys, thoracentesis,& tube insertion.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-microscope"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Laboratory</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>In an our laboratory, You pass wide a range of the tests that allows us to n diagnosis tests.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-eye-2"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Eye Care</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Ours eye care services utilizes state technology and employs team of experts for paediatric.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon featured-icon-hover">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-form"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>X-ray</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We offeres a greats x-ray cares including cosmetic and an oral dental implant emergency care.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--service-section end-->     

<!--team-section-->
<section class="ttm-row team-section ttm-bgcolor-darkgrey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 col-md-12">
                <!-- section-title -->
                <div class="section-title with-desc text-center clearfix">
                    <div class="title-header">
                        <h5>MEET OUR EXPERIENCED TEAM</h5>
                        <h2 class="title">Our Dedicated Doctors Team</h2>
                    </div>
                    <div class="title-desc">We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievement of our staff, We are all work together to help our all patients for recovery</div>
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-2"></div>
        </div><!-- row end -->
        <!-- row -->
        <div class="row">
            <div class="wrap-team team-slide owl-carousel" data-item="4" data-nav="true" data-dots="false" data-auto="false">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image"> 
                        </div> 
                        <div class="featured-content featured-content-team">
                            <div class="featured-title">
                                <h5><a href="team-details.html">Dr. Metthew Wood</a></h5>
                            </div>
                            <div class="ttm-team-position">Senior Dr. at Delmont</div>
                            <div class="ttm-social-links-wrapper">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                        </div> 
                        <div class="featured-content featured-content-team">
                            <div class="featured-title">
                                <h5><a href="team-details.html">Dr. Roy Coleman</a></h5>
                            </div>
                            <div class="ttm-team-position">Cardiologist Specialist</div>
                            <div class="ttm-social-links-wrapper">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-team">
                            <div class="featured-title">
                                <h5><a href="team-details.html">Dr. Andrew Bert</a></h5>
                            </div>
                            <div class="ttm-team-position">Neurology Specialist</div>
                            <div class="ttm-social-links-wrapper">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-team">
                            <div class="featured-title">
                                <h5><a href="team-details.html">Dr. Teresa Mayer</a></h5>
                            </div>
                            <div class="ttm-team-position">Senior Рathologist</div>
                            <div class="ttm-social-links-wrapper">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/team-member/team-img05.jpg" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-team">
                            <div class="featured-title">
                                <h5><a href="team-details.html">Dr. Robert Burton</a></h5>
                            </div>
                            <div class="ttm-team-position">Senior Dr. at Delmont</div>
                            <div class="ttm-social-links-wrapper">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-35 mb-60 text-center res-991-mb-0">
                     <strong class="ttm-textcolor-white">Don’t hesitate, contact us for better help and services.<span class="ttm-textcolor-skincolor"><u> Explore all Dr. Team</u></span></strong>
                </div>
            </div>
        </div>
    </div>
</section>
<!--team-section end-->

<!-- testimonial-section -->
<section class="ttm-row broken-section break-991-colum bg-layer clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
                <!-- col-img-img-four -->
                <div class="col-bg-img-four ttm-col-bgimage-yes ttm-bg ttm-left-span mt_60 res-991-mt-0">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content"></div>
                </div><!-- col-img-bg-img-four end-->
                <img src="images/bg-image/col-bgimage-4.jpg" class="ttm-equal-height-image" alt="bg-image">
            </div>
            <div class="col-md-7">
                <div class="ttm-col-bgcolor-yes ttm-right-span ttm-bg ttm-bgcolor-skincolor spacing-3">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>HAPPY CLIENTS</h5>
                                <h2 class="title">Our Customers & Clients</h2>
                            </div>
                        </div><!-- section title end -->
                        <!-- wrap-testimonial -->
                        <div class="testimonial-slide owl-carousel pt-20" data-item="1" data-nav="true" data-dots="false" data-auto="true">
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
            </div>
        </div><!-- row end-->
    </div>
</section>
<!-- testimonial-section end-->

<!--client-section-->
<div class="ttm-row client-section ttm-bgcolor-grey mt_70 res-991-mt-0 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row text-center">
            <div class="col-md-12">
                <!-- ttm-client -->
                <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded mt-5" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                    <div class="client-box ttm-box-view-separator-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                            <div class="client-thumbnail">
                                <img src="images/client/client-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-separator-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img src="images/client/client-02.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-separator-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                            <div class="client-thumbnail">
                                <img src="images/client/client-03.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-separator-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                            <div class="client-thumbnail">
                                <img src="images/client/client-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-separator-logo">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img src="images/client/client-02.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="client-box ttm-box-view-separator-logo">
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
<!--client-section end-->


<!--healthcare-section-->
<section class="ttm-row healthcare-section break-991-colum clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="pt-5 pr-35 res-991-mb-30">
                    <!-- section title -->
                    <div class="section-title with-desc clearfix">
                        <div class="title-header">
                            <h5>WE PROVIDE</h5>
                            <h2 class="title">Total Health Care Main Service</h2>
                        </div>
                        <div class="title-desc">We provide the most full medical services, so every person could have the opportunity to receive qualitative medical help.</div>
                    </div><!-- section title end -->
                    <div class="mt_10 mb-25">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="featured-icon-box">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>DNA Testing</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>All our surgeries are furnished with state of the art equipment&nbsp;&nbsp;<u><a href="#">Read More…</a></u></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="featured-icon-box">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Prosthodontics</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>During our 25 years in business, we’ve gathered a seasoned&nbsp;&nbsp;<u><a href="#">Read More…</a></u></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sep_holder_box mt-10 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="featured-icon-box">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Cosmetic Dentistry</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Clinical excellence, diversity, and the&nbsp; access is to provide innovative technology are all hallmarks of graduate medical education experience at the Delmont. Our residents, fellows,Careex&nbsp;&nbsp;<u><a href="#">Read More…</a></u></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mb-20" href="#">MORE SERVICES</a>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mb-20" href="#">CONTACT US!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <!-- ttm_single_image-wrapper -->
                <div class="ttm_single_image-wrapper ttm-reset-content-center-991">
                     <div class="twentytwenty-container">
                        <img src="images/after-img-one.jpg" alt="after" />
                        <img src="images/before-img-one.jpg" alt="before" />
                    </div>
                </div><!-- ttm_single_image-wrapper end -->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--healthcare-section end-->

<section class="ttm-row action-section bg-img4 ttm-bg ttm-bgimage-yes clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="action-box text-center">
                    <h3 class="font-weight-normal ttm-textcolor-white">Need a Doctor for Check-up?</h3>
                    <div class="mb-20">
                        <h1 class="ttm-textcolor-white">Just make an Appointment &amp; You’re Done!</h1>
                    </div>
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-skincolor mt-20" href="#">GET AN APPOINTMENT!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- blog-section -->
<section class="ttm-row blog-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <!-- section-title -->
                <div class="section-title with-desc clearfix">
                    <div class="title-header">
                        <h5>OUR BLOG</h5>
                        <h2 class="title">Recent Articles and News</h2>
                    </div>
                    <div class="title-desc">Since its founding Delmont has been providing its patients with the full medical care, encompassing outpatients services, is neurology, laboratory, imaging diagnostics and more.</div>
                </div><!-- section-title end -->
            </div>
            <div class="col-lg-3 col-md-3"> </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="sep_holder_box width-100 mt_15 mb-35">
                    <span class="sep_holder"><span class="sep_line"></span></span>
                    <span class="sep_holder"><span class="sep_line"></span></span>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
                <!-- post-slide -->
                <div class="post-slide owl-carousel owl-theme owl-loaded" data-item="2" data-nav="true" data-dots="false" data-auto="false">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row box-shadow">
                        <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/portfolio/post-one-768x800.jpg" alt="image"> 
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">16<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                            <div class="post-title featured-title">
                                <h5><a href="single-blog.html">How much aspirin to take for stroke</a></h5>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row box-shadow">
                        <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/portfolio/post-two-768x800.jpg" alt="image"> 
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">20<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                            <div class="post-title featured-title">
                                <h5><a href="single-blog.html">Implant Surgical equipment technology</a></h5>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row box-shadow">
                        <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/portfolio/post-three-768x800.jpg" alt="image">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">28<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div> 
                            </div> 
                        </div>
                        <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                            <div class="post-title featured-title">
                                <h5><a href="single-blog.html">The Benefits of Middle-Age Fitness</a></h5>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row box-shadow">
                        <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/portfolio/post-four-768x800.jpg" alt="image"> 
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">20<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                            <div class="post-title featured-title">
                                <h5><a href="single-blog.html">Good Reasons to Break the Fast-Food</a></h5>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
        </div><!-- row end-->
    </div>
</section>
<!-- multi-section end -->

@endsection