@extends('site.user.master')

@section('content')
   <div class="container">
       <div class="row justify-content-center mt-5">
           <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <img class="img-thumbnail rounded-circle" style="width: 120px; height: 120px;" src="{{ asset('/images/default.png') }}" alt="{{ $user->username }}">
                        <div class="ml-3 mt-3">
                            <h2 class="font-weight-bold">{{ $user->username }}</h2>
                            <p class="text-black-50">{{ $user->profile->bio ?? '' }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        @if(auth()->user()->id == $user->id)
                            <a href="{{ route('user.setting') }}" class="text-black btn btn-outline-dark rounded-pill">Profile Setting</a>
                        @else
                            <a href="{{ route('user.setting') }}" class="text-black btn btn-outline-primary rounded-pill">Follow</a>
                        @endif
                    </div>
                </div>
               <div class="d-flex justify-content-between mt-4 mx-2">
                   <div>
                       <a href="#">10 Followers</a>
                       <a href="#">20 Following</a>
                   </div>
                   <div>
                       <a href="#">
                        <i class="fab fa-2x fa-twitter"></i>
                       </a>
                       <a href="#">
                        <i class="fab fa-2x fa-telegram"></i>
                       </a>
                       <a href="#">
                           <i class="fab fa-2x fa-youtube"></i>
                       </a>
                       <a href="#">
                           <i class="fab fa-2x fa-github"></i>
                       </a>
                       <a href="#">
                           <i class="fab fa-2x fa-linkedin"></i>
                       </a>
                       <a href="#">
                           <i class="fab fa-2x fa-instagram"></i>
                       </a>
                       <a href="#">
                           <i class="fab fa-2x fa-gitlab"></i>
                       </a>
                   </div>
               </div>
           </div>
       </div>
       <div class="row justify-content-center mt-3">
           <div class="col-md-8">

               @for($i=0; $i < 10; $i++)
                   <article class="card p-3 mb-4 mt-1 shadow-sm border-0">
                       <div class="d-flex justify-content-between">
                           <div class="d-flex">
                               <div>
                                   <img class="img-thumbnail rounded-circle" style="width: 50px; height: 50px" src="{{ asset('/images/default.png') }}" alt="">
                               </div>
                               <div class="ml-3 mt-2" style="line-height: .6;">
                                   <h6 class="font-weight-bold" style="font-size: 13px">Name Family</h6>
                                   <span class="text-black-50" style="font-size: 12px">12 day age</span>
                                   <span class="text-black-50" style="font-size: 12px">- read 2 min</span>
                               </div>
                           </div>
                           <div>
                               <a href="#" class="btn btn-outline-dark rounded-pill mt-2">Edit Article</a>
                           </div>
                       </div>
                       <div class="">
                           <a href="#" class="text-decoration-none text-reset">
                               <h2 class="p-2 mt-1 font-weight-bold text-black" style="font-size: 1.4rem;">This is Article Title</h2>
                               <figure class="figure">
                                   <img src="{{ asset('/images/article.jpg') }}" class="figure-img img-fluid rounded" alt="..." style="width:100%; height: 250px">
                                   <figcaption class="figure-caption" style="font-size: 1rem;">A caption for the above image.</figcaption>
                               </figure>
                           </a>
                       </div>
                       <footer class="d-flex justify-content-between">
                           <div>
                               <p>
                                   <i class="fas fa-bookmark" style="font-size: 1.4rem;"></i>
                               </p>
                           </div>
                           <div class="d-flex">
                               <p class="mr-2">
                                   <i class="fas fa-heart text-danger" style="font-size: 1.4rem;"></i>
                                   <span class="font-weight-bold" style="font-size: .7rem;">10</span>
                               </p>
                               <p>
                                   <i class="fas fa-comment text-secondary" style="font-size: 1.4rem;"></i>
                                   <span class="font-weight-bold" style="font-size: .7rem;">4</span>
                               </p>
                           </div>

                       </footer>
                   </article>
               @endfor
           </div>
       </div>
   </div>
@endsection
