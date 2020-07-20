@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | Contact Us

@endsection

@section("breadcrumb")
    @includeIf("layouts.breadcrumb" , [ "title" => "Contact Us" , "subtitle" => "Contact Us"])
@endsection

@section("main_content")

        <section class="ttm-row bg-layer bg-layer-equal-height res-991-p-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- testimonial-box -->
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor ttm-textcolor-white spacing-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <h3>Do You want to Reach at the next Level of business Success?</h3>
                                <p>Book a Complimentary Appointment by Visiting or calling Us!</p>
                                <div class="sep_holder_box width-100 pt-20 mb-35">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>{{ config('app.address_1')}}</h5>
                                            <h4>{{ config('app.address_2') }}</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>{{ config('app.email') }}</h5>
                                            <h4>Need support? Drop us an email</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5> {{ config('app.telephone') }} </h5>
                                            <h4>Have a question? call us now</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>{{ config('app.opening_hour') }}</h5>
                                            <h4>We are open on</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 pt-20 mb-30">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="{{config('app.facebook') }}" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="{{config('app.twitter') }}" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="{{ config('app.instagram') }}" data-tooltip="Instagram"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="{{ config('app.linkedin') }}" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                       <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>WHAT WE DO</h5>
                                    <h2 class="title">Get In Touch</h2>
                                </div>
                                <div class="title-desc">We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievpatients for recovery</div>
                            </div><!-- section title end -->
                            
                            @includeIf('layouts.error_template')

                            <form  class="ttm-contactform wrap-form clearfix" method="post" action="/contact-us">
                              {{ csrf_field() }}
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input name="fullname" type="text" value="" placeholder="Your Name" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="phone" type="text" value="" placeholder="Cell Phone" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="email" type="email" value="" placeholder="Email" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="subject" type="text" value="" placeholder="Subject" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" cols="40" rows="3" placeholder="Message" required="required"></textarea></span>
                                </label>
                                <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" value="SEND MESSAGE">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- intro-section end -->

@endsection