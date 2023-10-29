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
                            <h2 class="title">our blog</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="inner-blog-area section-pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog-item-wrap">
                            <div class="blog-item blog-item-two">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="main/img/blog/bl_blog_img01.jpg" alt=""></a>
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
                            <div class="blog-item blog-item-two">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="main/img/blog/bl_blog_img02.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="title"><a href="blog-details.html">Nature inspired design in the heart of a metropolis</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>January 3, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item blog-item-two">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="main/img/blog/bl_blog_img03.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="title"><a href="blog-details.html">Architecture is not based on concrete and steel</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>November 27, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item blog-item-two">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="main/img/blog/bl_blog_img04.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="title"><a href="blog-details.html">space solutions and small apartment ideas</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>August 14, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item blog-item-two">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="main/img/blog/bl_blog_img05.jpg" alt=""></a>
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
                        <div class="pagination-wrap">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination list-wrap">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <aside class="blog-sidebar">
                            <div class="blog-widget">
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search your article here...">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h2 class="bw-title">Categories</h2>
                                <div class="bw-cat-list">
                                    <ul class="list-wrap">
                                        <li><a href="#">Architecture</a></li>
                                        <li><a href="#">House</a></li>
                                        <li><a href="#">Property</a></li>
                                        <li><a href="#">Real Estate</a></li>
                                        <li><a href="#">Residence</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h2 class="bw-title">Popular posts</h2>
                                <div class="post-list-wrap">
                                    <div class="post-item">
                                        <h4 class="title"><a href="blog-details.html">7 Home Trends That Will Shape Your House In</a></h4>
                                        <span>June 9, 2022</span>
                                    </div>
                                    <div class="post-item">
                                        <h4 class="title"><a href="blog-details.html">space solutions and small apartment ideas</a></h4>
                                        <span>August 14, 2022</span>
                                    </div>
                                    <div class="post-item">
                                        <h4 class="title"><a href="blog-details.html">Skills That You Can Learn In The Real Estate Market</a></h4>
                                        <span>june 26, 2022</span>
                                    </div>
                                    <div class="post-item">
                                        <h4 class="title"><a href="blog-details.html">Learn The Truth About Real Estate Industry</a></h4>
                                        <span>January 10, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h2 class="bw-title">Follow Us</h2>
                                <div class="bw-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
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
