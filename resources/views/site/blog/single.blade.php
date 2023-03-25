@extends('site.layouts.master')

@section('content')
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('site.articles.index') }}">Articles</a></li>
                                <li class="breadcrumb-item active"><a href="#">{{ $article->title }}</a></li>
                            </ol>

                            <span class="color-grey"><a href="{{ $article->category->url() }}"
                                    title="">{{ $article->category->name }}</a></span>

                            <h3>{{ $article->title }}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="#" title="">{{ $article->created_at }}</a></small>
                                <small><a href="{{ $article->author->url() }}" title="">by
                                        {{ $article->author->username }}</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i>
                                        {{ $article->view_count }}</a></small>
                            </div>

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-instagram"></i>
                                            <span class="down-mobile">Share on Instagram</span></a></li>
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="upload/blog_07.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="upload/blog_08.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="upload/blog_09.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>

                        <div class="blog-content">
                            <div class="pp">
                                <p>In lobortis pharetra mattis. Morbi nec nibh iaculis, <a href="#">bibendum augue
                                        a</a>, ultrices nulla. Nunc velit ante, lacinia id tincidunt eget, faucibus nec
                                    nisl. In mauris purus, bibendum et gravida dignissim, venenatis commodo lacus. Duis
                                    consectetur quis nisi nec accumsan. Pellentesque enim velit, ut tempor turpis. Mauris
                                    felis neque, egestas in lobortis et,iaculis at nunc ac, rhoncus sagittis ipsum. </p>

                                <h3><strong>Maecenas non convallis quam, eu sodales justo. Pellentesque quis lectus elit.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></h3>

                                <p>Donec nec metus sed leo sollicitudin ornare sed consequat neque. Aliquam iaculis neque
                                    quis dui venenatis, eget posuere felis viverra. Ut sit amet feugiat elit, nec elementum
                                    velit. Sed eu nisl convallis, efficitur turpis eu, euismod nunc. Proin neque enim,
                                    malesuada non lobortis nec, facilisis et lectus. Ie consectetur. Nam eget neque ac ex
                                    fringilla dignissim eu ac est. Nunc et nisl vel odio posuere. </p>

                                <p>Vivamus non condimentum orci. Pellentesque venenatis nibh sit amet est vehicula lobortis.
                                    Cras eget aliquet eros. Nunc lectus elit, suscipit at nunc sed, finibus imperdiet ipsum.
                                    Maecenas dapibus neque sodales nulla finibus volutpat. Integer pulvinar massa vitae
                                    ultrices posuere. Proin ut tempor turpis. Mauris felis neque, egestas in lobortis et,
                                    sodales non ante. Ut vestibulum libero quis luctus tempus. Nullam eget dignissim massa.
                                    Vivamus id condimentum orci. Nunc ac sem urna. Aliquam et hendrerit nisl massa nunc.
                                </p>

                            </div><!-- end pp -->

                            <img src="upload/blog_11.jpg" alt="" class="img-fluid img-fullwidth">

                            <div class="pp">
                                <h3><strong>Nam non velit est. Sed lobortis arcu vitae nunc molestie consectetur. Nam eget
                                        neque ac ex fringilla dignissim eu ac est. Nunc et nisl vel odio posuere. </strong>
                                </h3>

                                <p>Vivamus non condimentum orci. Pellentesque venenatis nibh sit amet est vehicula lobortis.
                                    Cras eget aliquet eros. Nunc lectus elit, suscipit at nunc sed, finibus imperdiet ipsum.
                                    Maecenas dapibus neque sodales nulla finibus volutpat. Integer pulvinar massa vitae
                                    ultrices posuere. Proin ut tempor turpis. Mauris felis neque, egestas in lobortis et,
                                    sodales non ante. Ut vestibulum libero quis luctus tempus. Nullam eget dignissim massa.
                                    Vivamus id condimentum orci. Nunc ac sem urna. Aliquam et hendrerit nisl massa nunc.
                                </p>

                                <p>Morbi pharetra porta consequat. Aenean et diam sapien. <a href="#">Interdum et
                                        malesuada</a> fames ac ante ipsum primis in faucibus. Pellentesque dictum ligula
                                    iaculis, feugiat metus eu, sollicitudin ex. Quisque eu ullamcorper ligula. In vel ex ac
                                    purus finibus viverra. Maecenas pretium lobortis turpis. Fusce lacinia nisi in tortor
                                    massa nunc.</p>

                                <ul class="check">
                                    <li>Integer sit amet odio ac lectus imperdiet elementum.</li>
                                    <li>Praesent vitae lacus sed lacus ullamcorper mollis.</li>
                                    <li>Donec vitae metus ac felis vulputate tincidunt non et ex.</li>
                                    <li>In dapibus sapien at viverra venenatis.</li>
                                    <li>Pellentesque mollis velit id maximus finibus.</li>
                                </ul>

                                <p>Proin ultricies nulla consectetur, sollicitudin dolor at, sollicitudin mauris. Maecenas
                                    at nunc nunc. Ut nulla felis, tincidunt et porttitor at, rutrum in dolor. Aenean id
                                    tincidunt ligula. Donec vitae placerat odio. Mauris accumsan nibh ut nunc maximus, ac
                                    auctor elit vehicula. Cras leo sem, vehicula a ultricies ac, condimentum vitae lectus.
                                    Sed ut eros euismod, luctus nisl eu, congue odio. </p>

                                <p><img src="upload/blog_01.jpg" class="float-left" width="340"
                                        alt="">Suspendisse ultrices placerat dolor sed efficitur. Morbi in laoreet
                                    diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                    turpis egestas. Mauris ut massa id lectus laoreet porta non in metus. Donec nibh justo,
                                    tincidunt non justo ut, tincidunt malesuada turpis. Cras pellentesque sollicitudin ex
                                    eget pharetra.</p>

                                <h3><strong>Nam non velit est. Sed lobortis arcu vitae nunc molestie consectetur. Nam eget
                                        neque ac ex fringilla dignissim eu ac est. Nunc et nisl vel odio posuere. </strong>
                                </h3>


                                <p>Aliquam eget maximus odio. Aliquam varius nisl ut leo fermentum, id fringilla magna
                                    tempus. Curabitur quis bibendum lorem, ut suscipit tellus. Morbi id dictum justo, et
                                    massa nunc. Mauris laoreet, neque et varius malesuada, justo neque consequat dolor, sit
                                    amet semper dui ligula commodo enim. Duis mauris magna, euismod in ante sed, laoreet
                                    faucibus elit. Nam euismod vulputate lorem, nec tincidunt lacus volutpat sit amet. In
                                    libero eros, dignissim vitae quam sed, maximus consectetur justo. Donec id orci eget
                                    odio convallis pellentesque. Quisque urna cras amet.Vivamus non condimentum orci.
                                    Pellentesque venenatis nibh sit amet est vehicula lobortis. Cras eget aliquet eros. Nunc
                                    lectus elit, suscipit at nunc sed, finibus imperdiet ipsum. Maecenas dapibus neque
                                    sodales nulla finibus volutpat. Integer pulvinar massa vitae ultrices posuere. Proin ut
                                    tempor turpis. Mauris felis neque, egestas in lobortis et, sodales non ante. Ut
                                    vestibulum libero quis luctus tempus. Nullam eget dignissim massa. Vivamus id
                                    condimentum orci. Nunc ac sem urna. Aliquam et hendrerit nisl massa nunc. </p>

                                <p>Vivamus non condimentum orci. Pellentesque venenatis nibh sit amet est vehicula lobortis.
                                    Cras eget aliquet eros. Nunc lectus elit, suscipit at nunc sed, finibus imperdiet ipsum.
                                    Maecenas dapibus neque sodales nulla finibus volutpat. Integer pulvinar massa vitae
                                    ultrices posuere. Proin ut tempor turpis. Mauris felis neque, egestas in lobortis et,
                                    sodales non ante. Ut vestibulum libero quis luctus tempus. Nullam eget dignissim massa.
                                    Vivamus id condimentum orci. Nunc ac sem urna. Aliquam et hendrerit nisl massa nunc.
                                </p>
                            </div><!-- end pp -->
                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                @foreach ($article->tags as $item)
                                    <small><a href="#" title="">{{ $item->name }}</a></small>
                                @endforeach
                            </div>

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="invis1">

                        <div class="custombox prevnextpost clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="single.html"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between text-right">
                                                    <img src="upload/blog_square_02.jpg" alt=""
                                                        class="img-fluid float-right">
                                                    <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                    <small>Prev Post</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="single.html"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="upload/blog_square_03.jpg" alt=""
                                                        class="img-fluid float-left">
                                                    <h5 class="mb-1">Let's make an introduction to the glorious world of
                                                        history</h5>
                                                    <small>Next Post</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="{{ $article->author->thumbnail() }}" alt="" class="img-fluid rounded-circle">
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#">{{ $article->author->username }}</a></h4>
                                    <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet,
                                        consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus
                                        odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Cloapedia!</p>

                                    <div class="topsocial">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Youtube"><i class="fa fa-youtube"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Website"><i class="fa fa-link"></i></a>
                                    </div><!-- end social -->

                                </div>
                            </div>
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">You may also like</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="single.html" title="">
                                                <img src="upload/menu_06.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <h4><a href="single.html" title="">We are guests of ABC Design
                                                    Studio</a></h4>
                                            <small><a href="blog-category-01.html" title="">Trends</a></small>
                                            <small><a href="blog-category-01.html" title="">21 July,
                                                    2017</a></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="single.html" title="">
                                                <img src="upload/menu_07.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <h4><a href="single.html" title="">Nostalgia at work with family</a>
                                            </h4>
                                            <small><a href="blog-category-01.html" title="">News</a></small>
                                            <small><a href="blog-category-01.html" title="">20 July,
                                                    2017</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">3 Comments</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="upload/author.jpg" alt="" class="rounded-circle">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">Amanda Martines <small>5 days
                                                        ago</small></h4>
                                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch
                                                    freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit
                                                    kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                                                    Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone
                                                    Kickstarter, drinking vinegar jean.</p>
                                                <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="upload/author_01.jpg" alt="" class="rounded-circle">
                                            </a>
                                            <div class="media-body">

                                                <h4 class="media-heading user_name">Baltej Singh <small>5 days ago</small>
                                                </h4>

                                                <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo
                                                    biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko
                                                    tempor duis single-origin coffee. Banksy, elit small.</p>

                                                <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                        </div>
                                        <div class="media last-child">
                                            <a class="media-left" href="#">
                                                <img src="upload/author_02.jpg" alt="" class="rounded-circle">
                                            </a>
                                            <div class="media-body">

                                                <h4 class="media-heading user_name">Marie Johnson <small>5 days ago</small>
                                                </h4>
                                                <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan
                                                    sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie
                                                    consequat flexitarian four loko tempor duis single-origin coffee.
                                                    Banksy, elit small.</p>

                                                <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">Leave a Reply</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper">
                                        <input type="text" class="form-control" placeholder="Your name">
                                        <input type="text" class="form-control" placeholder="Email address">
                                        <input type="text" class="form-control" placeholder="Website">
                                        <textarea class="form-control" placeholder="Your comment"></textarea>
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Search</h2>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search on the site">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Recent Articles</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_01.jpg" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_02.jpg" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="upload/blog_square_03.jpg" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Instagram Feed</h2>
                            <div class="instagram-wrapper clearfix">
                                <a class="" href="#"><img src="upload/insta_01.jpeg" alt=""
                                        class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_02.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_03.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_04.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_05.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_06.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_07.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_08.jpeg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/insta_09.jpeg" alt="" class="img-fluid"></a>
                            </div><!-- end Instagram wrapper -->
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Fahsion <span>(21)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(15)</span></a></li>
                                    <li><a href="#">Art & Design <span>(31)</span></a></li>
                                    <li><a href="#">Health Beauty <span>(22)</span></a></li>
                                    <li><a href="#">Clothing <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Food & Drink <span>(87)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div>

                    </div><!-- end sidebar -->
                </div>
            </div>
        </div>
    </section>
@endsection
