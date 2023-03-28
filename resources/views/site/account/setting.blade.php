@extends('site.account.layout')

@section('inner')
    <div class="row mb-5">
        <div class="col-lg-7 mx-auto">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('auth.register') }}" method="post">
                @csrf
                <h4>Account Setting</h4>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="fname" id="fname" required class="form-control"
                            placeholder="First name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="lname" id="lname" required class="form-control"
                            placeholder="Lastname">
                    </div>
                </div>
                <input type="email" name="email" id="email" required class="form-control"
                    placeholder="Email address">

                <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control"
                    placeholder="Password Confirmation">

                <button type="submit" class="btn btn-primary">
                    Update <i class="fa fa-envelope-open-o"></i>
                </button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-7 mx-auto mb-5">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('auth.register') }}" method="post">
                @csrf
                <h4>Notifications</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Default checkbox
                    </label>
                  </div>

                <button type="submit" class="btn btn-primary">
                    Update <i class="fa fa-envelope-open-o"></i>
                </button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-7 mx-auto mb-5">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('auth.register') }}" method="post">
                @csrf
                <h4>Passsword Change</h4>
                <input type="password" name="old_password" id="old_password" required class="form-control" placeholder="Password">
                <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control"
                    placeholder="Password Confirmation">

                <button type="submit" class="btn btn-primary">
                    Change <i class="fa fa-envelope-open-o"></i>
                </button>
            </form>
        </div>
    </div>
@endsection
