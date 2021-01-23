@extends('layouts.app')

@section('content')
    <div class="container-fluid mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-4">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                    </div>
                </div>
                <form action="{{ route('login') }}">
                    @csrf
                    <div class="col-lg-8">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                                <div class="facebook text-center mr-3">
                                    <div class="fa fa-facebook"></div>
                                </div>
                                <div class="twitter text-center mr-3">
                                    <div class="fa fa-twitter"></div>
                                </div>
                                <div class="linkedin text-center mr-3">
                                    <div class="fa fa-linkedin"></div>
                                </div>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="line"></div> <small class="or text-center">Or</small>
                                <div class="line"></div>
                            </div>
                            <div class="row px-3"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label> 
                                <input class="mb-4 @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                            <div class="row px-3"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> 
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline"> 
                                    <input id="chk1"type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}> 
                                    <label for="chk1"class="custom-control-label text-sm"> {{ __('Remember Me') }}e</label>
                                </div> 
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="ml-auto mb-0 text-sm">{{ __('Forgot Your Password?') }}</a>
                                    @endif
                            </div>
                            <div class="row mb-3 px-3"> 
                                <button type="submit" class="btn btn-blue text-center">{{ __('Login') }}</button>
                            </div>
                            <div class="row mb-4 px-3">
                                @if (Route::has('register'))
                                <small class="font-weight-bold">Don't have an account? 
                                    <a class="text-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </small>
                                @endif 
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span
                            class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span>
                        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
    </div>
@endsection
