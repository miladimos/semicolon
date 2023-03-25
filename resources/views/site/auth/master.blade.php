@extends('site.layouts.master')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-envelope-o"></i> @yield('auth-title')</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">auth</a></li>
                    <li class="breadcrumb-item active"><a href="#">@yield('auth-title')</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="page-wrapper">
                    @yield('auth-content')
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
