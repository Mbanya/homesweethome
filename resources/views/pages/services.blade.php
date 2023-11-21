@extends('layouts.main')

@section('assets')
@endsection


@section('content')
    <!-- Preloader-start -->
    @include('partials.pre-loader')
    <!-- Preloader-start-end -->

    <!-- Scroll-top -->
    @include('partials.scroll-top')
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('partials.sub-page-header')

    <!-- header-area-end -->
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Services</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section class="services-area section-pt-140 section-pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">What we do</span>
                            <h2 class="title">Buy, Rent or Lease</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-thumb">
                                <a href="#"><img src="main/img/images/services_01.png" alt=""></a>
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">Buy</a></h2>
                                <p>Step into homeowner-ship with confidence and expertise.
                                    Our curated selection of homes awaits, guided by seasoned professionals dedicated to making your dream a reality.
                                    From selection to closing, trust our experts to lead you with assurance.
                                    Welcome to a seamless journey to your new home—where confidence meets expertise.

                                </p>
                                <a href="#" class="text-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-thumb">
                                <a href="#"><img src="main/img/images/services_02.png" alt=""></a>
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">Rent </a></h2>
                                <p>
                                    Searching for the ideal rental? Your search ends here.
                                    Explore a diverse range of rental properties tailored to your needs. We ensure that you will find the perfect space with ease.
                                    From apartments to houses, trust us to match you with the right property. Your ideal rental home awaits—start your journey today.
                                </p>
                                <a href="#" class="text-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-thumb">
                                <a href="#"><img src="main/img/images/services_03.png" alt=""></a>
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">Lease </a></h2>
                                <p>
                                    Discover the freedom of flexible leasing with us. Whether you're seeking a short-term sanctuary or a long-time haven, we have the perfect lease options for you.
                                    Explore residences designed for comfort and style, available for stays that suit your lifestyle. Embrace a new way of living
                                </p>
                                <a href="#" class="text-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- features-area -->
        <section class="features-area features-pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-001-sofa"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Property Valuation</h2>
                                <p>
                                    Unlock the true value of your property with our expert valuation services.
                                    We analyze market trends and property
                                    specifics to provide an accurate and comprehensive valuation, ensuring you make informed decisions
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-002-plants"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Listing Homes</h2>
                                <p>
                                    Maximize your property's visibility and potential with our tailored listing services.
                                    We showcase your home's unique features,
                                    leveraging strategic marketing to attract the right buyers and expedite the selling process
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-003-chandelier"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Marketing Properties</h2>
                                <p>Experience a new level of property marketing with us.
                                    Our innovative strategies, coupled with a deep understanding of the market,
                                    ensure that your property receives the attention it deserves. From online platforms to traditional methods, we cover it all
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-004-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Negotiating Deals</h2>
                                <p>
                                    Let our skilled negotiators work on your behalf. Whether buying or selling, we're dedicated to securing the best deals for our clients.
                                    Trust us to navigate the negotiation process with finesse, ensuring your interests are protected
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-005-leader"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Guiding Clients Through the Buying or Selling Process</h2>
                                <p>
                                    Embark on your real estate journey with confidence. Our seasoned team is here to guide you through every step of the buying or selling process.
                                    From initial consultation to closing the deal, we provide unwavering support and expertise
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- video-area -->
        <div class="video-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-bg">
                            <a href="https://www.youtube.com/watch?v=c-goZSYW6qE" class="popup-video play-btn"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area-end -->



        <!-- newsletter-area -->
        <section class="newsletter-area newsletter-area-two section-pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-inner">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="newsletter-content">
                                        <div class="section-title mb-50">
                                            <span class="sub-title">Quick Inquiry</span>
                                            <h2 class="title">If you have any question? we are glad to consult you as soon as possible</h2>
                                        </div>
                                        <form action="#" class="newsletter-form">
                                            <ul class="list-wrap">
                                                <li><input type="text" placeholder="Your name" required="required"></li>
                                                <li><input type="text" placeholder="Phone number" required="required"></li>
                                                <li class="submit-btn"><input type="submit" value="submit"></li>
                                            </ul>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                <label for="checkbox">I accept <span>Terms & Conditions</span> for processing personal data</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('partials.footer')

    <!-- footer-area-end -->



    <!-- JS here -->
    @include('partials.sub-page-scripts')
@endsection
