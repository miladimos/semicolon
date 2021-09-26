@extends('site.auth.master')

@section('auth-title')
    @lang('messages.login')
@endsection

@section('auth-content')


    <div class="row">
        <div class="col-lg-7 mx-auto">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('auth.login') }}" method="post">
                @csrf
                <h4>@lang('messages.login')</h4>
                <input type="text" name="username" required class="form-control" placeholder="Email / Username">
                <input type="password" name="password" required class="form-control" placeholder="Password">
                <div class="mb-3">
                    <a href="{{ route('auth.register.form') }}">Already you does not have an account? </a>
                </div>
                <button type="submit" class="btn btn-primary">
                    @lang('messages.login') <i class="fa fa-envelope-open-o"></i>
                </button>
            </form>
        </div>
    </div>

@endsection
