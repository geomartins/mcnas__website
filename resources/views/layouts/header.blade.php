<header id="masthead" class="header ttm-header-style-infostack">
            <!-- ttm-fbar-main-w -->
            <div class="ttm-fbar-main-w ttm-fbar-position-right">
                <div class="ttm-fbar-box-w ttm-textcolor-white ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes">
                    <span class="ttm-fbar-btn">
                        <a href="javascript:void(0)" class="ttm-fbar-btn-link">
                            <span class="ttm-fbar-open-icon"><i class="fa fa-bars"></i></span>
                            <span class="ttm-fbar-close-icon"><i class="fa fa-times"></i></span>
                        </a>
                    </span>
                    <div class="ttm-fbar-bg-layer ttm-bg-layer"></div>
                    <!-- ttm-fbar-content-wrapper -->
                    <div class="ttm-fbar-content-wrapper">
                        <div class="ttm-fbar-box">
                            <!-- ttm_widget_team_search-2 -->
                            <aside id="ttm_widget_team_search-2" class="widget-even widget-4 widget ttm_widget_team_search">
                                <div class="team-search-form-w">
                                    <form method="get" class="team-search-form " action="#">
                                        <div class="ttm-team-search-title">
                                            <h2>Doctors Search:</h2>
                                        </div>
                                        <div class="team-search-form-before-text">We provide the most full medical services, so every person could have the opportunity</div>
                                        <div class="ttm-fbar-input">
                                            <div class="search_field by_name">
                                                <i class="fa fa-user-md"></i><input type="text" placeholder="Search By Name" name="s" value="">
                                            </div>
                                        </div>
                                        <div class="ttm-fbar-input">
                                            <div class="search_field selectbox">
                                                <i class="fa fa-tags"></i>
                                                <select name="team_group" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="" class="select-empty">All Sections</option>
                                                    <option value="dental">Dental</option>
                                                    <option value="dermatologist">Dermatologist</option>
                                                    <option value="health-care">Health Care</option>
                                                    <option value="ophthalmology">Ophthalmology</option>
                                                    <option value="psychological">Psychological</option>
                                                    <option value="surgery">Surgery</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="submit_field"><button type="submit">Search</button></div>
                                    </form>
                                </div>
                            </aside><!-- ttm_widget_team_search-2 end -->
                            <!-- enhanced-text-widget -->
                            <aside id="enhancedtextwidget-10" class="widget-odd widget-5 widget widget_text enhanced-text-widget">
                                <h3 class="widget-title">Opening Hours:</h3>
                                <div class="textwidget widget-text">These are our normal opening hours. When we are closed can be found here.<br>
                                    <div class="ttm-pricelistbox-wrapper ">
                                        <ul class="ttm-pricelist-block">
                                            <li>Monday - Saturday<span class="service-price">8.30 – 17.00</span></li>
                                            <li>Sunday<span class="service-price"><strong>Closed</strong></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside><!-- enhanced-text-widget end -->
                            <!-- enhanced-text-widget -->
                            <aside id="enhancedtextwidget-11" class="widget-even widget-6 widget widget_text enhanced-text-widget">
                                <div class="textwidget widget-text">
                                    <div class="featured-icon-box left-icon icon-align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>{{ config('app.telephone') }}</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Have a question? call us now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside><!-- enhanced-text-widget end -->
                        </div>
                    </div><!-- ttm-fbar-content-wrapper end -->
                </div>
            </div><!-- ttm-fbar-main-w end -->
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