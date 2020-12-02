@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | Job Order
@endsection

@section("breadcrumb")
    @includeIf("layouts.breadcrumb", ["title" => "Job Order" , "subtitle" => "Job Order"])
@endsection

@section("main_content")
    


        <!-- multi-section -->
        <section class="ttm-row multi-section break-991-colum clearfix">
            <div class="container">
                <div class="row res-1199-mlr-15 res-991-mt-50 box-shadow2 no-gutters">
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
                                    <h2 class="title">Job Order</h2>
                                </div>
                                <div class="title-desc">Tell us which of our services you are interested in and we would get in touch with you</div>
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
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-mobile"></i>
                                                <input name="phone" type="text" value="" placeholder="Phone Number" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                               
                                                <textarea name="message" cols="3" rows="6" placeholder="Tell us the services you are interested in" required="required"></textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <input name="submit" type="submit" id="submit" class="submit" value="SUBMIT JOB ORDER">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--multi-section end-->







@endsection