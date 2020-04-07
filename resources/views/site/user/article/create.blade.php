@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-5">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <input type="text" class="form-control border-0 p-4" id="title" name="title" placeholder="Article Title ...">
                        <div class="d-flex mt-3">
                            <p> {{ url()->route('site.index') }}/@ {{ auth()->user()->username }}</p>
                            <p>/this-slug</p>-<p>31h23jklj</p>
                            <button class="font-weight-bolder ml-2" id="btn-article-slug-edit">Edit</button>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto mt-4">
                        <textarea name="body" class="form-control border-0 p-4" id="body" cols="30" rows="10" placeholder="Article Content ..."></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
