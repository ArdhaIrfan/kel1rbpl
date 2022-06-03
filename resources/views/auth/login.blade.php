@extends('layouts.login-register-layout')

@section('nav-login')
nav-active
@endsection

@section('content')
<div class="auth-content py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header py-3"><h5>&nbsp <b>{{ __('Login') }}</b></h5></div>

                <div class="card-body py-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row my-4">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>

                        </div>

                        <div class="form-group row my-4">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row my-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" class="text-md-right" for="remember">
                                        {{ __('Keep me logged in') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row my-3">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-yellow px-4">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link txt-yellow" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                    <br>
                                @endif
                                @if (Route::has('register'))
                                    <a class="btn btn-link txt-yellow" href="{{ route('register') }}">
                                        {{ __('Daftar Sekarang!') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
