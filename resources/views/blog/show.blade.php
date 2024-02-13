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

        <!-- blog-details-area -->
        <section class="blog-details-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog-details-wrap">
                            <div class="blog-item blog-item-two">
                                <div class="blog-content blog-details-content">
                                    <h2 class="title">{{$blog->title}}</h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>{{$blog->created_at->format('Y M D')}}</li>
                                            <li><a href="{{route('blogs.index')}}">{{$blog->user->name}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-thumb">
                                    <img src="{{asset(Storage::url($blog->image))}}" alt="">
                                </div>
                                {!! $blog->body !!}
                                <div class="blog-details-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="avatar-post">
                            <div class="post-avatar-img">
                                <img src="{{asset('apple-touch-icon.png')}}" alt="">
                            </div>
                            <div class="post-avatar-content">
                                <p>
                                    For a decade, Home Sweet Homes has been transforming the client's visions into heartfelt homes. Our meticulous standards and assurance in every detail ensure
                                    a seamless experience from property listing to closing.
                                    Count on us to navigate the intricacies to enable you to make the right decisions. Welcome to a place where real estate meets heart; Home Sweet Home
                                </p>
                                <span>{{$blog->user->name}} <br> Admin</span>
                            </div>
                        </div>
{{--                        <div class="blog-next-prev">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="post prev">--}}
{{--                                        <h2 class="title"><a href="blog-details.html">7 Home Trends That Will Shape Your House In</a></h2>--}}
{{--                                        <a href="#">Prev post</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="post next">--}}
{{--                                        <h2 class="title"><a href="blog-details.html">Skills That You Can Learn In The Real Estate Market</a></h2>--}}
{{--                                        <a href="#">Next post</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>

                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

        <!-- blog-area -->
        <section class="blog-area-two blog-pb-80">
            <div class="container">
                <div class="blog-item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_img07.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="title"><a href="blog-details.html">Skills That You Can Learn In The Real Estate Market </a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>june 26, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_img08.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="title"><a href="blog-details.html">7 Home Trends That Will Shape Your House In</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>June 9, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_img09.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="title"><a href="blog-details.html">Advertising Relationships Vs Business Decisions</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>March 15, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('partials.footer')

    <!-- footer-area-end -->



    <!-- JS here -->
    @include('partials.sub-page-scripts')
@endsection
