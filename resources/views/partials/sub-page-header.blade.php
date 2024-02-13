<!-- header-area -->
<header class="header-style-five">
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="{{route('index')}}"><img src="{{asset('main/img/logo/hsh-logo-nobg.png')}}" width="113" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="{{request()->routeIs('index') ? 'active' : ''}} menu-"><a href="{{route('index')}}">Home</a>

                                    </li>
                                    <li class="menu-item-has-children {{request()->routeIs(['about-us','our-mission','our-team'])  ? 'active' : ''}}"><a href="{{route('about-us')}}">About</a>
                                        <ul class="sub-menu">
                                            <li class="{{request()->routeIs('our-mission') ? 'active' : ''}}"><a href="{{route('our-mission')}}">Mission</a></li>
                                            <li class="{{request()->routeIs('faqs') ? 'active' : ''}}"><a href="{{route('faqs')}}">FAQs</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu {{request()->is('properties/*') ? 'active' : ''}}"><a href="{{route('properties.index')}}">Properties</a>

                                    </li>
                                    <li class="menu {{request()->is('our-services') ? 'active' : ''}}"><a href="{{route('our-services')}}">Services</a>
                                    </li>
                                    <li class="menu {{request()->is('blogs/*') ? 'active' : ''}}"><a href="{{route('blogs.index')}}">Blog</a>

                                    </li>
                                    <li class="menu {{request()->is('contact-us') ? 'active' : ''}}"><a href="{{route('contact-us')}}">contacts</a></li>
                                </ul>
                            </div>
                            <div class="header-action">
                                <ul class="list-wrap">
                                    <li class="header-social">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="header-contact"> <a href="tel:254743771777">+254 743 771777</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="{{route('index')}}"><img src="{{asset('main/img/logo/hsh-logo-nobg.png')}}" width="113" alt="Logo"></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
