@extends("admin.layouts.master")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-right ml-2">
                        <a href="#">Create New Article</a>
                    </div>
                    <h5 class="header-title mb-4">Latest Articles</h5>

                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Article ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">User</th>
                                <th scope="col">status</th>
                                <th scope="col">View Count</th>
                                <th scope="col">Comment Count</th>
                                <th scope="col">Like Count</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="#"># XO1345</a>
                                </th>
                                <td>Danny Johnson</td>
                                <td>Danny-Johnson</td>
                                <td>26 Jan</td>
                                <td>
                                    <div class="badge badge-soft-primary">Confirm</div>
                                </td>
                                <td>124</td>
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
                            <tr>
                                <th scope="row">
                                    <a href="#"># 15</a>
                                </th>
                                <td>Danny Johnson</td>
                                <td>User</td>
                                <td>
                                    <div class="badge badge-soft-primary">Confirm</div>
                                </td>
                                <td>124</td>
                                <td>124</td>
                                <td>124</td>
                                <td>26 Jan</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-warning btn-sm border-left-0 border-right-0" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="mdi mdi-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="mdi mdi-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="mdi mdi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
