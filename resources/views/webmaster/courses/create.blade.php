@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item active"><a href="#">دوره ها</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ثبت دوره جدید</a>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ثبت دوره</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.courses.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان دوره</label>
                                                <input type="text" class="form-control" name="title" placeholder="عنوان"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد عنوان ضروری می باشد">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>نوع دوره</label>
                                            <select class="form-control select2" name="type_id">
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="controls">
                                                <label>قیمت</label>
                                                <input type="text" class="form-control" placeholder="price" name="price"
                                                    value="{{ old('price') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>درصد مدرس</label>
                                                <input type="text" class="form-control" placeholder="price" name="price"
                                                    value="{{ old('price') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> سطح دوره</label>
                                            <select class="form-control select2" name="level_id">
                                                @foreach ($levels as $level)
                                                    <option value="{{ $level->id }}">{{ $level->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label> وضعیت دوره</label>
                                            <select class="form-control select2" name="status_id">
                                                @foreach ($statuses as $status)
                                                    <option value="{{ $status->id }}">{{ $status->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">تصویر شاخص دوره</label>
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
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="imteacher" id="imteacher"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="imteacher">مدرس دوره خودم می
                                                    باشم</label>
                                            </div>
                                            <label>مدرس دوره</label>
                                            <select class="form-control select2" name="teacher_id">
                                                <option value="null">---</option>
                                                @foreach ($users as $teacher)
                                                    <option value="{{ $teacher->id }}">{{ $teacher->label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="imauthor" id="imauthor"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="imauthor">ثبت کننده خودم می
                                                    باشم</label>
                                            </div>
                                            <label>ثبت کننده دوره</label>
                                            <select class="form-control select2" name="author_id">
                                                <option value="null">---</option>
                                                @foreach ($users as $author)
                                                    <option value="{{ $author->id }}">{{ $author->label }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label> دسته بندی</label>
                                            <select class="form-control select2" name="categories[]" multiple="multiple">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> برچسب های مرتبط</label>
                                            <select class="form-control select2" name="tags[]" multiple="multiple">
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="active" id="active"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="active">دوره فعال و قابل مشاهده
                                                    باشد</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="description">توضحیات مختصر</label>
                                                <textarea class="form-control" name="description" id="description" required
                                                    data-validation-required-message="فیلد توضیحات مختصر ضروری می باشد"
                                                    rows="8">{{ old('description') ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="body">توضحیات کامل</label>
                                                <textarea class="form-control" name="body" id="body" required
                                                    data-validation-required-message="فیلد توضیحات ضروری می باشد"
                                                    rows="8">{{ old('body') ?? '' }}</textarea>
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
