<header id="masthead" class="header ttm-header-style-infostack">
       
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li><i class="themifyicon ti-location-pin"></i>{{config('app.address_1')}}, {{config('app.address_2')}}</li>
                            <li><i class="themifyicon ti-timer"></i> {{ config('app.opening_hour')}}</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact text-right pr-10">
                                <li><i class="themifyicon ti-email"></i>Email: <a href="mailto:{{config('app.email')}}"> {{ config('app.email') }}</a></li>
                                <li><i class="themifyicon ti-mobile"></i>Call: {{ config('app.telephone')}}</li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="{{ config('app.twitter') }}"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{ config('app.linkedin') }}"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <div class="container">
                    <div class="ttm-header-top-wrapper clearfix">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <a class="home-link" href="/" title="{{ config('app.name') }}" rel="home">
                                <img id="logo-img" class="img-center" src="images/logo.png" alt="logo-img">
                            </a>
                        </div><!-- site-branding end -->
                        <!-- ttm-content-wrapper -->
                        <div class="ttm-content-wrapper">
                            <div class="header-widget">
                                <div class="header-icon">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <div class="header-content">
                                    <h3>Personal Cabinet</h3>
                                    <p>Qualified Staff</p>
                                </div>
                            </div>
                            <div class="header-widget">
                                <div class="header-icon">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="header-content">
                                    <h3>Get Result Online</h3>
                                    <p>Satisfied Patients</p>
                                </div>
                            </div>
                            <div class="header-widget">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="/job-order">JOB ORDER!</a>
                            </div>
                        </div><!-- ttm-content-wrapper end -->
                    </div>
                </div>
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation ttm-bgcolor-darkgrey">
                                    <!-- header-icons -->
                                    <div class="ttm-header-icons">
                                        <span class="ttm-header-icon ttm-header-cart-link">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>
                                                <span class="number-cart">0</span>
                                            </a>
                                        </span>
                                        <div class="ttm-header-icon ttm-header-search-link">
                                            <a href="#"><i class="ti ti-search"></i></a>
                                        </div>
                                    </div><!-- header-icons end -->
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li class="active"><a href="/">Home</a></li>
                                           <li><a href="/about-us">About Us</a></li>
                                           <li><a href="/our-services">Services</a>
                                                <ul>
                                                <li><a href="/advertising">Advertising</a></li>
                                                <li><a href="/strategic-branding">Strategic Branding</a></li>
                                                <li><a href="/exclusive-gift-pack">Exclusive Gift Pack</a></li>
                                                <li><a href="/distinctive-award">Distinctive Award</a></li>
                                                <li><a href="/prints">Prints</a></li>
                                                <li><a href="/digital-offset-machine">Digital & Offset Machine</a></li>
                                                <li><a href="/website-development">Website Development</a></li>
                                                <li><a href="/mobile-app-development">Mobile App Development</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/faq">Faq</a>
                                            <li><a href="/contact-us">Contact Us</a>
                                            
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div>
        </header>