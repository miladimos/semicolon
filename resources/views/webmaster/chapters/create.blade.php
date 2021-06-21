@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">سرفصل دوره ها</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ثبت سرفصل دوره جدید</a>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ثبت سرفصل دوره</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.chapters.store') }}" method="POST" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان سرفصل دوره</label>
                                                <input type="text" class="form-control" name="title" placeholder="عنوان "
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد عنوان  ضروری می باشد">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6">

                                        <div class="form-group">
                                            <div class="controls">
                                                <label>شماره سرفصل دوره</label>
                                                <input type="number" class="form-control" name="number" placeholder="شماره "
                                                    value="{{ old('number') }}" required
                                                    data-validation-required-message="فیلد شماره  ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> دوره مرتبط</label>
                                            <select class="form-control select2" name="course_id">
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="active" id="active"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="active">سرفصل دوره فعال و قابل
                                                    مشاهده
                                                    باشد</label>
                                            </div>
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
