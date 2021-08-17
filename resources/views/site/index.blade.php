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
                                    <span class="bg-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span>
                                    <h4><a href="single.html" title="">The golden rules you need to know for a positive
                                            life</a></h4>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
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
                                </div><!-- end meta -->
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
                                </div><!-- end meta -->
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
                                </div><!-- end meta -->
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
                                    <span class="bg-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span>
                                    <h4><a href="single.html" title="">The rules you need to know for a happy union</a></h4>
                                    <small><a href="single.html" title="">03 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                </div><!-- end meta -->
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
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_05.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta big-meta">
                                    <h4><a href="single.html" title="">The golden rules you need to know for a positive
                                            life</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="blog-category-01.html" title="">Lifestyle</a></small>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_06.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta big-meta">
                                    <h4><a href="single.html" title="">I have a desert visit this summer</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                        maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="blog-category-01.html" title="">Lifestyle</a></small>
                                    <small><a href="single.html" title="">22 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Martines</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-pink"><a href="blog-category-01.html" title="">Fashion</a></h3>
                    </div><!-- end title -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_01.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="single.html" title="">What is your favorite leather jacket color</a></h4>
                                    <small><a href="blog-category-01.html" title="">Fashion</a></small>
                                    <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_02.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="single.html" title="">Is summer, have you bought a cane</a></h4>
                                    <small><a href="blog-category-01.html" title="">Fashion</a></small>
                                    <small><a href="blog-category-01.html" title="">11 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_03.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="single.html" title="">This year's fashionable long beard</a></h4>
                                    <small><a href="blog-category-01.html" title="">Fashion</a>, <a
                                            href="blog-category-01.html" title="">Man</a></small>
                                    <small><a href="blog-category-01.html" title="">08 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_04.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="single.html" title="">How to be more cool with clothing</a></h4>
                                    <small><a href="blog-category-01.html" title="">Fashion</a>, <a
                                            href="blog-category-01.html" title="">Style</a></small>
                                    <small><a href="blog-category-01.html" title="">04 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="{{ asset('/statics/site/upload/banner_01.jpg') }}" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3>
                        </div><!-- end title -->

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_01.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">5 Beautiful buildings you need to visit without dying</a>
                                </h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Travel</a></small>
                                <small><a href="single.html" title="">21 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Boby</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_02.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">Let's make an introduction to the glorious world of
                                        history</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Travel</a></small>
                                <small><a href="single.html" title="">20 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Samanta</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_03.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">Did you see the most beautiful sea in the world?</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Travel</a></small>
                                <small><a href="single.html" title="">19 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Jackie</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end blog-list -->

                    <hr class="invis">

                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-red"><a href="blog-category-01.html" title="">Food</a></h3>
                        </div><!-- end title -->

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_05.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">Banana-chip chocolate cake recipe</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">11 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_06.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">10 practical ways to choose organic vegetables</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">10 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset('/statics/site/upload/blog_square_07.jpg') }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">We are making homemade ravioli</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus
                                    ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">09 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end blog-list -->
                </div><!-- end col -->

                <div class="col-lg-3">
                    <div class="section-title">
                        <h3 class="color-yellow"><a href="blog-category-01.html" title="">Vlogs</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_10.jpg') }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                            <small><a href="blog-category-01.html" title="">Videos</a></small>
                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_11.jpg') }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Nostalgia at work</a></h4>
                            <small><a href="blog-category-01.html" title="">Videos</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_12.jpg') }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">How to become a good vlogger</a></h4>
                            <small><a href="blog-category-01.html" title="">Beauty</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="section-title">
                        <h3 class="color-grey"><a href="blog-category-01.html" title="">Health</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_07.jpg') }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Opened the doors of the Istanbul spa center</a></h4>
                            <small><a href="blog-category-01.html" title="">Spa</a></small>
                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_08.jpg') }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">2017 trends in health tourism</a></h4>
                            <small><a href="blog-category-01.html" title="">Health</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ asset('/statics/site/upload/blog_09.jpg') }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Experience the effects of miraculous stones</a></h4>
                            <small><a href="blog-category-01.html" title="">Beauty</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="{{ asset('/statics/site/upload/banner_02.jpg') }}" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
