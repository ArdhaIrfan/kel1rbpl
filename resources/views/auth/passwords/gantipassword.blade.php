@extends('layouts.login-register-layout')

@section('content')
<div class="auth-content py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header py-3"> <h4>&nbsp &nbsp<b>{{ __('Ganti Password') }}</b></h4> </div>

                <div class="card-body py-3">
                    <form method="POST" action="/profil/ganti-password/save">
                        @csrf

                        <div class="form-group row my-4">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="old_password" type="password" class="form-control" name="old_password" placeholder="Old Password*" required autofocus>

                                @error('old_password')
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
                                <input id="new_password" type="password" class="form-control" name="new_password" placeholder="New Password" required>

                                @error('new_password')
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
                                @if (\Session::has('error'))
                                    <div class="alert alert-danger">
                                        {!! \Session::get('error') !!}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="form-group row my-4">
                            <div class="col-md-1"></div>
                            <div class="mb-3 col-md-10">
                                <button type="submit" class="btn btn-yellow pl-4 pr-4">
                                    {{ __('Change Password') }}
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
</div>
@endsection
