@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent

    <li class="breadcrumb-item active"><a href="{{ route('webmaster.categories.index') }}">دسته بندی ها</a></li>
    <li class="breadcrumb-item active"><a href="#">ویرایش دسته بندی</a></li>
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
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">دسته بندی ها</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tag" aria-labelledby="tag-tab" role="tabpanel">
                            <!-- create tag tag form start -->
                            <form action="{{ route('webmaster.categories.update', $category) }}" method="POST" novalidate>
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>عنوان دسته بندی</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') ?? $category->name }}" required
                                                    data-validation-required-message="فیلد عنوان برچسب اجباری می باشد.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> دسته بندی والد</label>
                                            <select class="form-control select2" name="parent_id">
                                                <option value="0"> --- </option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}" @if ($category->parent_id === $item->id) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="active">وضعیت</label>
                                            <input type="checkbox" name="active" id="active" @if ($category->active) checked @endif />
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit"
                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">بروزرسانی</button>
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
