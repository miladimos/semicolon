@extends('site.user.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form action="{{ route('user.setting.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img class="img-thumbnail rounded-circle" style="width: 120px; height: 120px;" src="{{ asset('/images/default.png') }}" alt="{{ $user->username }}">
                        </div>
                    </div>
                    <h3 class="my-4">User Info</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" class="form-control" id="fname" value="{{ auth()->user()->profile->fname ?? '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" value="{{ auth()->user()->profile->lname ?? '' }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" name="bio" id="bio" cols="30" rows="4">{{ auth()->user()->profile->bio ?? '' }}</textarea>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="0" @if(auth()->user()->profile->gender == 0) selected @endif>I don't like to say</option>
                                <option value="1" @if(auth()->user()->profile->gender == 1) selected @endif>Male</option>
                                <option value="2" @if(auth()->user()->profile->gender == 2) selected @endif>Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="number" id="age" min="8" max="100" name="age" class="form-control" value="{{ auth()->user()->profile->age ?? '' }}">
                        </div>
                    </div>
                    <hr>
                    <h3 class="my-4">Social Networks</h3>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Your Site</h5>
                            <input type="text" name="site" class="form-control w-50" id="site" value="{{ auth()->user()->profile->site ?? '' }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Instagram</h5>
                            <input type="text" class="form-control w-50" name="instagram" id="instagram" value="{{ auth()->user()->profile->instagram ?? '' }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Youtube</h5>
                            <input type="text" value="{{ auth()->user()->profile->youtube ?? '' }}" class="form-control w-50" name="youtube" id="youtube">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Tweeter</h5>
                            <input type="text" value="{{ auth()->user()->profile->tweeter ?? '' }}" class="form-control w-50" name="tweeter" id="tweeter">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Facebook</h5>
                            <input type="text" value="{{ auth()->user()->profile->facebook ?? '' }}" class="form-control w-50" name="facebook" id="facebook">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Telegram</h5>
                            <input type="text" value="{{ auth()->user()->profile->telegram ?? '' }}" class="form-control w-50" name="telegram" id="telegram">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Linkedin</h5>
                            <input type="text" value="{{ auth()->user()->profile->linkedin ?? '' }}" class="form-control w-50" name="linkedin" id="linkedin">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Github</h5>
                            <input type="text" value="{{ auth()->user()->profile->github ?? '' }}" class="form-control w-50" name="github" id="github">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Gitlab</h5>
                            <input type="text" value="{{ auth()->user()->profile->gitlab ?? '' }}" class="form-control w-50" name="gitlab" id="gitlab">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                            <h5>Atbox</h5>
                            <input type="text" value="{{ auth()->user()->profile->atbox ?? '' }}" class="form-control w-50" name="atbox" id="atbox">
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
