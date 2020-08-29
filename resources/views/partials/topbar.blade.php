<nav class="navbar navbar-expand-md navbar-light bg-white py-2">
    <div class="container">
        <a class="navbar-brand font-weight-bold" style="font-size: 26px;" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    {{--                            <li class="nav-item dropdown">--}}
                    {{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                    {{--                                    <i class="fas fa-search fa-2x mt-2"></i>--}}
                    {{--                                </a>--}}

                    {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                    {{--                                    <a class="dropdown-item" href="#"> Setting--}}
                    {{--                                    </a>--}}
                    {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
                    {{--                                       onclick="event.preventDefault();--}}
                    {{--                                                     document.getElementById('logout-form').submit();">--}}
                    {{--                                        {{ __('Logout') }}--}}
                    {{--                                    </a>--}}

                    {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--                                        @csrf--}}
                    {{--                                    </form>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" v-pre>
                            <img class="img-thumbnail rounded-circle border border-primary" style="width: 46px; height: 46px;" src="{{asset('/images/default.png')}}" alt="{{ auth()->user()->username }}">

                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="d-block px-4 text-dark" href="{{ route('user.profile.index', ['username'=>auth()->user()->username]) }}">
                                <span class="d-inline-block ">Name Family</span>
                                <span class="d-inline-block mt-2">
                                            <span>@</span>
                                            <span>{{auth()->user()->username}}</span>
                                        </span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('webmaster.index') }}"> Webmaster </a>
                            <a class="dropdown-item @if(request()->is("article/new")) active @endif" href="{{ route('article.new') }}"> New Article </a>
                            <a class="dropdown-item @if(request()->is("article/drafts")) active @endif" href="{{ route('article.drafts') }}"> Drafts </a>
                            <a class="dropdown-item" href="{{ route('article.bookmarks') }}"> Bookmarks </a>
                            <a class="dropdown-item" href="{{ route('article.likes') }}"> Likes </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @if(request()->is("@*")) active @endif" href="{{route('user.profile.index', ['username'=>auth()->user()->username])}}"> Profile </a>
                            <a class="dropdown-item" href="{{ route('user.setting') }}"> Setting </a>
                            <a class="dropdown-item" href="{{ route('help') }}"> Help </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>


                @endguest
            </ul>
        </div>
    </div>
</nav>
