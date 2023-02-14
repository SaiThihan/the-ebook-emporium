@extends('layouts.app')

@section('title','Register Page')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Register #07</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 ">
                <div class="wrap d-md-flex">
                    {{-- <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>Welcome to login</h2>
                            <p>Don't have an account?</p>
                            <a href="{{ route('auth#registerPage') }}" class="btn btn-white btn-outline-white">Sign Up</a>
                        </div>
              </div> --}}
                    <div class="login-wrap p-4 p-lg-5 w-100">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Sign In</h3>
                      </div>
                            {{-- <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div> --}}
                  </div>
                    <form action="{{ route('register') }}" class="signin-form" method="post">
                    @csrf
                    <div class="row">
                        @error('terms')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label class="label" for="name">Name</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-group mb-3">
                                <label class="label" for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="phone">
                            </div>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-group mb-3">
                                <label class="label" for="gender">Gender</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="">Choose gender...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            @error('gender')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-group mb-3">
                                <label class="label" for="password_confirmation">Password</label>
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password_confirmation">
                            </div>
                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username" name="email">
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-group mb-3">
                                <label class="label" for="address">Address</label>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" cols="30" rows="10"></textarea>
                            </div>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <div class="ms-3 mt-5 form-group">
                                <input type="checkbox" name="term" class="form-check-input me-3 @error('term') is-invalid @enderror">I agree terms and policies.
                            </div>
                            @error('term')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                <div class="row">
                    <div class="form-group col-6 offset-3 mt-5">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                    </div>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-100 text-right">

                        <a href="{{ route('auth#loginPage') }}" class="text-danger">Already has an account?</a>
                    </div>
                                {{-- <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div> --}}
                </div>
              </form>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

