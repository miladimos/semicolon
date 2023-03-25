<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Recent Articles</h2>
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
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Articles</h2>
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
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            @foreach ($categories as $item)
                                <li><a href="{{ route('site.categories.show', $item) }}">{{ $item->name }}
                                        <span>({{ $item->articles_count }})</span></a></li>
                            @endforeach
                        </ul>
                    </div><!-- end link-widget -->
                </div>
            </div>
        </div>

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="widget">
                    <div class="footer-text text-center">
                        <a href="index.html"><img src="{{ asset('/statics/site/images/flogo.png') }}" alt=""
                                class="img-fluid"></a>
                        <p>Semicolon is a minimal blogging system .</p>
                        <div class="social">
                            <a href="{{ conf('site_facebook') }}" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="{{ conf('site_twitter') }}" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="{{ conf('site_instagram') }}" data-toggle="tooltip" data-placement="bottom"
                                title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="{{ conf('site_email') }}" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i
                                    class="fa fa-google-plus"></i></a>
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Semicolon. : <a href="#">terms</a>. use Cloapedia theme.
                </div>
            </div>
        </div>
    </div>
</footer><!-- end footer -->
