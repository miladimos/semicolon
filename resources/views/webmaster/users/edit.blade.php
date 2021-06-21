@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item "><a href="#">کاربران</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ویرایش کاربر - {{ $user->username }}</a> </li>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ویرایش کاربر</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.users.update', $user->uuid) }}" method="POST" enctype="multipart/form-data"
                                novalidate>
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام</label>
                                                <input type="text" class="form-control" name="fname" placeholder="نام"
                                                    value="{{ old('fname') ?? $user->profile->fname}}" required
                                                    data-validation-required-message="فیلد نام ضروری می باشد">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام کاربری</label>
                                                <input type="text" class="form-control" placeholder="نام کاربری"
                                                    name="username" value="{{ old('username') ?? $user->username}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>نقش ها</label>
                                            <select class="form-control select2" name="roles[]" multiple="multiple">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" @if(in_array($role->id, $user->roles->pluck('id')->toArray())) selected  @endif>{{ $role->name }} - {{ $role->fa_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">تصویر شاخص </label>
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail_path" class="custom-file-input"
                                                    id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">تصویری انتخاب
                                                    نشده</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام خانوادگی</label>
                                                <input type="text" class="form-control" placeholder="نام خانوادگی"
                                                    name="lname" value="{{ old('lname')  ?? $user->lname}}" required
                                                    data-validation-required-message="فیلد نام خانوادگی ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>ایمیل</label>
                                                <input type="email" class="form-control" placeholder="ایمیل" name="email"
                                                    value="{{ old('email') ?? $user->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>رمز عبور</label>
                                                <input type="password" class="form-control" placeholder="رمز عبور"
                                                    name="password" value="{{ old('password') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تایید رمز عبور</label>
                                                <input type="password" class="form-control" placeholder="تایید رمز عبور"
                                                    name="password_confirmation" value="{{ old('password_confirmation') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" placeholder="نویسنده" name="active" id="active"
                                                    class="custom-control-input" @هب>
                                                <label class="custom-control-label" for="active">کاربر فعال باشد</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit"
                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">ثبت</button>
                                        <button type="reset" class="btn btn-outline-warning">تازه سازی</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- users edit ends -->

@endsection
