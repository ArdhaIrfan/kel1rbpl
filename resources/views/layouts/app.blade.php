<!DOCTYPE html>
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
    <link href="{{ asset('css/app-layout.css') }}" rel="stylesheet">
</head>
<body style="background-color: #121417">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('images/logo-ide-navbar.png') }}" alt="IlmuDewantara" height="40" >
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
                        <li class="nav-item">
                            <a class="nav-link nav-link-white" href="/">{{ __('HOME') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-white" href="/">{{ __('MODUL') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-white" href="/">{{ __('ARTIKEL') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-white" href="/">{{ __('SUBSCRIPTION') }}</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link nav-link-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav-link-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link nav-link-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-link-white" href="{{ route('logout') }}"
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

        <main class="py-4">
            @yield('content')
        </main>

        {{-- <div class="bg-black containter-fluid">
            <div id="footer" class="footer container row">
                <div class="col-md-3">
                    <h5>
                        Leave a Message:
                    </h5>
                    <form action="" method="post">
                        <div>
                            <textarea name="footer-message" id="footer-message" cols="30" rows="5"></textarea>
                        </div>
                        <div>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <h5>
                        IlmuDewantara
                    </h5>
                    <ul class="no-bullets">
                        <li>
                            <a class="link-white" href="">Modules</a>
                        </li>
                        <li>
                            <a class="link-white" href="">IDe-Watch</a>
                        </li>
                        <li>
                            <a class="link-white" href="">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>
                        Contact Us
                    </h5>
                    <ul class="no-bullets">
                        <li>
                            + 62 (877) 8876-3027
                        </li>
                        <li>
                            + 60 (105) 530-735
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>
                        Connect with Us
                    </h5>
                </div>
            </div>
        </div> --}}

    </div>

</body>
</html>
