@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row justify-content-center mt-5">
           <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <img class="img-thumbnail rounded-circle" style="width: 120px; height: 120px;" src="{{ asset('storage/avatars/default.jpg') }}" alt="{{ $user->username }}">
                        <div class="ml-3 mt-3">
                            <h2 class="font-weight-bold">{{ $user->username }}</h2>
                            <p class="text-black-50">This is my bio.This is my bio.This is my bio.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-black btn btn-outline-dark rounded-pill">Profile Setting</a>
                    </div>
                </div>
               <div class="d-flex justify-content-around mt-3">
                   <div>
                       <a href="#">10 Followers</a>
                       <a href="#">20 Following</a>
                   </div>
                   <div>
                       <i class="fab fa-2x fa-twitter"></i>
                       <i class="fab fa-2x fa-github"></i>
                       <i class="fab fa-2x fa-youtube"></i>
                       <i class="fab fa-2x fa-linkedin"></i>
                       <i class="fab fa-2x fa-telegram"></i>
                       <i class="fab fa-2x fa-instagram"></i>
                       <i class="fab fa-2x fa-gitlab"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
