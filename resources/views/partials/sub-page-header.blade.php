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
                                            <li><a href="https://www.facebook.com/Homesweethome%20apartments"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/home_sweet_home_apartments"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://x.com/home_sweet_home_apartmentshome"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.tiktok.com/@home_sweet_homeapartments"><i class="fab fa-tiktok"></i></a></li>
                                            <li><a href="https://www.youtube.com/@HomesweethomeApartment"><i class="fab fa-youtube"></i></a></li>
                                           <li><a href="https://www.threads.net/@home_sweet_home_apartments" target="_blank" rel="noopener"><i
                                                    class="fab fa-threads"></i></a></li>
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
                                   <li><a href="https://www.facebook.com/Homesweethome%20apartments"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/home_sweet_home_apartments"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://x.com/home_sweet_home_apartmentshome"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@home_sweet_homeapartments"><i class="fab fa-tiktok"></i></a></li>
                                    <li><a href="https://www.youtube.com/@HomesweethomeApartment"><i class="fab fa-youtube"></i></a></li>
                                    <li>
                                        <a href="https://www.threads.net/@home_sweet_home_apartments" target="_blank" rel="noopener">
                                            <!-- Threads SVG icon -->
                                            <svg width="18" height="18" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                style="vertical-align:middle;">
                                                <path
                                                    d="M128 26C74.2 26 32 68.9 32 128c0 59 42.2 102 96 102s96-43 96-102c0-59.1-42.2-102-96-102zm41.3 145.4c-7.5 9.7-19.5 16.1-31.1 16.1-22.2 0-35.1-15.7-38.8-37.4 14.5 8.1 27.9 11.2 51.9-8.6 13-11.1 16.4-21.4 16.1-29.6 0-11.7-10.2-24.2-31.3-24.2-26.5 0-43 18.7-43 47.5 0 29.9 20.6 52.2 50.1 52.2 15.4 0 31.7-8.3 40.7-19.9l-15.3-13.3zm-31.1-54.8c11.9 0 17.5 6.4 17.5 12.5.1 2.9-1.6 10.8-10.8 18.6-19.6 16.7-27.3 13.2-38.7 7.8.7-22 14.7-38.9 32-38.9z" />
                                            </svg>
                                        </a>
                                    </li>
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
