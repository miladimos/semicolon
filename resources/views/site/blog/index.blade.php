@extends('site.layouts.master')

@section('content')
    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-shopping-bag bg-red"></i>
                        Articles
                        <small class="hidden-xs-down hidden-sm-down">
                            all of
                            articles.
                        </small>
                    </h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>

                        <li class="breadcrumb-item active"><a href="#">Articles</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="clearfix blog-list">

                            @forelse ($articles as $item)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ $item->url() }}" title="">
                                                <img src="{{ $item->thumbnail }}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{ $item->url() }}" title="">{{ $item->title }}</p>
                                                {{-- <small><a href="{{ $item->category->url() }}" title="">{{ $item->category->name }}</a></small> --}}
                                                <small><a href="#" title="">{{ $item->created_at }}</a></small>
                                                <small><a href="{{ $item->author->url() }}"
                                                        title="">{{ $item->author->username }}</a></small>
                                    </div>
                                </div>

                                <hr class="invis">
                            @empty
                            @endforelse

                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="clearfix banner-spot">
                                        <div class="banner-img">
                                            <img src="upload/banner_02.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Prev</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Search</h2>
                            <form class="form-inline search-form" method="get" action="{{ route('site.search') }}">
                                <div class="form-group">
                                    <input type="text" name="q" class="form-control"
                                        placeholder="Search on the site">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        @if ($popularArticles->count() > 0)
                            <div class="widget">
                                <h2 class="widget-title">Papoular Articles</h2>
                                <div class="blog-list-widget">
                                    @foreach ($popularArticles as $item)
                                        <div class="list-group">
                                            <a href="single.html"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="upload/blog_square_01.jpg" alt=""
                                                        class="float-left img-fluid">
                                                    <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                    <small>12 Jan, 2016</small>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="clearfix banner-spot">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Instagram Feed</h2>
                            <div class="clearfix instagram-wrapper">
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
                            </div>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    @foreach ($categories as $item)
                                        <li><a href="{{ route('site.categories.show', $item) }}">{{ $item->name }}
                                                <span>({{ $item->articles_count }})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
