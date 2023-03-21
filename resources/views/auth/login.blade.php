@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
    <link rel="stylesheet" href="/header.css">
    <div class="container w-full sm:w-2/3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <img src="img/burger.png" alt="burger" class="w-1/3 m-auto">
                    <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4" id="product-title-1">
                        Admin Login Form
                    </h3>
                    <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">Securely log in to your
                        admin <br>
                        dashboard with our easy-to-use login form.</p>
                    <br>
                    <div class="card-body items-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 w-3/4 m-auto">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 w-3/4 m-auto">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="mb-3 -mt-4 -ml-24 sm:-ml-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto">
                        <div class="">
                            <button type="submit" class="bg-orange-500 rounded-2xl text-white mb-4 py-2 px-5">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
