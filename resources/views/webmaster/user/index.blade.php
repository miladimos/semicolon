@extends("webmaster.layouts.master")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-right ml-2">
                        <a href="#">Create New User</a>
                    </div>
                    <h5 class="header-title mb-4">Latest Users</h5>

                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Email Status</th>
                                <th scope="col">Article Count</th>
                                <th scope="col">Followings Count</th>
                                <th scope="col">Followers Count</th>
                                <th scope="col">Joined Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ ($users->currentpage()-1) * $users->perpage() + $loop->index + 1 }}</td>
                                        <td><a href="#">{{ $user->username }}</a></td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->email_verified_at != null)
                                                <div class="badge badge-soft-primary">Confirm</div>
                                            @else
                                                <div class="badge badge-soft-danger">UnConfirm</div>
                                            @endif
                                        </td>
                                        <td>{{ $user->articles()->count() ?? '' }}</td>
                                        <td>124</td>
                                        <td>124</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
{{--                        <ul class="pagination pagination-rounded justify-content-center mb-0">--}}
{{--                            <li class="page-item disabled">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    <i class="mdi mdi-chevron-left"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    <i class="mdi mdi-chevron-right"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
