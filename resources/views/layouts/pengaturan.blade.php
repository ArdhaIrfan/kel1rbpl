<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link
    href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

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
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script
            src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
        </script>

    <!-- Styles -->
    <link href="{{ asset('css/app-layout.css') }}" rel="stylesheet">

    @yield('local_css')

    <style>
        /* Create two equal columns that floats next to each other */

.sidenav{
    z-index: 1;
    font-size: 15px;
}

.column1 {
  float: left;
  width: 15%;
  margin-left:150px ;
  padding: 0px 0px 0px 50px;
  /* height: 300px; Should be removed. Only for demonstration */
}

.column2 {
  float: left;
  width: 60%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */

}

.column2 input {
    background-color: transparent;
}

.column2 select {
    background-color: transparent;
    color: #6C757D;
}

.date-time .nomor-telepon #tanggal-lahir input {
    background-color: transparent;
    color: #6C757D;
}

#tanggal-lahir  {
    background-color: transparent;
    color: #6C757D;
}

.sidenav a{
  display: block;
  margin-top: 10px;
  padding: 5px 0px;
  color:#f1f1f1;
  text-decoration: none;
  border-left-color: #A7A9AC;
  border-width: 1px;
}

#btn  {
    background-color: #ffa500;
}

#buttonid{
    background-color: #ffa500;
}

.sidenav a:hover {
    color: #f1f1f1;
    transition: all 1s;
    padding: 5px 10px 5px 0px;
    background-color: #ffa500;
    border-radius:3px;

    }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 10px;}
    }
    </style>




</head>

<body style="background: url('/gambar_modul/Background.png'); color: white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('images/logo-ide-navbar.png') }}" alt="IlmuDewantara" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-white" href="/">{{ __('HOME') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-white" href="/modul/list">{{ __('MODUL') }}</a>
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
                                    <a class="nav-link nav-link-white"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link nav-link-white"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
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


            <div class="row alingn-items-start">
                <div class="column column1 border-end">
                    <div class="sidenav " id="myTab" role="tablist">
                        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img class="me-3" style="width: 20px" src="/gambar_modul/user.png" alt="" >Ubah Profil</a>
                        <a href="/"><img class="me-3" style="width: 20px" src="/gambar_modul/langganan.png" alt=""><i class="fas fa-user-tie"></i>Langganan</a>
                        <a href="/"><img class="me-3" style="width: 20px" src="/gambar_modul/settings.png" alt=""><i class="far fa-clipboard"></i>Settings</a>
                        {{-- <br> <br> <br> --}}
                      </div>
                </div>
                <div class="column column2 tab-content" style="background-color:;" id="myTabContent">
                    @yield('content')

                </div>
              </div>


        <div style="margin-top: 500px;" class="container-fluid bg-gray">
            <footer class="pt-5">
                <div class="row justify-content-around">
                    <div class="col-md-5 mb-3">
                        <form>
                            <h5>Leave A Message:</h5>
                            {{-- <p>Monthly digest of what's new and exciting from us.</p> --}}
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Message</label>
                                <input id="newsletter1" type="text" class="form-control"
                                    placeholder="Leave a message">
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
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-secondary">+6287712345678</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">+62212345</a>
                            </li>
                            {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Pricing</a></li> --}}
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
                            {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi"
                                    width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi"
                                    width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi"
                                    width="24" height="24">
                                    <use xlink:href="#facebook" />
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    @yield('js')
</body>

</html>
