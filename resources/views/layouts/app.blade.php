<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/site/site.css') }}" rel="stylesheet">
    <link href="{{ asset('/fonts/fontawesome/css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div>

        @include('partials.topbar')

        @include('partials.categories-nav')

        <main class="py-4" id="app">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    @yield('scripts')

</body>
</html>
