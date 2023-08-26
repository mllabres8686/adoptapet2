<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="min-height:100vh;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AdoptaPet') }}</title>

    <!-- BT4 Y JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/image_form.js') }}" defer></script>
    <script src="{{ asset('js/submit_forms.js') }}" defer></script>
    <script src="{{ asset('js/filter_form.js') }}" defer></script>
    <script src="{{ asset('js/jquery.Jcrop.min.js') }}" defer></script>
    <script src="{{ asset('js/modals.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- FONTAWESOME-->
    <script async src="https://kit.fontawesome.com/e3989053af.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/switch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.Jcrop.min.css') }}" rel="stylesheet">

    <!--GOOGLE ADSENSE-->
    <!--
    <script data-ad-client="ca-pub-2315589785798654" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    -->

    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{config('app.web_image_url').'/favicon/apple-icon-57x57.png'}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{config('app.web_image_url').'/favicon/apple-icon-60x60.png'}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{config('app.web_image_url').'/favicon/apple-icon-72x72.png'}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{config('app.web_image_url').'/favicon/apple-icon-76x76.png'}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{config('app.web_image_url').'/favicon/apple-icon-114x114.png'}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{config('app.web_image_url').'/favicon/apple-icon-120x120.png'}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{config('app.web_image_url').'/favicon/apple-icon-144x144.png'}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{config('app.web_image_url').'/favicon/apple-icon-152x152.png'}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{config('app.web_image_url').'/favicon/apple-icon-180x180.png'}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{config('app.web_image_url').'/favicon/android-icon-192x192.png'}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{config('app.web_image_url').'/favicon/favicon-32x32.png'}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{config('app.web_image_url').'/favicon/favicon-96x96.png'}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{config('app.web_image_url').'/favicon/favicon-16x16.png'}}">
    <link rel="manifest" href="{{config('app.web_image_url').'/favicon/manifest.json'}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{config('app.web_image_url').'/favicon/ms-icon-144x144.png'}}">
    <meta name="theme-color" content="#ffffff">

    @stack('head')

</head>
<body class="bg-light" style="min-height:100vh;">
    <div id="app" class="container bg-white p-0" style="min-height:100vh;">
        <nav class="navbar navbar-expand-md navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{config('app.web_image_url').'/logo_trans_white.png'}}" width="45" height="45"/>
                    {{ config('app.name', 'AdoptaPet') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
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

                            <!--CONTENIDO DESKTOP-->
                            <li class="nav-item dropdown d-none d-md-block">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{config('app.url').'/profile'}}">Mi perfil</a>

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


                            <!--CONTENIDO MOBILE-->

                                <li class="nav-item d-block d-md-none">
                                    <a class="nav-link text-white" href="{{config('app.url').'/profile'}}">Mi perfil</a>
                                </li>
                                <li class="nav-item d-block d-md-none">
                                    <a class="nav-link text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>


                                <form id="logout-form_2"  action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
