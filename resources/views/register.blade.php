@extends('layouts.app')

@section('title','Register Page')

@section('content')
<section class="ftco-section" style="padding:3em 0 !important;background-image: url('{{ asset('storage/login-reg-bg.jpg') }}'); background-size: cover; background-repeat:no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
               
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 ">
                <div class="wrap d-md-flex">
                    
                    <div class="login-wrap p-4 p-lg-5 w-100" style="border-radius: 10px;background-color:#FFFBEB">
                  <div class="d-flex">
                      <div class="w-100">
                          <h1 class="mb-4 text-center">Register Here!</h1>
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
                        <button type="submit" class="form-control btn btn-dark bg-gradient submit px-3">Sign In</button>
                    </div>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-100 text-right">

                        <a href="{{ route('auth#loginPage') }}" class="text-danger">Already has an account?</a>
                    </div>
                               
                </div>
              </form>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
@endsection


