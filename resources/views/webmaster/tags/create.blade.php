@extends('webmaster.layouts.master')

@section('title')
    Create new User
@endsection

@section('page-title')
    Create new User
@endsection

@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create new User</h3>
            </div>
            <div class="card-body">
                @include('webmaster.partials.errors')
                <form method="post" action="{{ route('webmaster.users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="fname">Firstname</label>
                                <div>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Firstname"
                                        value="{{ old('fname') }}" required>
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="lname">Lastname</label>
                                <div>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Lastname"
                                        value="{{ old('lname') }}" required>
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="email">Email</label>
                                <div>
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                        required alue="{{ old('lname') }}">
                                    <small class="form-hint">
                                        Your email must be unique.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="password">Password</label>
                                <div>
                                    <input type="password" class="form-control" placeholder="Password" id="password"
                                        name="password" required>
                                    <small class="form-hint">
                                        Your password must be 8-20 characters long, contain letters and numbers, and must
                                        not contain
                                        spaces, special characters, or emoji.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group mb-3 ">
                        <label class="form-label">Select</label>
                        <div>
                            <select class="form-select">
                                <option>Option 1</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="form-group mb-3">
                        {{-- <label class="form-label">Checkboxes</label> --}}
                        <div>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" checked name="is_active" id="is_active">
                                <span class="form-check-label">Is active (Email)</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin">
                                <span class="form-check-label">Is Admin User</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">@lang('messages.submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
