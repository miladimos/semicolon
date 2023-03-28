@extends('site.layouts.master')

@section('content')
    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-user"></i> Author by {{ $user->username }} <small class="hidden-xs-down hidden-sm-down"></small></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Articles</a></li>
                        <li class="breadcrumb-item active">Authored by {{ $user->username }}</li>
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
                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#">{{ $user->username }}</a></h4>
                                    <p>{{ $user->bio }}</p>

                                    <div class="topsocial">
                                        {{-- @if ()

                                        @elseif ()

                                        @endif --}}
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <hr class="invis1">


                        <div class="blog-custom-build">
                            @forelse ($articles as $item)
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{ $item->url() }}" title="">
                                            <img src="upload/blog_custom_01.jpg" alt="{{ $item->title }}" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="blog-meta big-meta text-center">

                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="{{ $item->url() }}" title="{{ $item->url() }}">{{ $item->title }}</a></h4>
                                        <p>{{ $item->description }}</p>
                                        {{-- <small><a href="{{ $item->category->url() }}" title="">{{ $item->category->name }}</a></small> --}}
                                        <small><a href="#" title="">{{ $item->created_at }}</a></small>
                                        <small><a href="{{ $user->url() }}" title="">by {{ $user->username }}</a></small>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i>{{ $item->view_count }}</a></small>
                                    </div>
                                </div>

                                <hr class="invis">
                            @empty

                            @endforelse
                        </div>
                    </div>

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
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
                                    <input type="text" class="form-control" placeholder="Search on the site" name="q">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Recent Articles</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    {{-- <a href="{{ $item->url() }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a> --}}

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
                                <a class="" href="#"><img src="upload/insta_01.jpeg" alt="" class="img-fluid"></a>
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
                                    <li>
                                        <a href="{{ route('site.categories.show', $item) }}">{{ $item->name }}
                                            <span>({{ $item->articles_count }})</span>
                                        </a>
                                    </li>
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
