@extends('layouts.login-register-layout')

@section('nav-register')
nav-active
@endsection

@section('content')
<div class="auth-content py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header py-3"> <h4>&nbsp &nbsp<b>{{ __('Register') }}</b></h4> </div>

                <div class="card-body py-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row my-4">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name*" required autocomplete="name" autofocus>

                                @error('name')
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email*" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password*" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row my-4">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password*" required autocomplete="new-password">
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row my-4">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="terms-conditions" class="mr-2" type="checkbox" name="terms_conditions" required>
                                <label for="terms-conditions" class="text-md-right">Saya telah memahami <a href="" class="txt-yellow">Terms and Conditions</a></label>
                            </div>
                            <div class="col-md-1"></div>
                        </div>


                        <div class="form-group row my-4">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-yellow pl-4 pr-4 offset-md-5 offset-sm-1">
                                    {{ __('Register Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
