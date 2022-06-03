@extends('layouts.login-register-layout')

@section('local_css')
<style>
    .auth-content{
        background-image: url('images/login-register-bg.png') !important;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card{
        border: 0;
    }

    .card-header{
        color: white;
        background-color: #343434;
    }

    .card-body{
        color: white;
        background-color: #1E1E1E;
    }

    .btn-yellow{
        color: #000000;
        background-color: #FBAD1C;
    }

    .txt-yellow{
        color: #FBAD1C;
    }

    main{
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg">
                <div class="card-header py-3"><h5>&nbsp<b>{{ __('Reset Password') }}</b></h5></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row my-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-yellow px-3">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
