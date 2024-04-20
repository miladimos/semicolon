@extends('site.account.layout')

@section('inner')
    <div class="row">
        <div class="col-lg-12 mx-auto">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('accounts.articles.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h4>Create New Article</h4>
                <div class="col-12 mx-auto">
                    <input type="text" name="title" id="title" required class="form-control" placeholder="Title">
                </div>
                <div class="col-12 mx-auto">
                    <textarea name="body" id="body" required class="form-control" placeholder="Body"></textarea>
                </div>
                <div class="col-12 mx-auto">
                    <select name="category_id" id="category_id" required class="form-control"></select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Post <i class="fa fa-envelope-open-o"></i>
                </button>

            </form>
        </div>
    </div>
@endsection
