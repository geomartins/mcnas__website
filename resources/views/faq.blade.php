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
                                @foreach ($datas as $data)
                                    
                                    <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                        <div class="toggle-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <span class="ttm-title-text">{{ $data->question }}</span>
                                            </a>
                                        </div>
                                        <div class="toggle-content">
                                            <p>{{ $data->answer }}</p>
                                        </div>
                                    </div><!-- toggle end -->

                                @endforeach

                            </div>                   
                        </div><!-- wrap-acadion end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>    

@endsection