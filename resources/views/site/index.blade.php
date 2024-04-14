@extends('site.layouts.master')

@section('content')
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                <div class="left-side">
                    <div class="masonry-box post-media">
                        <img src="{{ asset('/statics/site/upload/blog_masonry_01.jpg') }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-aqua"><a href="blog-category-01.html"
                                            title="">Lifestyle</a></span>
                                    <h4><a href="single.html" title="">The golden rules you need to know for a positive
                                            life</a></h4>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div>
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end left-side -->

                <div class="center-side">
                    <div class="masonry-box post-media">
                        <img src="{{ asset('/statics/site/upload/blog_masonry_02.jpg') }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                                    <h4><a href="single.html" title="">5 places you should see</a></h4>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div>
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->

                    <div class="masonry-box small-box post-media">
                        <img src="{{ asset('/statics/site/upload/blog_masonry_03.jpg') }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                                    <h4><a href="single.html" title="">Separate your place with exotic hotels</a></h4>
                                </div>
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->

                    <div class="masonry-box small-box post-media">
                        <img src="{{ asset('/statics/site/upload/blog_masonry_04.jpg') }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                                    <h4><a href="single.html" title="">What you need to know for child health</a></h4>
                                </div>
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end left-side -->

                <div class="right-side hidden-md-down">
                    <div class="masonry-box post-media">
                        <img src="{{ asset('/statics/site/upload/blog_masonry_05.jpg') }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-aqua"><a href="blog-category-01.html"
                                            title="">Lifestyle</a></span>
                                    <h4><a href="single.html" title="">The rules you need to know for a happy union</a></h4>
                                    <small><a href="single.html" title="">03 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                </div>
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end right-side -->
            </div><!-- end masonry -->
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_05.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-meta big-meta">
                                    <h4><a href="single.html" title="">The golden rules you need to know for a positive
                                            life</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="blog-category-01.html" title="">Lifestyle</a></small>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div>
                            </div>

                            <hr class="invis">

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-pink"><a href="blog-category-01.html" title="">Fashion</a></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_01.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <h4><a href="single.html" title="">What is your favorite leather jacket color</a></h4>
                                    <small><a href="blog-category-01.html" title="">Fashion</a></small>
                                    <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                </div>
                            </div>

                            <hr class="invis">

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_03.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <h4><a href="single.html" title="">This year's fashionable long beard</a></h4>
                                    <small><a href="blog-category-01.html" title="">Fashion</a>, <a
                                            href="blog-category-01.html" title="">Man</a></small>
                                    <small><a href="blog-category-01.html" title="">08 July, 2017</a></small>
                                </div>
                            </div>

                            <hr class="invis">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="{{ asset('/statics/site/upload/banner_01.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3>
                        </div>

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_01.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">5 Beautiful buildings you need to visit without dying</a>
                                </h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Travel</a></small>
                                <small><a href="single.html" title="">21 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Boby</a></small>
                            </div>
                        </div>

                        <hr class="invis">
                    </div>

                    <hr class="invis">

                </div>

                <div class="col-lg-3">
                    <div class="section-title">
                        <h3 class="color-yellow"><a href="blog-category-01.html" title="">Vlogs</a></h3>
                    </div>

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_10.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div>
                            </a>
                        </div>
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                            <small><a href="blog-category-01.html" title="">Videos</a></small>
                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                        </div>
                    </div>

                    <hr class="invis">
                </div>

            </div>

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="{{ asset('/statics/site/upload/banner_02.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
