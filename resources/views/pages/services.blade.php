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
                                <p>2-Own a property that meets your standards. Explore a curated selection of houses
                                    to meet your needs. From selection to closing, rely on us for a seamless experience for
                                    everything in between.

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
                                    Searching for the ideal rental? Your search ends here. Uncover hidden gems and
                                    sanctuaries in the heart of Nairobi and Dubai to call home. From apartments to houses, your
                                    ideal space awaits at the beat of your fingertips.
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
                                    Match up your flexibility with the new way of living; in comfort, style, and
                                    convenience. Experience the perfect stays in short-term sanctuaries and long-term havens.
                                    Check out our ready live-in options.
                                </p>
                                <a href="#" class="text-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- video-area -->
        <div class="video-area-three pb-80">
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
                                    Discover the true value of your property.Our expert valuation analyses market
                                    trends and property details unlocking accurate valuation so you can make the best of it.
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
                                    Showcase your property&#39;s potential with our tailored listing services. We’ll
                                    advertise your property’s uniqueness, leveraging strategic marketing to attract the right
                                    buyers and speed up the selling process.
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
                                <p>Give your property the attention it deserves. Our creative and innovative
                                    strategies will draw eyes to highlight its features to receive the attention it deserves.
                                    Experience a new level of property marketing with us.
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
                                    Whether buying or selling, we’re dedicated to bagging the best deal. Our finesse
                                    extends negotiating, we prioritize protecting our clients&#39; best interests.
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
                                    Embrace confidence in finding the ideal property. We’ll walk in step from initial
                                    consulting to closing the deal, expect unwavering support when buying, selling or renting.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- features-area-end -->





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
