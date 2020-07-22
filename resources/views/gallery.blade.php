@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }}  | Gallery

@endsection

@section("breadcrumb")
    @includeIf("layouts.breadcrumb", ["title" => "Gallery" , "subtitle" => "Our Gallery"])
@endsection

@section("main_content")

<section class="ttm-row pb-70 res-991-pb-20 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row multi-columns-row ttm-boxes-row-wrapper">

            @foreach ($datas as $data)
                
                <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">

                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <a href="#"> <img class="img-fluid" src="{{ $data->featured_image }}" alt="image"></a>
                        </div><!-- featured-thumbnail end-->
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                            <div class="featured-iconbox ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" title="Fitness Guidance to Patient" data-rel="prettyPhoto" href="{{ $data->featured_image }}">
                                    <i class="ti ti-search"></i>
                                </a>
                            </div>
                            <div class="ttm-box-view-content-inner">
                                <div class="featured-content featured-content-portfolio">
                                    <div class="featured-title">
                                        <h5><a href="#">{{  $data->title }}</a></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                    </div><!-- featured-imagebox -->
                </div>
            @endforeach

        </div><!-- row end -->
    </div>
</section>

@endsection