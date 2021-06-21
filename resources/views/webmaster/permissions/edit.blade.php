@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">سطح دسترسی ها</a></li>
    <li class="breadcrumb-item active"><a href="#">ویرایش سطح دسترسی</a></li>
@endsection


@section('styles')


@endsection

@section('scripts')
    {{-- PAGE JS --}}
    <script src="{{ asset('/webmaster/js/scripts/forms/select/form-select2.js') }}"></script>
    {{-- PAGE END JS --}}

@endsection

@section('content')
    <!-- users edit start -->
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                                href="#account" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ایجاد تک سطح
                                    دسترسی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"
                                href="#information" aria-controls="information" role="tab" aria-selected="false">
                                <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">ایجاد سطح دسترسی
                                    CRUD</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.permissions.update', $permission) }}" method="POST"
                                novalidate>
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام </label>
                                                <input type="text" class="form-control" placeholder="نام لاتین" name="name"
                                                    value="{{ old('name') ?? $permission->name }}" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>توضیحات مختصر</label>
                                                <input type="text" class="form-control" placeholder="توضیحات مختصر"
                                                    value="{{ old('description') ?? $permission->description }}"
                                                    name="description" required
                                                    data-validation-required-message="This email field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">

                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان فارسی</label>
                                                <input type="text" class="form-control" placeholder="عنوان فارسی"
                                                    value="{{ old('fa_name') ?? $permission->fa_name }}" name="fa_name"
                                                    required data-validation-required-message="This text field is required">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit"
                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">ویرایش</button>
                                        <button type="reset" class="btn btn-outline-warning">بازسازی</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>
                        <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                            <!-- users edit Info form start -->
                            <form novalidate>
                                <div class="row mt-1">
                                    <div class="col-12 col-sm-6">
                                        <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Information</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Birth date</label>
                                                        <input type="text" class="form-control birthdate-picker" required
                                                            placeholder="Birth date"
                                                            data-validation-required-message="This birthdate field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Languages</label>
                                            <select class="form-control" id="users-language-select2" multiple="multiple">
                                                <option value="Sanskrit">Sanskrit</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Contact Options</label>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" checked
                                                                name="customCheck1" id="customCheck1">
                                                            <label class="custom-control-label"
                                                                for="customCheck1">Email</label>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" checked
                                                                name="customCheck2" id="customCheck2">
                                                            <label class="custom-control-label"
                                                                for="customCheck2">Message</label>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="customCheck3" id="customCheck3">
                                                            <label class="custom-control-label"
                                                                for="customCheck3">Phone</label>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Country</label>
                                                <input type="text" class="form-control" required value="United Kingdom"
                                                    data-validation-required-message="This Time Zone field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="table-responsive border rounded px-1 ">
                                            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i
                                                    class="feather icon-lock mr-50 "></i>Permission</h6>
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Module</th>
                                                        <th>Read</th>
                                                        <th>Write</th>
                                                        <th>Create</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Users</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox1"
                                                                    class="custom-control-input" checked>
                                                                <label class="custom-control-label"
                                                                    for="users-checkbox1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox2"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="users-checkbox2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox3"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="users-checkbox3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox4"
                                                                    class="custom-control-input" checked>
                                                                <label class="custom-control-label"
                                                                    for="users-checkbox4"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Articles</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox5"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="users-checkbox5"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox6"
                                                                    class="custom-control-input" checked>
                                                                <label class="custom-control-label"
                                                                    for="users-checkbox6"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox7"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="users-checkbox7"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox8"
                                                                    class="custom-control-input" checked>
                                                                <label class="custom-control-label"
                                                                    for="users-checkbox8"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox9"
                                                                    class="custom-control-input" checked>
                                                                <label class="custom-control-label"
                                                                    for="users-checkbox9"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox10"
                                                                    class="custom-control-input" checked>
                                                                <label class="custom-control-label"
                                                                    for="users-checkbox10"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox11"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="users-checkbox11"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"><input
                                                                    type="checkbox" id="users-checkbox12"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="users-checkbox12"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit"
                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">ثبت</button>
                                        <button type="reset" class="btn btn-outline-warning">انصراف</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit Info form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
