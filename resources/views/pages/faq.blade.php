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
                            <h2 class="title">FAQ</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Faq</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- faq-area -->
        <section class="faq-area">
            <div class="container">
                <div class="faq-wrap">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="faq-title mb-50">
                                <div class="section-title">
                                    <span class="sub-title">Get answer</span>
                                    <h2 class="title">General questions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="faq-item-wrap">
                                <div class="faq-item">
                                    <h2 class="title">High Quality Rooms</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                                <div class="faq-item">
                                    <h2 class="title">Best Amenities at The Best Price</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                                <div class="faq-item">
                                    <h2 class="title">Campfire & Nature Walks</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                                <div class="faq-item">
                                    <h2 class="title">Pickup And Drop Facility</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-wrap">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="faq-title mb-50">
                                <div class="section-title">
                                    <span class="sub-title">Get answer</span>
                                    <h2 class="title">Other <br> questions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="faq-item-wrap">
                                <div class="faq-item">
                                    <h2 class="title">Turiest Guide Support</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                                <div class="faq-item">
                                    <h2 class="title">Hight Class Security</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                                <div class="faq-item">
                                    <h2 class="title">Quick Access to Tourist Attractions</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                                <div class="faq-item">
                                    <h2 class="title">Independent Cottages</h2>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

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
                                            <h2 class="title">If you have any question? we are glad to consult you as soon as
                                                possible</h2>
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
