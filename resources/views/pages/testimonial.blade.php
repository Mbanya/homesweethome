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
                            <h2 class="title">Testimonials</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- testimonial-area -->
        <div class="testimonial-area section-pb-140">
            <div class="container">
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
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="main/img/images/testimonial_avatar04.png" alt="">
                                <div class="icon"><i class="fas fa-quote-right"></i></div>
                            </div>
                            <div class="testimonial-content">
                                <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>
                                <span>Nicole Willis <br> Texas</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="main/img/images/testimonial_avatar05.png" alt="">
                                <div class="icon"><i class="fas fa-quote-right"></i></div>
                            </div>
                            <div class="testimonial-content">
                                <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>
                                <span>William Jacobs <br> Alaska</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
