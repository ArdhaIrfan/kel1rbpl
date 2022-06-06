<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app-layout.css') }}" rel="stylesheet">

    @yield('local_css')

</head>

<body style="background-color: #121417; color: white;">
    <div id="app" class="head-background @yield('landingcover')">
        <div class="@yield('overlay')">
        <nav class="navbar navbar-expand-md navbar-dark bg-black-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('images/logo-ide-navbar.png') }}" alt="IlmuDewantara" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-white @yield('nav-home')" href="/landing">{{ __('HOME')
                                    }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-white @yield('nav-modul')" href="/modul/list">{{ __('MODUL')
                                    }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-white @yield('nav-artikel')" href="/">{{ __('ARTIKEL')
                                    }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-white @yield('nav-subscription')" href="/">{{
                                    __('SUBSCRIPTION') }}</a>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link nav-link-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav-link-white" href="{{ route('register') }}">{{ __('Register')
                                    }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown text-uppercase">
                                <a id="navbarDropdown" class="nav-link nav-link-white dropdown-toggle" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-link-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- <div class="@yield('overlay')"> -->
            <main class="py-4">
                @yield('content')
            </main>
        <!-- </div> -->

        <div class="container bg-gray">
            <footer class="pt-5">
                <div class="row justify-content-around">
                    <div class="col-md-5 mb-3">
                        <form>
                            <h5>Leave A Message:</h5>
                            {{-- <p>Monthly digest of what's new and exciting from us.</p> --}}
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Message</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Leave a message">
                                <button class="btn btn-primary" type="button">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 col-md-2 mb-3">
                        <h6>IlmuDewantara</h6>
                        <ul class="nav flex-column text-light" style="font-size: 15px;">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Modules</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">IDe-Watch</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Blog</a></li>
                            {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h6>Contact Us</h6>
                        <ul class="nav flex-column text-light" style="font-size: 15px;">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">+6287712345678</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">+62212345</a>
                            </li>
                            {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Pricing</a>
                            </li> --}}
                            {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3" style="font-size: 15px;">
                        <h6>Connect with us</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Instagram</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Twitter</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Facebook</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Tiktok</a></li>
                            {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            --}}
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2022 IlmuDewantara. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook" />
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    </div>

</body>

</html>
