@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item active"><a href="#">تماس با ما</a>
    </li>
@endsection


@section('styles')


@endsection

@section('scripts')
<script src="{{ asset('/webmaster/js/scripts/ui/data-list-view.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/extensions/dropzone.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
@endsection

@section('content')
  <!-- Data list view starts -->
<section id="data-thumb-view" class="data-thumb-view-header">
    <div class="action-btns d-none">
        <div class="btn-dropdown mr-1 mb-1">
            <div class="btn-group dropdown actions-dropodown">
                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    عملیات ها
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>حذف</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>آرشیو کردن</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>پرینت</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>خروجی اکسل</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>خروجی CSV</a>
                </div>
            </div>
        </div>
    </div>
    <!-- dataTable starts -->
    <div class="table-responsive">
        <table class="table data-thumb-view">
            <thead>
                <tr>
                    <th></th>
                    <th>#</th>
                    <th>موضوع</th>
                    <th>ثبت کننده</th>
                    <th>راه ارتباطی</th>
                    <th>متن</th>
                    <th>تاریخ ثبت</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td></td>
                    <td>{{ $loop->iteration}}</td>
                    <td class="product-name">{{ $contact->subject }}</td>
                    <td class="product-category">{{ $contact->name ?? '' }}</td>
                    <td class="product-category">{{ $contact->call ?? '' }}</td>
                    <td class="product-category">{{ Str::limit($contact->body, 20) ?? '' }}</td>
                    <td class="product-category">{{ jdate($contact->created_at )->format("%A, %d %B %y") ?? '' }}</td>
                    <td>
                        @if($contact->active)
                        <div class="chip chip-primary">
                            <div class="chip-body">
                                <div class="chip-text">فعال</div>
                            </div>
                        </div>
                        @else
                        <div class="chip chip-danger">
                            <div class="chip-body">
                                <div class="chip-text">غیر فعال</div>
                            </div>
                        </div>
                        @endif
                    </td>
                    <td class="product-action">
                        <a href="{{ route('webmaster.contacts.edit', $contact->id) }}"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                        <a href="{{ route('webmaster.contacts.show', $contact->id) }}"><span class="action-edit"><i class="feather icon-user"></i></span></a>
                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- dataTable ends -->

    <!-- add new sidebar starts -->
    <div class="add-new-data-sidebar">
        <div class="overlay-bg"></div>
        <div class="add-new-data">
            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">Thumb View Data</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">
                        <div class="col-sm-12 data-field-col">
                            <label for="data-name">Name</label>
                            <input type="text" class="form-control" id="data-name">
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-category"> Category </label>
                            <select class="form-control" id="data-category">
                                <option>Audio</option>
                                <option>Computers</option>
                                <option>Fitness</option>
                                <option>Appliance</option>
                            </select>
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-status">Order Status</label>
                            <select class="form-control" id="data-status">
                                <option>Pending</option>
                                <option>Canceled</option>
                                <option>Delivered</option>
                                <option>On Hold</option>
                            </select>
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-price">Price</label>
                            <input type="text" class="form-control" id="data-price">
                        </div>
                        <div class="col-sm-12 data-field-col data-list-upload">
                            <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                <div class="dz-message">Upload Image</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-primary">Add Data</button>
                </div>
                <div class="cancel-data-btn">
                    <button class="btn btn-outline-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- add new sidebar ends -->
</section>
<!-- Data list view end -->
@endsection
