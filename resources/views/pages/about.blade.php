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
                            <h2 class="title">Overview</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about-area-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img text-center">
                            <img src="{{asset('main/img/about/who-we-are-2.jpeg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-40">
                                <span class="sub-title">Who we are</span>
                                <h2 class="title">A DECADE OF EXPERTISE, CONFIDENCE, AND ASSURANCE IN REAL ESTATEr</h2>
                            </div>
                            <p>
                                For 10 years, Home Sweet Home has been a trusted partner in real estate,
                                simplifying complexities and turning visions into heartfelt homes.
                                With confidence at every step, knowledge that transforms, and assurance in every detail,
                                we are unwavering partners in creating the home of your dreams.
                                Trust us to navigate the intricacies, make informed decisions,
                                and ensure a seamless journey from listing to closing.
                                Welcome to a place where real estate meets heart – welcome to Home Sweet Home
                            </p>
                            <a href="" class="btn transparent-btn">
                                <div class="btn_m">
                                    <div class="btn_c">
                                        <div class="btn_t1">learn more</div>
                                        <div class="btn_t2">learn more</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- counter-area -->
        <div class="counter-area section-pt-140 section-pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="counter-item-wrap">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="counter-item">
                                        <span class="count odometer" data-count="51"></span>
                                        <p>Completed <span>projects</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="counter-item">
                                        <span class="count odometer" data-count="30"></span>
                                        <p>under <span>construction</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="counter-item">
                                        <span class="count odometer" data-count="17"></span>
                                        <p>Projects <span>underway</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="counter-item">
                                        <span class="count odometer" data-count="46"></span>
                                        <p>Joint ventures <span>completed</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-area-end -->

        <!-- parallax-img-area -->
        <div class="parallax-img parallax-img" data-background="{{asset('main/img/banner/video-bg.jpeg')}}" data-jarallax data-video-src="{{asset('main/video/video-hsh-2.mp4')}}"></div>
        <!-- parallax-img-area-end -->

        <!-- roadMap-area -->
        <section class="roadmap-area section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">How We Work</span>
                            <h2 class="title">
                                We’re not just about transactions, we’re about building lifetime relationships.
                                </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="roadmap-wrap">
                        <div class="swiper-container roadmap-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">1. Introductory Meeting</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Our process starts with an introductory meeting where we prioritize your needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">2. Needs Assessment</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>We’ll explore details on an ideal property, location, budget, and any specific requirements in
                                                engagement to understand the client's real estate goals and preferences
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">3. Property Portfolio Presentation</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Showcasing a curated portfolio of properties that align with the client's criteria, highlighting details on each property, emphasizing key features and benefits</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">4. Address Concerns and Questions</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Addressing any concerns or questions by providing clear and comprehensive answers and attentiveness to the little details</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">5. Tour or Preview Options</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Arranging property tours or virtual previews based on the client's preferences, gathering feedback to refine the selection process</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">6. Customized Strategy</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Developing a tailored strategy based on your goals and discussing potential buying, selling, or investing approaches, depending on your needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">7. Negotiation Guidance</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>We negotiate to keep our clients' best interests at heart, and competitive offers and rates in
                                                discussing terms, conditions, and potential adjustments
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">8. Closing and Documentation</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p> When closing, we ensure all necessary documents are in order by collaborating with legal experts to facilitate a smooth and secure transaction</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">9. Post Transaction Support</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>We are committed to our client's satisfaction beyond sale. We provide ongoing support for any post-transaction needs or inquiries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- roadMap-area-end -->

        <!-- team-area -->
        <section class="team-area-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">Leadership</span>
                            <h2 class="title">Meet with our amazing team members</h2>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img01.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Johan Johnson</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img02.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Jacob Jones</a></h3>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img03.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Eleanor Pena</a></h3>
                                    <span>Head of Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img04.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Bessie Cooper</a></h3>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img05.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Kim Smith</a></h3>
                                    <span>Marketer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img06.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Courtney Henry</a></h3>
                                    <span>Account Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img07.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Theresa Webb</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img08.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Belva Boyd</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-more-btn text-center mt-30">
                    <a href="team.html" class="btn transparent-btn">
                        <div class="btn_m">
                            <div class="btn_c">
                                <div class="btn_t1">View all members</div>
                                <div class="btn_t2">View all members</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- team-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area newsletter-area-two section-py-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-inner">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="newsletter-content">
                                        <div class="section-title mb-50">
                                            <span class="sub-title">Quick Inquiry</span>
                                            <h2 class="title">Do you have a question or concern? We are happy to address the concerns in person</h2>
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
