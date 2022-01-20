
@section('title', 'Login')

@extends('layouts.default')

@section('content')

<link href="{{ asset('login.css') }}" rel="stylesheet">

<div class="main">
        <nav class="">
            <div class="container-fluid">
              <a href="/" style="text-decoration: none">
                <h1 class="logo">Tasanesia</h1>
              </a>
            </div>
        </nav>
        <div class="content">
            <div class="container ">
                <div class="card" style="width: 23rem;">
                  <div class="card-title">
                    <a class="btn" href="/" style="" type="close"><i class="far fa-times-circle"></i></a>
                  </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                            <div class="col-12">
                                <h4>Sign In</h4>
                            </div>
                            <div class="col1">
                                <p class="text2">New user? <a href="/register" style="border: none; color: #315343;">Create an account</a> </p>
                            </div>
                        </div>
                          <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                          <div class="mb-3" style="margin-top: -17px !important;">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <label for="email" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        <label>
                          <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>  {{ __('Remember Me') }}
                        </label>
                        @if (Route::has('password.request'))
                                    <a class="p-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        <button type="submit" class="btn btn-primary" style=" color: white; background-color: #315343; font-size: 15px; width: 100%;">{{ __('Login') }}</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

@endsection
