@extends('webmaster.layout.master')
@section('content')
 <!-- users edit start -->
 <section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">حساب کاربری</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">شبکه های اجتماعی</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <a class="mr-2 my-25" href="#">
                                <img src="https://picsum.photos/536/354" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                            </a>
                            <div class="media-body mt-50">
                                <h4 class="media-heading">{{ $user->username ?? $user->fullname }}</h4>
                                <div class="col-12 d-flex mt-1 px-0">
                                    <a href="#" class="btn btn-primary d-none d-sm-block mr-75">تغییر</a>
                                    <a href="#" class="btn btn-primary d-block d-sm-none mr-75"><i class="feather icon-edit-1"></i></a>
                                    <a href="#" class="btn btn-outline-danger d-none d-sm-block">حذف</a>
                                    <a href="#" class="btn btn-outline-danger d-block d-sm-none"><i class="feather icon-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form novalidate>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>نام </label>
                                            <input type="text" class="form-control" placeholder="نام" name="fname" value="{{ $user->profile()->fname ?? '' }}" required data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>نام کاربری</label>
                                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $user->username }}" required data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com" required data-validation-required-message="This email field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">

                                    <div class="form-group">
                                        <div class="controls">
                                            <label>نام خانوادگی</label>
                                            <input type="text" class="form-control" placeholder="نام خانوادگی" name="lname" value="{{ $user->profile()->lname ?? ''  }}" required data-validation-required-message="This username field is required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <label>ایمیل</label>
                                            <input type="email" class="form-control" placeholder="ایمیل" value="{{ $user->email }}" required data-validation-required-message="This email field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control" value="&#43;6595895857" placeholder="Mobile number here..." data-validation-required-message="This mobile number is required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Gender</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="vueradio" checked value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        Male
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="vueradio" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        Female
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="vueradio" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        Other
                                                    </div>
                                                </fieldset>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="form-group">
                                        <label>Contact Options</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked name="customCheck1" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Email</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked name="customCheck2" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">Message</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="customCheck3" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">Phone</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-group">
                                        <label>وضعیت کاربر</label>
                                        <select class="form-control">
                                            <option>فعال</option>
                                            <option>غیر فعال</option>
                                            <option>مسدود شده</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="table-responsive border rounded px-1 ">
                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Permission</h6>
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
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox1" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox1"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox2" class="custom-control-input"><label class="custom-control-label" for="users-checkbox2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox3" class="custom-control-input"><label class="custom-control-label" for="users-checkbox3"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox4" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox4"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Articles</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox5" class="custom-control-input"><label class="custom-control-label" for="users-checkbox5"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox6" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox6"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox7" class="custom-control-input"><label class="custom-control-label" for="users-checkbox7"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox8" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox8"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Staff</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox9"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10" class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox10"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11" class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12" class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">ذخیره </button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>
                    {{-- Start Social Network Links Tab --}}
                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit socail form start -->
                        <form novalidate>
                            <div class="row">
                                <div class="col-12 col-sm-6">

                                    <fieldset>
                                        <label>Website</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $user->profile->site ?? ''}}" name="site" placeholder="Website link" aria-describedby="basic-addon3">
                                        </div>
                                        <label>Twitter</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $user->profile->twitter ?? ''}}" name="twitter" placeholder="Twitter link" aria-describedby="basic-addon3">
                                        </div>

                                        <label>Facebook</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $user->profile->facebook ?? ''}}" name="facebook" placeholder="Facebook ..." aria-describedby="basic-addon4">
                                        </div>

                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Github</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $user->profile->github ?? ''}}" name="github" placeholder="Github ..." aria-describedby="basic-addon9">
                                    </div>
                                    <label>Atbox</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $user->profile->atbox ?? ''}}" name="atbox" placeholder="Atbox ..." aria-describedby="basic-addon12">
                                    </div>
                                    <label>Instagram</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ $user->profile->instagram ?? ''}}" name="instagram" placeholder="Instagram ..." aria-describedby="basic-addon5">
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">ذخیره</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit socail form ends -->
                    </div>
                    {{-- End Social Network Links Tab --}}

                </div>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->

@endsection
