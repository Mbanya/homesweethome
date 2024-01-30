<section class="newsletter-area newsletter-area-two section-py-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter-inner">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="newsletter-content">
                                <div class="section-title mb-50">
                                    <span class="sub-title">Quick Inquiry</span>
                                    <h2 class="title">Have a question or something you would like to share? We'd love to hear from you. </h2>
                                </div>
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                <form action="{{route('submit-inquiry')}}" class="newsletter-form" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$page_name}}" id="page" name="page">
                                    <ul class="list-wrap">
                                        <li><input type="text" id="name" placeholder="Your name"  name="title" required="required"></li>
                                        <li><input type="text" id="phone" placeholder="Phone number" name="phone" required="required"></li>
                                        <li class="submit-btn"><input type="submit" value="submit"></li>
                                    </ul>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox" name="terms">
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
