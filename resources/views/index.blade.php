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
    @include('partials.header')

    <!-- header-area-end -->


    <!-- main-area -->
    <main>

        <!-- slider-area -->
        @include('partials.slider')
        <!-- slider-area-end -->

        <!-- about-area -->
        <section id="about" class="about-area section-pt-135 section-pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-35">
                            <span class="sub-title">Who we are</span>
                            <h2 class="title">30 years of leadership in real estate sector</h2>
                        </div>
                        <div class="about-content text-center">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia non numquam eius modi tempora incidunt</p>
                            <a href="overview.html" class="btn transparent-btn">
                                <div class="btn_m">
                                    <div class="btn_c">
                                        <div class="btn_t1">more about</div>
                                        <div class="btn_t2">more about</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- brand-area -->
        <div class="brand-area">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img01.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img02.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img03.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img04.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img05.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img06.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="main/img/brand/brand_img03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- video-area -->
        <div class="video-area section-pt-140">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-bg wow fadeInUp" data-wow-delay=".2s">
                            <a href="https://www.youtube.com/watch?v=c-goZSYW6qE" class="popup-video play-btn"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area-end -->

        <!-- features-area -->
        <section class="features-area section-pt-140 features-pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-001-sofa"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">High Quality Products</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-002-plants"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Green Environment</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-003-chandelier"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Comprehensive Amenities</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-004-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Professional Services</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-005-leader"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Humanitarian Community</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-006-shield"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Absolute Security</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- project-area -->
        <section class="project-area section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Featured projects</span>
                            <h2 class="title">Discover our Under-construction and complete projects</h2>
                        </div>
                    </div>
                </div>
                <div class="project-item-wrap">
                    <div class="row">
                        @forelse($featured_projects as $item)
                        <div class="col-lg-6 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="project-details.html"><img src="main/img/project/project_img01.jpg" alt=""></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="project-details.html">New Central Garden</a></h3>
                                    <span>Baltimore, MD</span>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="col-lg-6 col-md-6">
                                <div class="project-item">
                                    <div class="project-content">
                                        <h3 class="title"><a href="">No New Projects</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </div>
                    <div class="view-all-btn text-center">
                        <a href="project.html" class="btn transparent-btn">
                            <div class="btn_m">
                                <div class="btn_c">
                                    <div class="btn_t1">Explore all</div>
                                    <div class="btn_t2">Explore all</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area section-py-140">
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

                        @foreach($testimonials as $item)
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <img src="main/img/images/testimonial_avatar01.png" alt="">
                                    <div class="icon"><i class="fas fa-quote-right"></i></div>
                                </div>
                                <div class="testimonial-content wow fadeInRight" data-wow-delay=".2s">
                                    <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>
                                    <span>Jeffrey Kreshek <br> New York</span>
                                </div>
                            </div>
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="testimonial-thumb">--}}
{{--                                    <img src="main/img/images/testimonial_avatar02.png" alt="">--}}
{{--                                    <div class="icon"><i class="fas fa-quote-right"></i></div>--}}
{{--                                </div>--}}
{{--                                <div class="testimonial-content wow fadeInLeft" data-wow-delay=".4s">--}}
{{--                                    <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>--}}
{{--                                    <span>Mike Stevenson <br> Florida</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog-area section-pt-140 blog-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title mb-50">
                            <span class="sub-title">From our blog</span>
                            <h2 class="title">Latest news & events</h2>
                            <a href="blog.html" class="btn transparent-btn">
                                <div class="btn_m">
                                    <div class="btn_c">
                                        <div class="btn_t1">Explore all</div>
                                        <div class="btn_t2">Explore all</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="blog-item-wrap">
                            <div class="row">
                                @forelse($blogs as $item)
                                    <div class="col-md-6">
                                        <div class="blog-item">
                                            <div class="blog-thumb">
                                                <a href="blog-details.html"><img src="main/img/blog/blog_img01.jpg" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h2 class="title"><a href="blog-details.html">Apartments designed by the leading interior experts</a></h2>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>May 19, 2022</li>
                                                        <li><a href="blog.html">Nicole Willis</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @empty
                                    <h2 class="title"><a href="#">No Blogs</a></h2>
                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area section-pb-140">
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
    @include('partials.main-scripts')
@endsection
