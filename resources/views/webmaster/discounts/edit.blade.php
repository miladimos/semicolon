@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">تخفیف ها</a> </li>
    <li class="breadcrumb-item active"><a href="#">ویرایش تخفیف</a> </li>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ثبت تخفیف</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.discounts.update', $discount->id) }}" method="POST" enctype="multipart/form-data"
                                novalidate>
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان تخفیف</label>
                                                <input type="text" class="form-control" value="{{ $discount->title }}" name="title" placeholder="عنوان"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد عنوان ضروری می باشد">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label> دوره مرتبط (در صورت سراسری نبودن تخفیف)</label>
                                            <select class="form-control select2" name="courses[]" multiple>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}" {{ in_array($course->id, $discount->courses->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> کاربر مرتبط (در صورت سراسری نبودن تخفیف)</label>
                                            <select class="form-control select2" name="users[]" multiple>
                                                @foreach ($users as $user)
                                                    <option value="{{ $users->id }}" {{ in_array($users->id, $discount->users->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $users->username }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">تصویر شاخص یا بنر تخفیف</label>
                                            <div class="custom-file">
                                                <input type="file"  name="thumbnail_path" class="custom-file-input"
                                                    id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">تصویری انتخاب
                                                    نشده</label>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>مناسبت تخفیف</label>
                                                <input type="text" class="form-control" value="{{ $discount->name }}" name="title" placeholder="مناسبت"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد مناسبت ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>کد تخفیف</label>
                                                <input type="text" class="form-control" value="{{ $discount->code }}" name="code" placeholder="کد"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد کد ضروری می باشد">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>نوع تحفیف</label>
                                            <select class="form-control select2" name="type">
                                                <option value="1">سراسری</option>
                                                <option value="2">مربوط به یک دوره</option>
                                                <option value="2">مربوط به یک شخص</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>(به درصد) مقدار تخفیف</label>
                                                <input type="number" class="form-control" value="{{ $discount->percent }}" name="percent" placeholder="مقدار"
                                                    value="{{ old('percent') }}" required
                                                    data-validation-required-message="فیلد مقدار ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تاریخ شروع تخفیف</label>
                                                <input type="date" class="form-control" value="{{ old('start_date') ?? carbon()->parse($discount->start_date)->format('Y-m-d\tH:i:s') }}" name="start_date" placeholder="مقدار"
                                                    value="{{ old('percent') }}" required
                                                    data-validation-required-message="فیلد مقدار ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تاریخ پایان تخفیف</label>
                                                <input type="date" class="form-control" value="{{ $discount->end_date }}" name="end_date" placeholder="مقدار"
                                                    value="{{ old('percent') }}" required
                                                    data-validation-required-message="فیلد مقدار ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" placeholder="نویسنده"  name="active" id="active"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="active">تخفیف فعال و قابل استفاده
                                                    باشد</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تعداد قابل استفاده</label>
                                                <input type="text" class="form-control" value="{{ $discount->count_use }}" name="count_use"
                                                    placeholder="تعداد قابل استفاده کد " value="{{ old('count_use') }}"
                                                    required data-validation-required-message="فیلد تعداد ضروری می باشد">
                                            </div>
                                            <div class="custom-control custom-checkbox mt-1">
                                                <input type="checkbox" placeholder="نامحدود" name="infinity" id="infinity"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="infinity">تخفیف به صورت نامحدود
                                                    قابل استفاده باشد</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="description">توضیح مختصر</label>
                                            <textarea class="form-control"  name="description" id="description" required
                                                data-validation-required-message="فیلد توضیحات ضروری می باشد"
                                                rows="8">{{ old('description') ?? {{ $discount->description }} }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="body">توضیحات تکمیلی</label>
                                            <textarea class="form-control" value="{{ $discount->body }}" name="body" id="body" required
                                                data-validation-required-message="فیلد توضیحات ضروری می باشد"
                                                rows="8">{{ old('body') ?? {{ $discount->body }} }}</textarea>
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
