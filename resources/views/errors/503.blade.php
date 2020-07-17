@extends("layouts.frontend")


@section("title")

  {{ config("app.name") }}   | Coming soon

@endsection

@section("breadcrumb")

   @includeIf("layouts.breadcrumb" , [ "title" => "Coming soon" , "subtitle" => "Coming soon" ])

@endsection

@section("main_content")

<section class="error-404">
    <!-- <div class="ttm-big-icon">
        <i class="fa fa-cog"></i>
    </div> -->
    <header class="page-header"><h1 class="page-title">COMING SOON</h1></header>
    <div class="page-content"> <p>We are currently upgrading the site, we will be live soon!!!</p></div>
    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="/">Back To Home</a>
</section>

@endsection