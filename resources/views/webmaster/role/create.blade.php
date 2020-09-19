@extends("webmaster.layouts.master")

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#permissions').select2();
        });
    </script>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
{{--                <div class="card-body">--}}
{{--                    <h5 class="header-title mb-4 text-center">New Role</h5>--}}
{{--                    <div>--}}
{{--                        @include('webmaster.partials.errors')--}}
{{--                        @if(session('success'))--}}
{{--                            <span>{{ session()->get('success') }}</span>--}}
{{--                        @endif--}}
{{--                        <form action="{{ route('role.store') }}" method="post">--}}
{{--                            @csrf--}}
{{--                            <label for="role">Role Name:</label>--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="role">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <button class="btn btn-success" type="submit">Submit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="card-body">
                    <h4 class="header-title text-right">Create New Role</h4>
                    <p class="card-title-desc text-right    ">Create New Role with Permissions</p>
                    @include('webmaster.partials.errors')
                    @if(session('success'))
                        <span>{{ session()->get('success') }}</span>
                    @endif
                    <form class="needs-validation" novalidate="" action="{{ route('role.store') }}" method="post">
                        <div class="d-flex">
                            <div class="col-md-6 mb-3">
                                <label for="name">Role name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Role name" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fa_name">Fa Role name</label>
                                <input type="text" class="form-control" name="fa_name" id="fa_name" placeholder="Fa Role name" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Permissions</label>
                                <select class="custom-select" multiple="multiple" required="" name="permissions[]" id="permissions">
                                    <option value="">Open this select State</option>
                                    <option value="1">California</option>
                                    <option value="2">Nevada</option>
                                    <option value="3">Montana</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
