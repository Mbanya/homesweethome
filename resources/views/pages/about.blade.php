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
                            <img src="main/img/images/about_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-40">
                                <span class="sub-title">Who we are</span>
                                <h2 class="title">30 years of leadership in real estate sector</h2>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia non numquam</p>
                            <a href="overview.html" class="btn transparent-btn">
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
        <div class="parallax-img parallax-img" data-background="main/img/bg/parallax-img.jpg" data-jarallax data-video-src="https://www.youtube.com/watch?v=vvNwlRLjLkU"></div>
        <!-- parallax-img-area-end -->

        <!-- roadMap-area -->
        <section class="roadmap-area section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">Awards & recognition</span>
                            <h2 class="title">The Merits we have earned</h2>
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
                                        <h4 class="title">2007</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores</p>
                                            <span>ET Now Real Estate Awards <br> Most Promising Delivery</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">2010</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores</p>
                                            <span>Design & Development Awards <br> Ideal Project Design</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">2011</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores</p>
                                            <span>National Real Estate Awards <br> Best Luxury Company</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">2014</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores</p>
                                            <span>Golden Globe Tiger Awards <br> Property of the Year</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">2019</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores</p>
                                            <span>BAM Awards Real Best <br>Creative builder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-item">
                                        <h4 class="title">2020</h4>
                                        <div class="roadmap-content">
                                            <span class="dot"></span>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                magni dolores</p>
                                            <span>Design & Development Awards <br> Ideal Project Design</span>
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