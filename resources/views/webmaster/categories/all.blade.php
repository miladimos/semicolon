@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item active"><a href="#">دسته بندی ها</a></li>
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


    <script>
        function deleteItem(event, route) {
            if (confirm("از حدف مطمئن هستید؟")) {
                $.post(route, {
                        _method: "delete",
                        _token: "{{ csrf_token() }}"
                    })
                    .done(function(response) {
                        event.target.closest('tr').remove();
                    })
                    .fail(function(response) {});
            }
        }

    </script>
@endsection

@section('content')
    <!-- Data list view starts -->
    <section id="data-thumb-view" class="data-thumb-view-header">
        <div class="action-btns d-none">
            <div class="btn-dropdown mr-1 mb-1">
                <div class="btn-group dropdown actions-dropodown">
                    <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <th>ردیف</th>
                        <th>تصویر</th>
                        <th>عنوان دسته بندی</th>
                        <th>نامک دسته بندی</th>
                        <th>توضیحات</th>
                        <th>والد</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td></td>
                            <td>{{ $loop->iteration }}</td>
                            <td class="product-img"><img src="{{ $category->thumbnail }}" alt="Img placeholder">
                            </td>
                            <td class="product-name">{{ $category->name }}</td>
                            <td class="product-category">{{ $category->slug }}</td>
                            <td class="product-category">{{ $category->description ?? '' }}</td>
                            <td class="product-category">{{ $category->parent->name ?? '' }}</td>
                            <td>
                                @if ($category->active)
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
                                <a href="{{ route('webmaster.categories.edit', $category->id) }}">
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                </a>
                                <button type="button"
                                    onclick="event.preventDefault(); deleteItem(event, '{{ route('webmaster.categories.destroy', $category->id) }}')"><i
                                        class="feather icon-trash"></i></button>
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
                        <h4 class="text-uppercase">ثبت دسته بندی جدید</h4>
                    </div>
                    <div class="hide-data-sidebar">
                        <i class="feather icon-x"></i>
                    </div>
                </div>
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="data-items pb-3">
                        <div class="data-fields px-2 mt-3">
                            <div class="row">
                                <div class="col-sm-12 data-field-col">
                                    <label for="name">عنوان دسته بندی</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="description">توضیحات</label>
                                    <input type="text" class="form-control" name="description" id="description">
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="parent_id"> دسته بندی والد </label>
                                    <select class="form-control" id="parent_id" name="parent_id">
                                        <option>Audio</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 data-field-col data-list-upload">
                                    <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                        <div class="dz-message">تصویر شاخص دسته بندی</div>
                                    </form>
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="active">فعال باشد</label>
                                    <input type="checkbox" id="active" name="active" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                        <div class="add-data-btn">
                            <button class="btn btn-primary" type="submit">ثبت</button>
                        </div>
                        <div class="cancel-data-btn">
                            <button class="btn btn-outline-danger" type="reset">انصراف</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- add new sidebar ends -->
    </section>
    <!-- Data list view end -->
@endsection
