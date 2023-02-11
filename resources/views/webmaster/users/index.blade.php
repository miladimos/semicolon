@extends('webmaster.layouts.master')

@section('page-title')
    Users
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Article Count</th>
                                <th>Role</th>
                                <th>Registered At</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <span class="avatar me-2" style="background-image: url({{ asset('/statics/webmaster/static/avatars/000m.jpg') }})"></span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">Thatcher Keel</div>
                                            <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Title">
                                    <div>VP Sales</div>
                                    <div class="text-muted">Business Development</div>
                                </td>
                                <td class="text-muted" data-label="Role">
                                    User
                                </td>
                                <td class="text-muted" data-label="Role">
                                    User
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="#" class="btn">
                                            Edit
                                        </a>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
