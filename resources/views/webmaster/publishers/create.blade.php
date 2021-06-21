@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">انتشارات کتاب ها</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ثبت انتشارات کتاب جدید</a>
    </li>
@endsection

@section('content')
    <!-- create tag start -->
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="tag-tab" data-toggle="tab" href="#tag"
                                aria-controls="tag" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">انتشارات کتاب
                                    ها</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tag" aria-labelledby="tag-tab" role="tabpanel">
                            <!-- create tag tag form start -->
                            <form action="{{ route('webmaster.publishers.store') }}" method="POST" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان انتشارات کتاب</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ old('title') }}" required
                                                    data-validation-required-message="فیلد عنوان انتشارات کتاب اجباری می باشد.">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="active">وضعیت</label>
                                            <input type="checkbox" title="active" id="active" checked />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>توضیحات انتشارات کتاب</label>
                                                <input type="text" class="form-control" name="description"
                                                    value="{{ old('description') }}" required
                                                    data-validation-required-message="فیلد عنوان انتشارات کتاب اجباری می باشد.">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">تصویر شاخص انتشارات</label>
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail_path" class="custom-file-input"
                                                    id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">تصویری انتخاب
                                                    نشده</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit"
                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">ثبت</button>
                                    </div>
                                </div>
                            </form>
                            <!-- create tag tag form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- create tag ends -->

@endsection
