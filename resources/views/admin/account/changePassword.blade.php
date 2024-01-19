@extends('admin.layouts.master')

@section('title', 'Change Password')

@section('content')
    <section style="background-color: #eee;min-height:90vh;padding-top:10%">
        <div class="row col-lg-4 offset-4">
            <a href="{{route('category#list') }}">
                <div class="btn btn-primary mb-5 col-2">
                    <i class="fa-solid fa-arrow-left me-2"></i>Back
                </div>
            </a>
            @if(session('passwordChangeSuccess'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('passwordChangeSuccess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session('passwordNotMatch'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                <strong><i class="fa-solid fa-circle-xmark me-2"></i>{{ session('passwordNotMatch') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <form action="{{ route('admin#changePassword') }}" method="POST">
            @csrf
            <div class="bg-light p-5 col-lg-4 offset-4">
                <div class="col-12 mb-5">
                    <h3>Change Password</h3>
                </div>
                <div class="form-group">
                    <label for="oldPassword">Old Password</label>
                    <input type="password" name="oldPassword" class="form-control @error('oldPassword') is-invalid @enderror">
                    @error('oldPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" name="newPassword" class="form-control @error('newPassword') is-invalid @enderror">
                    @error('newPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror">
                    @error('confirmPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-4 offset-8">
                    <input type="submit" value="Save" class="btn btn-warning col-12 mt-2">
                </div>
            </div>
        </form>
    </section>
@endsection
