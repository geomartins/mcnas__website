@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | Prints

@endsection

@section("breadcrumb")
    @includeIf("layouts.breadcrumb", ["title" => "Prints" , "subtitle" => "Prints"])
@endsection

@section("main_content")
     <!--introduction-section-->
     <section class="ttm-row introduction-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="pt-50 res-991-pt-0">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>OUR MEDICAL</h5>
                                <h2 class="title">We’re Setting the Standards in Research & Clinical Care</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="mb-30 clearfix">
                            <p>We provide the most full medical services, so every person could have the opportunity to receive qualitative medical help. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the USA with over 35 years of quality training and experience.</p>
                        </div>
                        <h5>Delmont Special Features</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Adult Trauma Center</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Birthing and Lactation Classes</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Dental and Oral Surgery</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Children's Trauma Center</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Heart and Vascular Institute</span></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Plastic Surgery</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-25 res-991-mt-0 res-991-mb-40">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mt-15" href="#">VIEW MORE</a>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mt-15" href="#">CONTACT US!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper text-right">
                        <img class="img-fluid" src="images/single-product/single-print.jpg" alt="">
                    </div>
                    <div class="about-overlay-shape">
                        <div class="row">
                            <div class="col-lg-2 col-sm-3"></div>
                            <div class="col-lg-10 col-sm-6">
                                <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-darkgrey mt_50 pl-35 pt-15 ttm-textcolor-white">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content">
                                        <h5 class="font-weight-normal mb-10">We <span class="ttm-textcolor-skincolor"> &nbsp;<i class="fa fa-heart-o"></i>&nbsp; </span> To Care our <span class="ttm-textcolor-skincolor"> Patients !</span></h5>
                                    </div>
                                </div><!-- ttm_single_image-wrapper end -->
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->


    
    <section class="ttm-row clearfix"  style="background-color: #f9fafa">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <!-- section-title -->
                    <div class="section-title with-desc clearfix">
                        <div class="title-header">
                            <h2 class="title">The Result Is Here</h2>
                        </div>
                        <div class="title-desc">Since its founding Delmont has been providing its patients with the full medical care, encompassing outpatients services, so every person could have the opportunity to receive qualitative medical help.</div>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper res-575-mb-15">
                         <div class="twentytwenty-container">
                            <img src="images/after-img-one.jpg" alt="before" >
                            <img src="images/before-img-one.jpg" alt="after" >
                        </div>
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper res-575-mb-15">
                         <div class="twentytwenty-container">
                            <img src="images/after-img-two.jpg" alt="before" >
                            <img src="images/before-img-two.jpg" alt="after" >
                        </div>
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper">
                         <div class="twentytwenty-container">
                            <img src="images/after-img-one.jpg" alt="before" >
                            <img src="images/before-img-one.jpg" alt="after" >
                        </div>
                    </div><!-- ttm_single_image-wrapper end -->
                </div>
            </div>
        </div>
    </section>



    

        <!--testimonial-section-->
        <section class="ttm-row testimonial-section bg-img2 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc text-center clearfix">
                            <div class="title-header">
                                <h5>HAPPY CLIENTS</h5>
                                <h2 class="title">What Our Patients Are Saying</h2>
                            </div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-2"></div>
                </div><!-- row end -->
                
            </div>
        </section>
        <!-- testimonial-section end-->


    
        <!-- multi-section -->
        <section class="ttm-row multi-section break-991-colum clearfix">
            <div class="container">
                <div class="row mt_190 res-1199-mlr-15 res-991-mt-50 box-shadow2 no-gutters">
                    <div class="col-md-5">
                        <!-- col-bg-img-four -->
                        <div class="col-bg-img-four ttm-bg ttm-col-bgimage-yes">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                            </div>
                        </div><!-- col-bg-img-three end -->
                        <img src="images/bg-image/col-bgimage-3.jpg" class="ttm-equal-height-image" alt="bg-image">
                    </div>
                    <div class="col-md-7">
                        <div class="spacing-4 ttm-bgcolor-white">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h2 class="title">Make an Appointment</h2>
                                </div>
                                <div class="title-desc">Contact us any suitable way and make an appointment with the doctor whose help you need! Visit us at the scheduled time.</div>
                            </div><!-- section title end -->
                            <form id="ttm-make-appoint-form" class="ttm-make-appoint-form wrap-form mt_15 clearfix" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-user"></i>
                                                <input name="name" type="text" value="" placeholder="Full Name" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-email"></i>
                                                <input name="address" type="text" value="" placeholder="Email Address" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-mobile"></i>
                                                <input name="phone" type="text" value="" placeholder="Phone Number" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-heart-broken"></i>
                                                <select><option value="">Select Department</option>
                                                        <option value="">Orthopadic</option>
                                                        <option value="">General</option>
                                                </select>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-calendar"></i>
                                                <input name="date" type="text" value="" placeholder="Appointment Date" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-timer"></i>
                                                <input name="date" type="text" value="" placeholder="Appointment Time" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <input name="submit" type="submit" id="submit" class="submit" value="GET A FREE QUOTE">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--multi-section end-->



    



@endsection