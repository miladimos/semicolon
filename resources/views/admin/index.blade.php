@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5>Welcome Back !</h5>
                            <p class="text-muted">Xoric Dashboard</p>

                            <div class="mt-4">
                                <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                            </div>
                        </div>

                        <div class="col-5 ml-auto">
                            <div>
                                <img src="{{asset("/images/admin/widget-img.png")}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-inline float-right">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm datepicker-here" data-range="true"  data-multiple-dates-separator=" - " data-language="en" placeholder="Select Date" />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="far fa-calendar font-size-12"></i></span>
                            </div>
                        </div>
                    </form>
                    <h5 class="header-title mb-4">Sales Report</h5>
                    <div id="yearly-sale-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-transparent p-3">
                    <h5 class="header-title mb-0">Sales Status</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media my-2">

                            <div class="media-body">
                                <p class="text-muted mb-2">Number of Sales</p>
                                <h5 class="mb-0">1,625</h5>
                            </div>
                            <div class="icons-lg ml-2 align-self-center">
                                <i class="uim uim-layer-group"></i>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-2">Sales Revenue </p>
                                <h5 class="mb-0">$ 42,235</h5>
                            </div>
                            <div class="icons-lg ml-2 align-self-center">
                                <i class="uim uim-analytics"></i>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-2">Average Price</p>
                                <h5 class="mb-0">$ 14.56</h5>
                            </div>
                            <div class="icons-lg ml-2 align-self-center">
                                <i class="uim uim-ruler"></i>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-2">Product Sold</p>
                                <h5 class="mb-0">8,235</h5>
                            </div>
                            <div class="icons-lg ml-2 align-self-center">
                                <i class="uim uim-box"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title mb-4">Social Source</h5>
                    <div id="radial-chart" class="apex-charts"></div>

                    <div class="text-center mt-3">
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <p class="text-muted"><i class="mdi mdi-circle text-primary mr-1"></i> Facebook</p>
                                    <h5>$ 1,625</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <p class="text-muted"><i class="mdi mdi-circle text-warning mr-1"></i> Twitter</p>
                                    <h5>$ 1,504</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="float-right ml-2">
                        <a href="#">View all</a>
                    </div>
                    <h5 class="header-title mb-4">Latest Transaction</h5>

                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">status</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="#"># XO1345</a>
                                </th>
                                <td>Danny Johnson</td>
                                <td>26 Jan</td>
                                <td>
                                    <div class="badge badge-soft-primary">Confirm</div>
                                </td>
                                <td>$124</td>
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
                                    <a href="#"># XO1346</a>
                                </th>
                                <td>Alvin Newton</td>
                                <td>21 Jan</td>
                                <td>
                                    <div class="badge badge-soft-warning">Pending</div>
                                </td>
                                <td>$112</td>
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
                                    <a href="#"># XO1347</a>
                                </th>
                                <td>Bennie Perez</td>
                                <td>15 Jan</td>
                                <td>
                                    <div class="badge badge-soft-primary">Confirm</div>
                                </td>
                                <td>$106</td>
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
                                    <a href="#"># XO1348</a>
                                </th>
                                <td>Steven Kwon</td>
                                <td>11 Jan</td>
                                <td>
                                    <div class="badge badge-soft-primary">Confirm</div>
                                </td>
                                <td>$115</td>
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
                                    <a href="#"># XO1349</a>
                                </th>
                                <td>Bryan Roark</td>
                                <td>08 Jan</td>
                                <td>
                                    <div class="badge badge-soft-danger">Cancel</div>
                                </td>
                                <td>$105</td>
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
                    <admintest-component></admintest-component>
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
