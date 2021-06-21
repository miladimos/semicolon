@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item active"><a href="#">ایجاد مقاله جدید</a>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ثبت مقاله</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit account form start -->
                            <form action="{{ route('webmaster.articles.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان مقاله</label>
                                                <input type="text" class="form-control" name="title" placeholder="عنوان"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد عنوان ضروری می باشد">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>نوع مقاله</label>
                                            <select class="form-control select2" name="type_id">
                                                <option value="1">رایگان</option>
                                                <option value="2">اعضای ویژه</option>
                                                <option value="3">نقدی و اعضای ویژه</option>
                                                <option value="4">نقدی</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label> وضعیت مقاله</label>
                                            <select class="form-control select2" name="status_id">
                                                <option value="1">پیش نویس</option>
                                                <option value="2">منتشر شده</option>
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">تصویر شاخص مقاله</label>
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
                                                <input type="checkbox" name="imauthor" id="imauthor"
                                                    class="custom-control-input" checked>
                                                <label class="custom-control-label" for="imauthor">نویسنده خودم می باشم</label>
                                            </div>
                                            <label>نویسنده</label>
                                            <select class="form-control select2" name="author_id">
                                                <option value="0">---</option>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->username }}</option>
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
                                                <label class="custom-control-label" for="active">مقاله فعال و قابل مشاهده
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
