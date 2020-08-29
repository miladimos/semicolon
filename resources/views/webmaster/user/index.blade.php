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
                                <th scope="col">status</th>
                                <th scope="col">Article Count</th>
                                <th scope="col">Followings Count</th>
                                <th scope="col">Followers Count</th>
                                <th scope="col">Joined Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="#"># XO1345</a>
                                </th>
                                <td>Username</td>
                                <td>admin@gmail.com</td>
                                <td>
                                    <div class="badge badge-soft-primary">Confirm</div>
                                </td>
                                <td>124</td>
                                <td>124</td>
                                <td>124</td>
                                <td>26 Jan</td>
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
