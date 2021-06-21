@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">سوالات متداول</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ثبت سوال متداول جدید</a>
    </li>
@endsection

@section('content')
 <!-- users edit start -->
 <section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Social</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <a class="mr-2 my-25" href="#">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-18.jpg" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                            </a>
                            <div class="media-body mt-50">
                                <h4 class="media-heading">Angelo Sashington</h4>
                                <div class="col-12 d-flex mt-1 px-0">
                                    <a href="#" class="btn btn-primary d-none d-sm-block mr-75">Change</a>
                                    <a href="#" class="btn btn-primary d-block d-sm-none mr-75"><i class="feather icon-edit-1"></i></a>
                                    <a href="#" class="btn btn-outline-danger d-none d-sm-block">Remove</a>
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
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name" value="Angelo Sashington" required data-validation-required-message="This name field is required">
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
                                        <label>Status</label>
                                        <select class="form-control">
                                            <option>Active</option>
                                            <option>Blocked</option>
                                            <option>deactivated</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control">
                                            <option>Admin</option>
                                            <option>User</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" value="WinDon Technologies Pvt Ltd" placeholder="Company name">
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
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        Changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
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
                                                    <input type="text" class="form-control birthdate-picker" required placeholder="Birth date" data-validation-required-message="This birthdate field is required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control" value="&#43;6595895857" placeholder="Mobile number here..." data-validation-required-message="This mobile number is required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Website</label>
                                            <input type="text" class="form-control" required placeholder="Website here..." value="https://rowboat.com/insititious/Angelo" data-validation-required-message="This Website field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Languages</label>
                                        <select class="form-control" id="users-language-select2" multiple="multiple">
                                            <option value="English" selected>English</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="French">French</option>
                                            <option value="Russian">Russian</option>
                                            <option value="German">German</option>
                                            <option value="Arabic" selected>Arabic</option>
                                            <option value="Sanskrit">Sanskrit</option>
                                        </select>
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

                                </div>
                                <div class="col-12 col-sm-6">
                                    <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control" value="A-65, Belvedere Streets" required placeholder="Address Line 1" data-validation-required-message="This Address field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control" required placeholder="Address Line 2" data-validation-required-message="This Address field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Postcode</label>
                                            <input type="text" class="form-control" required placeholder="postcode" value="1868" data-validation-required-message="This Postcode field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>City</label>
                                            <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>State</label>
                                            <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Country</label>
                                            <input type="text" class="form-control" required value="United Kingdom" data-validation-required-message="This Time Zone field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        Changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit Info form ends -->
                    </div>
                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit socail form start -->
                        <form novalidate>
                            <div class="row">
                                <div class="col-12 col-sm-6">

                                    <fieldset>
                                        <label>Twitter</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                            </div>
                                            <input type="text" class="form-control" value="https://www.twitter.com/adoptionism744" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                        </div>

                                        <label>Facebook</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                            </div>
                                            <input type="text" class="form-control" value="https://www.facebook.com/adoptionism664" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                        </div>
                                        <label>Instagram</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                            </div>
                                            <input type="text" class="form-control" value="https://www.instagram.com/adopt-ionism744" placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Github</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                                        </div>
                                        <input type="text" class="form-control" value="https://www.github.com/madop818" placeholder="https://www.github.com/" aria-describedby="basic-addon9">
                                    </div>
                                    <label>Codepen</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                        </div>
                                        <input type="text" class="form-control" value="https://www.codepen.com/adoptism243" placeholder="https://www.codepen.com/" aria-describedby="basic-addon12">
                                    </div>
                                    <label>Slack</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                                        </div>
                                        <input type="text" class="form-control" value="@adoptionism744" placeholder="https://www.slack.com/" aria-describedby="basic-addon11">
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        Changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit socail form ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->

@endsection
