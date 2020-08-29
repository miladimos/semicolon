@extends("webmaster.layouts.master")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title mb-4 text-center">New Permission</h5>
                    <div>
                        @include('webmaster.partials.errors')
                        @if(session('success'))
                            <span>{{ session()->get('success') }}</span>
                        @endif
                        <form action="{{ route('permission.store') }}" method="post">
                            @csrf
                            <label for="permission">Permission Name:</label>
                            <div class="d-flex">
                                <div class="col-md-6"><input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="permission"></div>
                                <div class="col-md-6"><button class="btn btn-success" type="submit">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="float-right ml-2">
{{--                        <a href="#">Create New Category</a>--}}

                    </div>
                    <h5 class="header-title mb-4">Latest Permissions</h5>

                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Permission ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Date</th>
                                <th scope="col">status</th>
                                <th scope="col">Articles Count</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <th scope="row">
                                            <a href="#"># {{ $loop->iteration }}</a>
                                        </th>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>{{ $permission->created_at }}</td>
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
                                @endforeach
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
