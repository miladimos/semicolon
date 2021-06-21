@extends('webmaster.layout.master')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="#">برچست ها</a>
    </li>
    <li class="breadcrumb-item active"><a href="#">ویرایش برچسب</a>
    </li>
@endsection

@section('content')
 <!-- users edit start -->
 <section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form novalidate action={{ route('webmaster.tags.update', $tag->id ) }} method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="controls">
                                    <label>نام برچسب</label>
                                    <input type="text" class="form-control" placeholder="برچسب" name="name" value="{{ $tag->name }}" required data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="controls">
                                    <label>نامک</label>
                                    <input type="text" class="form-control" placeholder="نامک" name="slug" value="{{ $tag->slug }}" required data-validation-required-message="This username field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="active">وضعیت</label>
                                <input type="checkbox" name="active" id="active" @if($tag->active) checked @endif/>
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
