@extends('site.account.layout')

@section('inner')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('auth.register') }}" method="post">
                @csrf
                <h4>Create New Article</h4>
                <input type="text" name="title" id="title" required class="form-control" placeholder="Title">
                <input type="email" name="email" id="email" required class="form-control"
                    placeholder="Email address">
                <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control"
                    placeholder="Password Confirmation">
                <div class="mb-3">
                    <a href="{{ route('auth.login.form') }}">Already you have an account? </a>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit <i class="fa fa-envelope-open-o"></i>
                </button>
            </form>
        </div>
    </div>
@endsection
