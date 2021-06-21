@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item active"><a href="#">کتاب ها</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ثبت کتاب جدید</a>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ثبت کتاب</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.books.store') }}" method="POST" enctype="multipart/form-data"
                                novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان کتاب</label>
                                                <input type="text" class="form-control" name="title" placeholder="عنوان"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد عنوان ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>زبان کتاب (فارسی - انگلیسی)</label>
                                                <input type="text" class="form-control" placeholder="زبان کتاب" name="lang"
                                                    value="{{ old('lang') }}" required
                                                    data-validation-required-message="فیلد زبان ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>ISBN</label>
                                                <input type="text" class="form-control" placeholder="ISBN" name="isbn"
                                                    value="{{ old('isbn') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>شابک</label>
                                                <input type="text" class="form-control" placeholder="شابک کتاب"
                                                    name="shabak" value="{{ old('shabak') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> برچسب های مرتبط</label>
                                            <select class="form-control select2" name="tags[]" multiple="multiple">
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">تصویر شاخص کتاب</label>
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
                                                <label>نویسنده</label>
                                                <input type="text" class="form-control" placeholder="نویسنده" name="authors"
                                                    value="{{ old('authors') }}" required
                                                    data-validation-required-message="فیلد نویسنده ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تعداد صفحات</label>
                                                <input type="number" class="form-control" placeholder="تعداد صفحات"
                                                    name="page_count" value="{{ old('page_count') }}" required
                                                    data-validation-required-message="فیلد تعداد صفحات ضروری می باشد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>تاریخ انتشار</label>
                                                <input type="number" class="form-control" placeholder="تاریخ انتشار"
                                                    name="published_at" value="{{ old('published_at') }}" required
                                                    data-validation-required-message="فیلد تاریخ انتشار ضروری می باشد">
                                            </div>
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
                                            <label> انتشارات</label>
                                            <select class="form-control select2" name="publisher_id">
                                                @foreach ($publishers as $publisher)
                                                    <option value="{{ $publisher->id }}">{{ $publisher->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">فایل کتاب</label>
                                            <div class="custom-file">
                                                <input type="file" name="file_path" class="custom-file-input"
                                                    id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">فایلی انتخاب نشده
                                                </label>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="imauthor" id="imauthor"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="imauthor">ثبت کننده خودم می باشم</label>
                                            </div>
                                            <label>ثبت کننده کتاب</label>
                                            <select class="form-control select2" name="author_id">
                                                <option value="null">---</option>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->username }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" placeholder="نویسنده" name="active" id="active"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="active">کتاب فعال و قابل مشاهده
                                                    باشد</label>
                                            </div>
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
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="body">توضیحات تکمیلی</label>
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
