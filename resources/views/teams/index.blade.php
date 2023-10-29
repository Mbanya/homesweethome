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
                            <h2 class="title">Our team</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- team-area -->
        <section class="team-area-two section-pb-115">
            <div class="container">
                <div class="team-item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img01.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Johan Johnson</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img02.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Jacob Jones</a></h3>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img03.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Eleanor Pena</a></h3>
                                    <span>Head of Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img04.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Bessie Cooper</a></h3>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img05.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Kim Smith</a></h3>
                                    <span>Marketer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img06.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Courtney Henry</a></h3>
                                    <span>Account Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img07.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Theresa Webb</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img08.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Belva Boyd</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img09.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Joan McKinney</a></h3>
                                    <span>Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img10.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Leslie Abdo</a></h3>
                                    <span>Marketer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="main/img/team/team_img11.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">David Bradley</a></h3>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <a href="#"><img src="main/img/team/team_img12.jpg" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="#">Mickey Porter</a></h3>
                                    <span>Architect</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area-end -->

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
