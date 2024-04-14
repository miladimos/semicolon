@include('site.layouts.header')
    @include('site.sections.topbar')

    @yield('content')

    {{-- @include('site.sections.footer') --}}

@include('site.layouts.footer')
