@extends('layouts.app')

@section('content')
<div class="container" style="padding: 10px; width: 100%; margin-bottom: 10%;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="padding: 10%;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-1">
                            <label for="email" style="font-size: 16px" class="col-md-3 col-form-label text-md-end"> <strong>{{ __('Email Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="row mb-1">
                            <label for="password" style="font-size: 16px" class="col-md-3 col-form-label text-md-end"> <strong>{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-20">
                            <div class="col-md-12 offset-md-12">
                                <div class="form-check" style="display: flex; flex-direction: row; align-items: center;">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> &nbsp;
                                        <label style="font-size: 14px; margin-top: 8px;" class="form-check-label" for="remember"> <strong>{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" style="font-size: 16px; border-radius: 10px;" class="btn btn-primary" > {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-warning" style="font-size: 16px; border-radius: 10px;" href="{{ route('register') }}">
                                        Register?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="width:40%">
            <img class="col-md-6" src="images/login.png" style="width:100%">
        </div>
    </div>
</div>
<!-- <div class="" style="width: 100px; height: 100px; background-image: url(images/login.png);">

</div> -->
@endsection