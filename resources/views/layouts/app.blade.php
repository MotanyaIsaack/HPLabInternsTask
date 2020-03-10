<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ URL::asset('php.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

    @yield('styles')

</head>

<body >
    <div id="app">
         @include('inc.nav')

        <main class="py-4">            
            @include('inc.messages')
            <div class="container-fluid p-0">
                <div class="row">
                    
                    <div class="col jumbotron side-menu">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/slim.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>

    @yield('scripts')
</body>

</html>