@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-5">
            <h1 class="">Categories</h1>
            <hr>
            <div class="row text-center">
               @for($i=0; $i<6;$i++)
                <div class="col-md-3 mt-4">
                    <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                            <a class="text-reset text-decoration-none" target="_blank"  href="#">
                                <img src="https://files.virgool.io/upload/topic/islam.png?x-oss-process=image/resize,w_280/crop,h_180,center/quality,q_80" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <a class="text-reset text-decoration-none" target="_blank" href="#">
                                    <h4 class="card-text">Some</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               @endfor
            </div>
        </div>
    </div>
@endsection
