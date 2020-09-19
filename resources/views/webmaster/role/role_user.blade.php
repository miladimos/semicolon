@extends("webmaster.layouts.master")

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#roles').select2();
            $('#user_id').select2();
        });
    </script>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-right">Asign Roles to User</h4>
                    @include('webmaster.partials.errors')
                    @if(session('success'))
                        <span>{{ session()->get('success') }}</span>
                    @endif
                    <form class="needs-validation" novalidate="" action="{{ route('roles.user.store') }}" method="post">

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>User</label>
                                <select class="custom-select" required="" name="user_id" id="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Roles</label>
                                <select class="custom-select" multiple="multiple" required="" name="roles[]" id="roles">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name [$role->fa_name] }}</option>
                                    @endforeach
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
