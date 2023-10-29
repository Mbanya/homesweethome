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


        <!-- project-area -->
        <section class="project-details-area">
            <div class="container">
                <div class="project-details-top">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="project-details-title">
                                <span>8601 Honeygo Boulevard, Baltimore, MD 21236</span>
                                <h2 class="title">New Central Garden</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-side">
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-info-wrap">
                    <ul class="list-wrap">
                        <li class="info-item">
                            <div class="icon">
                                <i class="flaticon-018-rescale"></i>
                            </div>
                            <div class="content">
                                <p>Property size <span>174,000 sqft</span></p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon">
                                <i class="flaticon-008-money-bag"></i>
                            </div>
                            <div class="content">
                                <p>Price Range <span>$24K - $77K</span></p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon">
                                <i class="flaticon-017-apartment"></i>
                            </div>
                            <div class="content">
                                <p>Type<span>Apartment</span></p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon">
                                <i class="flaticon-016-puzzle"></i>
                            </div>
                            <div class="content">
                                <p>Flat Size <span>100 - 150 Sqft</span></p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon">
                                <i class="flaticon-009-crane-truck"></i>
                            </div>
                            <div class="content">
                                <p>Status <span>Under Construction</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- project-area-end -->

        <!-- gallery-area -->
        <div class="gallery-area section-pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-active">
                            <div class="gallery-item">
                                <img src="main/img/gallery/gallery_img01.jpg" alt="">
                                <a href="main/img/gallery/gallery_img01.jpg" class="photo-gallery popup-image">Photo gallery</a>
                            </div>
                            <div class="gallery-item">
                                <img src="main/img/gallery/gallery_img02.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=c-goZSYW6qE" class="play-btn popup-video"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="gallery-item">
                                <div class="apartment-view">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!4v1662100217151!6m8!1m7!1sUtVXSDO2fjmgru0WpZ73jA!2m2!1d40.74810413527912!2d-73.98582572164915!3f108.72567799089525!4f-13.920241031746983!5f0.7820865974627469"
                                        allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-area-end -->

        <!-- features-area -->
        <section class="features-area features-pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-001-sofa"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">High Quality Products</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-002-plants"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Green Environment</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-003-chandelier"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Comprehensive Amenities</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-004-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Professional Services</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-005-leader"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Humanitarian Community</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="features-item">
                            <div class="feature-icon">
                                <i class="flaticon-006-shield"></i>
                            </div>
                            <div class="feature-content">
                                <h2 class="title">Absolute Security</h2>
                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed quia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- direction-area -->
        <section class="direction-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="direction-img text-center">
                            <img src="main/img/images/direction_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="direction-content">
                            <div class="section-title mb-40">
                                <span class="sub-title">Baltimore, MD</span>
                                <h2 class="title">8601 Honeygo Boulevard,</h2>
                            </div>
                            <ul class="list-wrap">
                                <li>Supermarket: <span>200M</span></li>
                                <li>Railway Station: <span>1,800M</span></li>
                                <li>Airport: <span>2,790M</span></li>
                                <li>University: <span>250M</span></li>
                                <li>Hospital: <span>500M</span></li>
                                <li>Bus Station: <span>150M</span></li>
                                <li>Park: <span>1,500M</span></li>
                            </ul>
                            <a href="contact.html" class="btn transparent-btn">
                                <div class="btn_m">
                                    <div class="btn_c">
                                        <div class="btn_t1">Get direction</div>
                                        <div class="btn_t2">Get direction</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- direction-area-end -->

        <!-- plan-area -->
        <div class="plan-area section-py-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="plan-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="master-tab" data-bs-toggle="tab" data-bs-target="#master-tab-pane" type="button" role="tab" aria-controls="master-tab-pane" aria-selected="true">Master Plan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tower-tab" data-bs-toggle="tab" data-bs-target="#tower-tab-pane" type="button"
                                            role="tab" aria-controls="tower-tab-pane" aria-selected="false">Tower Plan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="double-tab" data-bs-toggle="tab" data-bs-target="#double-tab-pane" type="button"
                                            role="tab" aria-controls="double-tab-pane" aria-selected="false">Double Height</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse-tab-pane" type="button"
                                            role="tab" aria-controls="penthouse-tab-pane" aria-selected="false">Penthouse</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="master-tab-pane" role="tabpanel" aria-labelledby="master-tab" tabindex="0"><img src="main/img/images/plan_img01.jpg" alt=""></div>
                                <div class="tab-pane fade" id="tower-tab-pane" role="tabpanel" aria-labelledby="tower-tab" tabindex="0">
                                    <img src="main/img/images/plan_img01.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="double-tab-pane" role="tabpanel" aria-labelledby="double-tab" tabindex="0">
                                    <img src="main/img/images/plan_img01.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="penthouse-tab-pane" role="tabpanel" aria-labelledby="penthouse-tab" tabindex="0">
                                    <img src="main/img/images/plan_img01.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="file-wrap">
                            <ul class="list-wrap">
                                <li><a href="main/img/images/plan_img01.jpg" download target="_blank"><i class="flaticon-010-pdf"></i>Brochure 7.9 kb</a></li>
                                <li><a href="main/img/images/plan_img01.jpg" download target="_blank"><i class="flaticon-010-pdf"></i>Payment 4.2 kb</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- plan-area-end -->


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
