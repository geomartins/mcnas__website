<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Mcnas" />
<meta name="description" content="Mcnas " />
<meta name="author" content="https://www.nairafox.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

{!! SEO::generate() !!}

<!-- favicon icon -->
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon57-57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon60-60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon72-72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon76-76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon114-114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon120-120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon144-144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon152-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon180-180.png">

<link rel="icon" type="image/png" href="images/favicon32-32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/favicon192-192.png" sizes="192x192">
<link rel="icon" type="image/png" href="images/favicon96-96.png" sizes="96x96">
<link rel="icon" type="image/png" href="images/favicon16-16.png" sizes="16x16">

<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- twentytwenty -->
<link rel="stylesheet" type="text/css" href="css/twentytwenty.css"/>

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        @includeIf("layouts.preloader")
        <!-- preloader end -->

        <!--header start-->
        @includeIf("layouts.header")
        <!--header end-->
        
        @yield("breadcrumb")

        @yield("slider")
       <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

    @yield("main_content") 

    </div><!--site-main end-->


    <!--footer start-->
    @includeIf("layouts.footer")
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>
    <script src="js/booked-calendar.js"></script>
    <script src="js/main.js"></script>

    <!-- Revolution Slider -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Javascript end-->

 
  @includeIf('layouts.tawk')

</body>
</html>