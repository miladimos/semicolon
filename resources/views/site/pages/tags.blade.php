@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Tags</h1>
                <span>123 tags</span>
            </div>
            <hr>
            <div class="row mt-4 mx-1">
                @for($i=0; $i<60;$i++)
                    <div class="col-md-5 border p-2 mb-4  bg-white" style="margin-right: 91px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none">Sport</a>
                            <span>123 article</span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
