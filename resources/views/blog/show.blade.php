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
                                    <h2 class="title">Apartments designed by the leading interior experts</h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>May 19, 2022</li>
                                            <li><a href="blog.html">Nicole Willis</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-thumb">
                                    <img src="assets/img/blog/bl_blog_img01.jpg" alt="">
                                </div>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                <p>Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                <blockquote>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                </blockquote>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum</p>
                                <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain</p>
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
                                <img src="assets/img/blog/post-avatar-img.png" alt="">
                            </div>
                            <div class="post-avatar-content">
                                <p>Eam soluta dicunt cu. Est ad oporteat appellantur, per dicta pertinax cu. Iusto quando conceptam vim ad, an sed
                                    explicari appellantur. Accumsan pericula usu an, in pri dolorum denique. Cu movet debitis cum</p>
                                <span>Nicole Willis <br> Writer</span>
                            </div>
                        </div>
                        <div class="blog-next-prev">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="post prev">
                                        <h2 class="title"><a href="blog-details.html">7 Home Trends That Will Shape Your House In</a></h2>
                                        <a href="#">Prev post</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="post next">
                                        <h2 class="title"><a href="blog-details.html">Skills That You Can Learn In The Real Estate Market</a></h2>
                                        <a href="#">Next post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-comment">
                            <div class="comment-wrap">
                                <div class="comment-wrap-title mb-40">
                                    <h2 class="title">Comments</h2>
                                </div>
                                <div class="latest-comments">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/comment_img01.png" alt="">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="avatar-name">
                                                        <span>April 7, 2022</span>
                                                        <h4 class="name">Bree Patterson</h4>
                                                    </div>
                                                    <p>Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean sollicitudin, lorem auci elit consequat ipsutissem niuis</p>
                                                    <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/blog/comment_img02.png" alt="">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="avatar-name">
                                                        <span>March 13, 2022</span>
                                                        <h4 class="name">Darrell Berges</h4>
                                                    </div>
                                                    <p>Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean sollicitudin, lorem auci elit consequat ipsutissem niuis</p>
                                                    <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <div class="comment-reply-title mb-40">
                                    <h2 class="title">Leave a Reply</h2>
                                </div>
                                <form action="#" class="comment-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="comment-field">
                                                <input type="text" placeholder="Your name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="comment-field">
                                                <input type="email" placeholder="Email address" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="comment-field">
                                                <input type="text" placeholder="Website link" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-field">
                                        <textarea name="comment" placeholder="Write your comment..." required="required"></textarea>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox">
                                        <label for="checkbox">Save my name, email, and website in this browser for the next time I comment</label>
                                    </div>
                                    <div class="submit-btn">
                                        <input type="submit" value="Post comment" class="btn">
                                    </div>
                                </form>
                            </div>
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
                                        <h4 class="title"><a href="blog-details.html">Skills That You Can Learn In The Real Estate
                                                Market</a></h4>
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
