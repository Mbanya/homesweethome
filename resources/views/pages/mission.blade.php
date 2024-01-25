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
                            <h2 class="title">Our Mission</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mission</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- mission-area -->
        <section class="mission-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mission-img">
                            <img src="main/img/images/mission_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mission-content">
                            <div class="section-title mb-40">
                                <span class="sub-title">Our Mission</span>
                                <h2 class="title">To be the most trusted name in real estate globally</h2>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia non numquam</p>
                            <a href="mission.html" class="btn transparent-btn">
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
        <!-- mission-area-end -->

        <!-- vision-area -->
        <section class="vision-area section-pt-140 section-pb-140">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="vision-img text-center">
                            <img src="main/img/images/vision_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vision-content">
                            <div class="section-title mb-35">
                                <span class="sub-title">Our vision</span>
                                <h2 class="title">We believe that we are enablers of people's dreams</h2>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia non numquam</p>
                            <img src="main/img/images/sine.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- vision-area-end -->

        <!-- services-area -->
        <section class="services-area services-style-three section-pt-140 section-pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">What we do</span>
                            <h2 class="title">Creating a great tomorrow for everyone</h2>
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
                                <h2 class="title"><a href="#">Residential Development</a></h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet sed quia</p>
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
                                <h2 class="title"><a href="#">Commercial Development</a></h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet sed quia</p>
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
                                <h2 class="title"><a href="#">Industrial Development</a></h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet sed quia</p>
                                <a href="#" class="text-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area section-pt-140 section-pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Testimonials</span>
                            <h2 class="title">Trusted by thousands of our happy customers</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="main/img/images/testimonial_avatar01.png" alt="">
                                <div class="icon"><i class="fas fa-quote-right"></i></div>
                            </div>
                            <div class="testimonial-content">
                                <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>
                                <span>Jeffrey Kreshek <br> New York</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="main/img/images/testimonial_avatar02.png" alt="">
                                <div class="icon"><i class="fas fa-quote-right"></i></div>
                            </div>
                            <div class="testimonial-content">
                                <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>
                                <span>Mike Stevenson <br> Florida</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="main/img/images/testimonial_avatar03.png" alt="">
                                <div class="icon"><i class="fas fa-quote-right"></i></div>
                            </div>
                            <div class="testimonial-content">
                                <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>
                                <span>Merrin Dardenne <br> Charlotte</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

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
