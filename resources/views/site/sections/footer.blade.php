<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Recent Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            <a href="single.html"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="{{ asset('/statics/site/upload/blog_square_01.jpg') }}" alt=""
                                        class="img-fluid float-left">
                                    <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                    <small>12 Jan, 2016</small>
                                </div>
                            </a>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            <a href="single.html"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="{{ asset('/statics/site/upload/blog_square_04.jpg') }}" alt=""
                                        class="img-fluid float-left">
                                    <h5 class="mb-1">Banana-chip chocolate cake recipe with customs</h5>
                                    <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            <li><a href="#">Fahsion <span>(21)</span></a></li>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="widget">
                    <div class="footer-text text-center">
                        <a href="index.html"><img src="{{ asset('/statics/site/images/flogo.png') }}" alt=""
                                class="img-fluid"></a>
                        <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion styles
                            from independent creatives around the world.</p>
                        <div class="social">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="{{ conf('instagram_url') }}" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i
                                    class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                                    class="fa fa-pinterest"></i></a>
                        </div>

                        <hr class="invis">

                        <div class="newsletter-widget text-center">
                            <form class="form-inline" method="post" action="{{ route('site.newsletters.subscribe') }}">
                                @csrf
                                <input type="email" class="form-control" name="email"
                                    placeholder="Enter your email address" required>
                                <button type="submit" class="btn btn-primary">Subscribe <i
                                        class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div><!-- end newsletter -->
                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Semicolon. : <a href="http://html.design">terms</a>. use Cloapedia theme.
                </div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->
