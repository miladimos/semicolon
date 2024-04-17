@extends('site.auth.master')

@section('auth-title')
    @lang('messages.register')
@endsection

@section('auth-content')

    {{-- <div class="row">
        <div class="col-lg-7 mx-auto">
            <blockquote class="blockquote">Please read <a href="#">Licensing & Terms</a> of Use if you are wondering
                about the license. </strong></blockquote>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link @if(isActiveMenu('account.index')) active @endif" id="v-pills-home-tab" href="{{ route('account.index') }}" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">Account</a>
                <a class="nav-link @if(isActiveMenu('account.articles.create')) active @endif" id="v-pills-profile-tab" href="{{ route('account.articles.create') }}" role="tab"
                    aria-controls="v-pills-profile" aria-selected="false">New Article</a>
                <a class="nav-link @if(isActiveMenu('account.articles.index')) active @endif" id="v-pills-profile-tab" href="{{ route('account.articles.index') }}" role="tab"
                    aria-controls="v-pills-profile" aria-selected="false">Articles</a>
                <a class="nav-link @if(isActiveMenu('account.setting.index')) active @endif" id="v-pills-messages-tab" href="{{ route('account.setting.index') }}" role="tab"
                    aria-controls="v-pills-messages" aria-selected="false">Setting</a>
                <a class="nav-link @if(isActiveMenu('auth.logout')) active @endif" id="v-pills-settings-tab" href="{{ route('auth.logout') }}" role="tab"
                    aria-controls="v-pills-settings" aria-selected="false">Logout</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    @yield('inner')
                </div>
            </div>
        </div>
    </div>
@endsection
