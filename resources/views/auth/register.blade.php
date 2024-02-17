@extends('layouts.app')

@section('content')
<div class="container" style="padding: 10px; width: 100%;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="padding: 10%">
                <div class="card-header" style="font-size: 14px">{{ __('') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-8 col-lg-8">
                                <label for="name" class="col-form-label text-md-end " style="font-size: 17px " > <strong>{{ __('Name') }}</label>

                                <div class="">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <label for="id_number" class="ol-form-label text-md-end" style="font-size: 17px"> <strong>{{ __('ID Number') }}</label>

                                <div class="">
                                    <input id="id_number" type="id_number" class="form-control @error('id_number') is-invalid @enderror" name="id_number" value="{{ old('id_number') }}" required autocomplete="id_number">

                                    @error('id_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <label for="email" class="col-form-label text-md-end" style="font-size: 17px"> <strong>{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col-md-6 col-lg-6">
                                <label for="password" class="col-form-label text-md-end" style="font-size: 17px"> <strong>{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label for="password-confirm" class="col-form-label text-md-end" style="font-size: 17px"> <strong>{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning" style="font-size: 17px; border-radius: 10px;">
                                    <Strong>{{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="width: 34%;">
            <img class="col-md-6" src="images/login-1.png" style="width:100%">
        </div>
    </div>
</div>
@endsection
