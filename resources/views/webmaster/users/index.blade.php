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
                                <th class="w-1">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                                <tr>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <span class="avatar me-2"
                                                style="background-image: url({{ asset('/statics/webmaster/static/avatars/000m.jpg') }})"></span>
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{ $item->username }}</div>
                                                <div class="text-muted"><a href="#"
                                                        class="text-reset">{{ $item->email }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Title">
                                        <div>0</div>
                                        {{-- <div class="text-muted">Business Development</div> --}}
                                    </td>
                                    <td class="text-muted" data-label="Role">
                                        User
                                    </td>
                                    <td class="text-muted" data-label="Role">
                                        {{ $item->created_at }}
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            {{-- <a href="#" class="btn">
                                                Edit
                                            </a> --}}
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Show
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
