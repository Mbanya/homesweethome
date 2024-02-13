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
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
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
                            @forelse($blogs as $blog)
                                <div class="blog-item blog-item-two">
                                    <div class="blog-thumb">
                                        <a href="{{route('blogs.show',$blog->id)}}">
                                            <img src="{{asset(Storage::url($blog->image))}}" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="title"><a href="{{route('blogs.show',$blog->id)}}"></a>{{$blog->title}}</h2>
                                        <div class="blog-meta">
                                            <ul class="list-wrap">
                                                <li>May 19, 2022</li>
                                                <li><a href="{{route('blogs.index')}}">{{$blog->user->name}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="blog-item blog-item-two">
                                    <div class="blog-content">
                                        <h2 class="title"><a href=""></a>No Blogs available</h2>
                                    </div>
                                </div>
                            @endforelse


                        </div>
                        {{$blogs->links()}}
{{--                        <div class="pagination-wrap">--}}
{{--                            <nav aria-label="Page navigation example">--}}
{{--                                <ul class="pagination list-wrap">--}}
{{--                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <aside class="blog-sidebar">
{{--                            <div class="blog-widget">--}}
{{--                                <div class="sidebar-search">--}}
{{--                                    <form action="#">--}}
{{--                                        <input type="text" placeholder="Search your article here...">--}}
{{--                                        <button type="submit"><i class="fas fa-search"></i></button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="blog-widget">
                                <h2 class="bw-title">Categories</h2>
                                <div class="bw-cat-list">
                                    <ul class="list-wrap">
                                        @foreach($categories as $category)
                                            <li><a href="">{{$category->name}}</a></li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h2 class="bw-title">Featured posts</h2>
                                <div class="post-list-wrap">
                                    @forelse($featured_blogs as $item)
                                        <div class="post-item">
                                            <h4 class="title"><a href="{{route('blogs.show',$item->id)}}">{{$item->title}}</a></h4>
                                            <span>{{$item->created_at}}</span>
                                        </div>
                                    @empty
                                        <div class="post-item">
                                            <h4 class="title"><a href=""> No Featured Posts</a></h4>

                                        </div>
                                    @endforelse


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
