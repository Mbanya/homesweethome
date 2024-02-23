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
                            <h2 class="title">Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-info -->
        <section class="contact-info pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-info-item">
                            <span class="sub-title">Main office</span>
                            <h2 class="title">Riara Corporate Suites, along Riara road,
                                Nairobi, Kenya</h2>
                            <ul class="list-wrap">
                                <li> <a href="mailto:homesweethome@gmail.co.ke">homesweethome@gmail.co.ke</a></li>
                                <li><a href="tel:254743771777">+254 743 771777</a></li>
                            </ul>
                        </div>
                    </div>
{{--                    <div class="col-lg-6 col-md-6 col-sm-10">--}}
{{--                        <div class="contact-info-item">--}}
{{--                            <span class="sub-title">Second office</span>--}}
{{--                            <h2 class="title">Off Dennis Pritt Rd, Opposite Retreat Villas, Inside a Green Gate--}}
{{--                                Nairobi, Kenya</h2>--}}
{{--                            <ul class="list-wrap">--}}
{{--                                <li> <a href="mailto:homesweethome@gmail.co.ke">homesweethome@gmail.co.ke</a></li>--}}
{{--                                <li><a href="tel:254743771777">+254 743 771777</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </section>
        <!-- contact-info-end -->

        <!-- contact-map -->
        <div class="map-area">
            <div class="container">
                <div id="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7949329779703!2d36.76017768750197!3d-1.2977480322468773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a6b79e68503%3A0xcd385d82d55f6727!2sRiara%20Corporate%20Suites%2C%20Riara%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1708657577694!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- contact-map-end -->

        <!-- contact-form-area -->
        <section class="contact-form-area pt-140 pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">leave a message</span>
                            <h2 class="title">Let’s find an ideal property that suits you together</h2>
                        </div>
                        <div class="contact-form-wrap">
                            <form action="{{route('contact-us')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Your name" required="required" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Email" required="required" id="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <input type="text" name="phone" placeholder="Phone number" required="required" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Write message" id="message" required="required"></textarea>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="terms" class="form-check-input" id="checkbox">
                                    <label for="checkbox">I accept <span>Terms & Conditions</span> for processing personal data</label>
                                </div>
                                <div class="form-submit">
                                    <input type="submit" value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-area-end -->

    </main>
    <!-- main-area-end -->
    <!-- footer-area -->
    @include('partials.footer')
    <!-- footer-area-end -->
    <!-- JS here -->
    @include('partials.sub-page-scripts')
@endsection
