<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="row align-items-center">
                                <div class="col-xl-2">
                                    <div class="header-mail">
                                        <a href="mailto:homesweethome@gmail.co.ke">homesweethome@gmail.co.ke</a>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="logo mobile-logo d-none">
                                        <a href="{{route('index')}}"><img src="{{asset('main/img/logo/hs-logo.png')}}" alt="Logo"></a>
                                        <a href="{{route('index')}}" class="d-none sticky-logo"><img src="{{asset('main/img/logo/hs-logo.png')}}" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="{{request()->routeIs('index') ? 'active' : ''}} menu-"><a href="">Home</a>

                                            </li>
                                            <li class="{{request()->routeIs('about-us') ? 'active' : ''}} menu" ><a href="{{route('about-us')}}">About</a>
                                            </li>
                                            <li class="menu {{request()->routeIs('index') ? 'active' : ''}}"><a href="{{route('properties.index')}}">Properties</a>

                                            </li>
                                        </ul>
                                        <div class="logo">
                                            <a href="{{route('index')}}"><img src="{{asset('main/img/logo/hs-logo.png')}}" alt="Logo"></a>
                                        </div>
                                        <div class="logo d-none">
                                            <a href="{{route('index')}}"><img src="{{asset('main/img/logo/hs-logo.png')}}" alt="Logo"></a>
                                        </div>
                                        <ul class="navigation right">
                                            <li class="menu {{request()->routeIs('our-services') ? 'active' : ''}}"><a href="{{route('our-services')}}">Services</a>
                                            </li>
                                            <li class="menu {{request()->routeIs('blogs.index') ? 'active' : ''}}"><a href="{{route('blogs.index')}}">Blog</a>

                                            </li>
                                            <li class="menu {{request()->routeIs('contact-us') ? 'active' : ''}}"><a href="{{route('contact-us')}}l">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="header-contact text-end">
                                        <a href="tel:254743771777">+254 743 771777</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="i"><img src="{{asset('main/img/logo/hs-logo.png')}}" alt="Logo"></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
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
