@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | FAQ

@endsection

@section("breadcrumb")
    @includeIf("layouts.breadcrumb", ["title" => "FAQ" , "subtitle" => "Frequently Asked Questions"])
@endsection

@section("main_content")

        <section class="ttm-row break-991-colum ttm-bgcolor-white clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-35">
                            <h2 class="ttm-textcolor-skincolor ">Frequently Asked Questions</h2>
                            <p>Below you’ll find answers to some of the most frequently asked questions at {{ config('app.name') }}. We are constantly adding most asked question to this page so if you have a question and don’t see your answer, don’t hesitate to email us at <a href="mailto:{{config('app.email')}}">{{ config('app.email') }}</a></p>
                        </div>
                        <!-- wrap-acadion -->
                        <div class="wrap-acadion">
                            <div class="accordion">
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey active">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">What are the clinic hours?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Patients may schedule appointment by visiting the clinic between 9:00 AM and 6:00 PM Monday – Friday or by calling (123) 456-7899. The Emergency cases is available up to 8 PM.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">What if I have to cancel my appointment?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Sometimes the unexpected happens and you need to cancel your appointment make sure you call us or email us 1 day ago before cancellation.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">How Can I Contact You?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Please visit contact us page for all your queries and redressal of grievances. You can also contact us on +12 (3) 4567 899 number.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">What do I need to bring to my appointment?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <h6>First appointment, please bring the following:</h6>
                                        <ul>
                                            <li>Insurance card</li>
                                            <li>A picture Photo</li>
                                            <li>Any previous medical records (including test results from other clinics)</li>
                                            <li>All current medications (with prescription )</li>
                                        </ul>
                                        <h6>Repeat Patient Appointments</h6>
                                        <ul><li>All current medications (with prescription )</li></ul>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">What are the facilities available in the hospital?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Our Hospitals are multispecialty hospitals and offer the complete range of medical and surgical specialties, with highly experienced doctors.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">Do you have an ambulance service?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Yes, we have an ambulance service 24*7 available.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">Can we buy medicines from outside?</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>All the medicines are provided by the hospital pharmacy only.</p>
                                    </div>
                                </div><!-- toggle end -->
                            </div>                   
                        </div><!-- wrap-acadion end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>    

@endsection