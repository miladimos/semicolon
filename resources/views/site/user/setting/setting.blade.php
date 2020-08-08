@extends('site.user.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img class="img-thumbnail rounded-circle" style="width: 120px; height: 120px;" src="{{ asset('/images/default.png') }}" alt="{{ $user->username }}">
                        </div>
                    </div>
                    <h3 class="my-4">User Info</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="form-group col-md-6">
                            <label for="inputState">Gender</label>
                            <select id="inputState" class="form-control">
                                <option >Male</option>
                                <option >I don't like to say</option>
                                <option >Male</option>
                                <option >Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bio">Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <h3 class="my-4">Social Networks</h3>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Your Site</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Instagram</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Youtube</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Tweeter</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Facebook</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Telegram</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Linkedin</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Github</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Gitlab</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Atbox</h5>
                            <input type="text" class="form-control w-50" id="inputCity">
                        </div>
                    </div>

{{--                    <div class="form-row">--}}
{{--                        <div class="form-group col-md-4">--}}
{{--                            <label for="inputState">State</label>--}}
{{--                            <select id="inputState" class="form-control">--}}
{{--                                <option selected>Choose...</option>--}}
{{--                                <option>...</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" id="gridCheck">--}}
{{--                            <label class="form-check-label" for="gridCheck">--}}
{{--                                Check me out--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
