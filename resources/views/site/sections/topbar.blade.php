<div class="collapse top-search" id="searchBar">
    <div class="card card-block">
        <div class="newsletter-widget text-center">
            <form class="form-inline" method="get" action="{{ route('site.search') }}">
                <input type="text" name="q" class="form-control" placeholder="What you are looking for?">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div>Articles
    </div>
</div><!-- end top-search -->

<div class="topbar-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                <div class="topsocial">
                    <a href="{{ conf('site_facebook') }}" data-toggle="tooltip" data-placement="bottom"
                        title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="{{ conf('site_youtube') }}" data-toggle="tooltip" data-placement="bottom"
                        title="Youtube"><i class="fa fa-youtube"></i></a>
                    <a href="{{ conf('site_twitter') }}" data-toggle="tooltip" data-placement="bottom"
                        title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="{{ conf('site_instagram') }}" data-toggle="tooltip" data-placement="bottom"
                        title="Instagram"><i class="fa fa-instagram"></i></a>
                    <a href="{{ conf('site_email') }}" data-toggle="tooltip" data-placement="bottom" title="Google+"><i
                            class="fa fa-google-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-4 hidden-md-down">
                <div class="topmenu text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('site.articles.index', ['s' => 'p']) }}"><i class="fa fa-star"></i>
                                Papoulars</a>
                        </li>

                        @auth

                            <li class="list-inline-item">
                                <a href="{{ route('account.index') }}"><i class="fa fa-bolt"></i>
                                    Account</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('auth.logout') }}"><i class="fa fa-bolt"></i>
                                    Logout</a>
                            </li>
                        @else
                            <li class="list-inline-item">
                                <a href="{{ route('auth.register.form') }}"><i class="fa fa-user-circle-o"></i>
                                    Join us</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('auth.login.form') }}"><i class="fa fa-user-circle-o"></i>
                                    Login</a>
                            </li>
                        @endauth

                    </ul><!-- end ul -->
                </div><!-- end topmenu -->
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="topsearch text-right">
                    <a data-toggle="collapse" href="#searchBar" aria-expanded="false" aria-controls="searchBar"><i
                            class="fa fa-search"></i> Search</a>
                </div><!-- end search -->
            </div>

        </div>
    </div>
</div><!-- end topbar -->

<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="{{ route('site.index') }}"><img src="{{ asset('/statics/site/images/logo.png') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu"
                aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ route('site.index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <li>
                                <div class="mega-menu-content clearfix">
                                    <div class="tab">
                                        <button class="tablinks active"
                                            onclick="openCategory(event, 'cat01')">Beauty</button>
                                    </div>

                                    <div class="tab-details clearfix">
                                        <div id="cat01" class="tabcontent active">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="blog-box">
                                                        <div class="post-media">
                                                            <a href="single.html" title="">
                                                                <img src="{{ asset('/statics/site/upload/menu_01.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                                <div class="hovereffect"> </div>
                                                                <span class="menucat">Spa</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-meta">
                                                            <h4><a href="single.html" title="">Top 10+ care
                                                                    advice for
                                                                    your toenails</a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="blog-box">
                                                        <div class="post-media">
                                                            <a href="single.html" title="">
                                                                <img src="{{ asset('/statics/site/upload/menu_02.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                                <div class="hovereffect">
                                                                </div>
                                                                <span class="menucat">Beauty</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-meta">
                                                            <h4><a href="single.html" title="">The secret of
                                                                    your beauty
                                                                    is handmade soap</a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="blog-box">
                                                        <div class="post-media">
                                                            <a href="single.html" title="">
                                                                <img src="{{ asset('/statics/site/upload/menu_03.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                                <div class="hovereffect">
                                                                </div>
                                                                <span class="menucat">Beauty</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-meta">
                                                            <h4><a href="single.html" title="">Benefits of face
                                                                    mask
                                                                    made from mud</a>
                                                                </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="blog-box">
                                                        <div class="post-media">
                                                            <a href="single.html" title="">
                                                                <img src="{{ asset('/statics/site/upload/menu_04.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                                <div class="hovereffect">
                                                                </div>
                                                                <span class="menucat">Spa</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-meta">
                                                            <h4><a href="single.html" title="">Relax with the
                                                                    unique
                                                                    warmth of candle flavor</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown has-submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            {{-- <li><a class="dropdown-item" href="single.html">Single Blog <span
                                        class="hidden-md-down hidden-sm-down hidden-xs-down"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="single.html">Single Default</a></li>
                                    <li><a class="dropdown-item" href="single-fullwidth.html">Single Fullwidth</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li><a class="dropdown-item" href="{{ route('site.articles.index') }}">Articles</a></li>
                            <li><a class="dropdown-item" href="{{ route('site.authors.index') }}">Authors</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="blog-category-01.html">Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-yellow-hover" href="blog-category-05.html"><i
                                class="fa fa-play-circle-o"></i> Vlogs</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
