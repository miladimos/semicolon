@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">نقش ها</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ثبت نقش جدید</a>
    </li>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ثبت نقش</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.roles.store') }}" method="POST" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام انگلیسی نقش</label>
                                                <input type="text" class="form-control" name="name" placeholder="نام"
                                                    value="{{ old('name') }}" required
                                                    data-validation-required-message="فیلد نام ضروری می باشد">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">

                                        <div class="form-group">
                                            <div class="controls">
                                                <label>نام فارسی نقش</label>
                                                <input type="text" class="form-control" name="fa_name"
                                                    placeholder="نام فارسی" value="{{ old('fa_name') }}" required
                                                    data-validation-required-message="فیلد نام فارسی ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> سطح دسترسی های مرتبط</label>
                                            <select class="form-control select2" name="permissions[]" multiple="multiple">
                                                @foreach ($permissions as $permission)
                                                    <option value="{{ $permission->id }}">{{ $permission->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" placeholder="نویسنده" name="active" id="active"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="active">نقش فعال و قابل مشاهده
                                                    باشد</label>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="description">توضیح مختصر</label>
                                            <textarea class="form-control" name="description" id="description" required
                                                data-validation-required-message="فیلد توضیحات ضروری می باشد"
                                                rows="8">{{ old('description') ?? '' }}</textarea>
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
