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
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
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
                                @foreach($faqs as $item)
                                    <div class="faq-item">
                                        <h2 class="title">{{$item->title}}</h2>
                                        <p>
                                            {{$item->body}}
                                        </p>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- faq-area-end -->

        <!-- newsletter-area -->
       @include('partials.newsletter')
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('partials.footer')

    <!-- footer-area-end -->



    <!-- JS here -->
    @include('partials.sub-page-scripts')
@endsection
