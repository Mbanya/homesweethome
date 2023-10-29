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

        <!-- team-details-area -->
        <section class="team-details-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-9">
                        <div class="team-details-thumb">
                            <img src="main/img/team/team_details_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="team-details-content">
                            <span class="sub-title">Architect</span>
                            <h2 class="title">Johan Johnson</h2>
                            <div class="td-contact">
                                <ul class="list-wrap">
                                    <li><a href="mailto:johanjohnson@mail.com">johanjohnson@mail.com</a></li>
                                    <li><a href="tel:0123456789">+7 875 647 6689</a></li>
                                </ul>
                            </div>
                            <div class="td-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
                            <p>Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally
                                encounter consequences</p>
                            <div class="sine-img mt-40">
                                <img src="main/img/images/sine.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-details-area-end -->

        <!-- contact-form-area -->
        <section class="contact-form-area section-pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">leave a message</span>
                            <h2 class="title">Contact with Johnson</h2>
                        </div>
                        <div class="contact-form-wrap">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Your name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Phone number" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Write message" required="required"></textarea>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox">
                                    <label for="checkbox">I accept <span>Terms & Conditions</span> for processing personal
                                        data</label>
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

        <!-- team-area -->
        <section class="team-area section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">Leadership</span>
                            <h2 class="title">Meet with our amazing team members</h2>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="row justify-content-center">
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
                    </div>
                    <div class="view-more-btn text-center mt-30">
                        <a href="team.html" class="btn transparent-btn">
                            <div class="btn_m">
                                <div class="btn_c">
                                    <div class="btn_t1">View all members</div>
                                    <div class="btn_t2">View all members</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('partials.footer')

    <!-- footer-area-end -->



    <!-- JS here -->
    @include('partials.sub-page-scripts')
@endsection
