@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">سوالات متداول</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ویرایش سوال متداول</a>
    </li>
@endsection


@section('content')
 <!-- users edit start -->
 <section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form novalidate action={{ route('webmaster.faqs.update', $faq->id ) }} method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="controls">
                                    <label>عنوان</label>
                                    <input type="text" class="form-control" placeholder="عنوان سوال" name="question" value="{{ $faq->question }}" required data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="controls">
                                    <label>توضیحات</label>
                                    <textarea class="form-control" placeholder="توضیحات" name="answer" rows="4" required data-validation-required-message="This name field is required">{{ $faq->answer }}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class=" col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                            <button type="submit" class="btn btn-warning glow mb-1 mb-sm-0 mr-0 mr-sm-1 btn-block">ویرایش</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->

@endsection
