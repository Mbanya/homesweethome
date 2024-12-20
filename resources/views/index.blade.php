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
                            <h2 class="title">Expertise, Confidence, and Assurance In Real Estate</h2>
                        </div>
                        <div class="about-content text-center">
                            <p>
                                For a decade, Home Sweet Homes has been transforming the client&#39;s visions into
                                heartfelt homes. Our meticulous standards and assurance in every detail ensure a seamless
                                experience from property listing to closing. Count on us to navigate the intricacies to enable
                                you to make the right decisions. Welcome to a place where real estate meets heart; Home
                                Sweet Home.

                            </p>
                            <a href="{{route('about-us')}}" class="btn transparent-btn">
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
{{--        <div class="brand-area">--}}
{{--            <div class="container">--}}
{{--                <div class="row brand-active">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img01.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img02.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img03.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img04.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img05.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img06.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-item">--}}
{{--                            <img src="main/img/brand/brand_img03.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- brand-area-end -->

        <!-- video-area -->
        <div class="video-area section-pt-140">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-bg wow fadeInUp" data-wow-delay=".2s">
{{--                            <video id="video-background" autoplay loop muted>--}}
{{--                                <source src="{{asset('main/video/hsh-hero-image.mp4')}}" type="video/mp4">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
                            <a href="{{asset('main/video/video-hsh-3.mp4')}}" class="popup-video play-btn"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area-end -->

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
                                <a href="#"><img src="{{asset('main/img/services/buy.jpeg')}}" alt=""></a>
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">Buy</a></h2>
                                <p>Own a property that meets your standards. Explore a curated selection of houses
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
                                <a href="#"><img src="{{asset('main/img/services/sell.jpeg')}}" alt=""></a>
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
                                <a href="#"><img src="{{asset('main/img/services/lease.jpeg')}}" alt=""></a>
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
                                    <a href="{{route('properties.show',$item)}}">
                                        <img src="{{asset(Storage::url($item->banner_image))}}" alt="{{$item->title}}"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="{{route('properties.show',$item)}}">{{$item->title}}</a>
                                    </h3>
                                    <span>{{$item->city->name}}</span>
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
                        <a href="{{route('properties.index')}}" class="btn transparent-btn">
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
{{--        <section class="testimonial-area section-py-140">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-xl-8 col-lg-9">--}}
{{--                        <div class="section-title text-center mb-60">--}}
{{--                            <span class="sub-title">Testimonials</span>--}}
{{--                            <h2 class="title">Trusted by thousands of our happy customers</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-xl-8">--}}

{{--                        @forelse($testimonials as $item)--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="testimonial-thumb">--}}
{{--                                    <img src="main/img/images/testimonial_avatar01.png" alt="">--}}
{{--                                    <div class="icon"><i class="fas fa-quote-right"></i></div>--}}
{{--                                </div>--}}
{{--                                <div class="testimonial-content wow fadeInRight" data-wow-delay=".2s">--}}
{{--                                    <p>“Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt”</p>--}}
{{--                                    <span>{{$item->name}} <br> {{$item->location}}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        @empty--}}
{{--                            <div class="section-title text-center mb-60">--}}
{{--                                <span class="sub-title">No Testimonials Available</span>--}}
{{--                            </div>--}}
{{--                        @endforelse--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog-area section-pt-140 blog-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title mb-50">
                            <span class="sub-title">From our blog</span>
                            <h2 class="title">Latest news & events</h2>
                            <a href="{{route('blogs.index')}}" class="btn transparent-btn">
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
                                                <a href="{{route('blogs.show',$item->title)}}"><img src="{{asset(Storage::url($item->image))}}" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h2 class="title"><a href="{{route('blogs.show',$item->title)}}">
                                                        {{$item->title}}</a></h2>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>{{$item->created_at->format('M, D y')}}</li>
                                                        <li><a href="{{route('blogs.index')}}">{{$item->user->name}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @empty
                                    <h2 class="title"><a href="">No Blogs</a></h2>
                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- newsletter-area -->
       @include('partials.newsletter')
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('partials.footer')

    <!-- footer-area-end -->

    <!-- JS here -->
    @include('partials.main-scripts')
@endsection
