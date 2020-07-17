@extends("layouts.frontend")

@section("title")

 {{ config("app.name") }} | Our services

@endsection

@section("breadcrumb")

  @includeIf("layouts.breadcrumb" , [ "title" => "Our Services" , "subtitle" => "Services" ])

@endsection

@section("main_content")

<!-- sidebar -->
<div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                <aside class="widget widget-nav-menu">
                    <ul class="widget-menu box-shadow">
                        <li class="active"><a href="neurology-services.html">Neurology Services</a></li>
                        <li><a href="x-ray-rmi-services.html">X-ray & RMI Services</a></li>
                        <li><a href="orthopaedics-services.html">Orthopaedics Services</a></li>
                        <li><a href="eye-care-services.html">Eye Care Services</a></li>
                        <li><a href="dental-services.html">Dental Services</a></li>
                        <li><a href="cardiology-services.html">Cardiology Services</a></li>
                    </ul>
                </aside>
                <aside class="widget calender-widget">
                    <div id="calendar" class="calendar small"></div>
                </aside>
                <aside class="widget widget-text">
                    <div class="ttm_info_widget">
                        <div class="icon"><i class="themifyicon ti-headphone"></i></div>
                        <div class="title"><h3>Let's Help You!</h3></div>
                        <div class="content">14 Tottenham Court Road<br>Bulls Stadium, Califorina <br>1234, USA <br>
                            <a href="mailto:info@example.com.com">info@example.com</a>
                        </div><br>
                        <a class="view_more" href="/contact-us">View More</a>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 content-area">
                <!-- ttm-service-single-content-are -->
                <div class="ttm-service-single-content-area">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ttm_single_image-wrapper mb-35">
                                <img class="img-fluid" src="images/services/01.jpg" alt="">
                            </div>
                            <div class="ttm-service-description">
                                <h4>Professional medical service of Neurology</h4>
                                <div class="sep_holder_box width-100 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <div class="mb-35">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet odio non porta laoreet. Vestibulum in dui euismod, molestie quam porta, sagittis arcu. Pellentesque vitae pulvinar urna, in dignissim nulla. Mauris iaculis, tortor sed pharetra varius, purus augue feugiat purus, <a href="#">vitae porta nulla turpis</a> pellentesque dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus posuere posuere ex, ac tincidunt turpis porta id. Aenean sed mauris lacus.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet odio non porta laoreet. Vestibulum in dui euismod, <b>molestie quam porta</b>, sagittis arcu. Pellentesque vitae pulvinar urna.</p>
                                </div>
                                <h4>Our Best Services Included</h4>
                                <div class="sep_holder_box width-100 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!-- row -->
                                <div class="row mt-15 mb-15">
                                    <div class="col-sm-6">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Nemo enim ipsam voluptatem voluptas.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">combined with handful of model sentence.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">accusantium doloremque laudantium.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">expedita distinctio. Nam libero tempore.</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Nemo enim ipsam voluptatem voluptas.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">combined with handful of model sentence.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">accusantium doloremque laudantium.</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">expedita distinctio. Nam libero tempore.</span></li>
                                        </ul>
                                    </div>
                                </div><!-- row end -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-35">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet odio non porta laoreet. Vestibulum in dui euismod, molestie quam porta, sagittis arcu. Pellentesque vitae pulvinar urna lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor mb-20" href="#"> Download PDF<i class="fa fa-file-pdf-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ttm-service-single-content-are end -->
        </div><!-- row end -->
    </div>
</div>
<!-- sidebar end -->

@endsection