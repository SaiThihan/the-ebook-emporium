@extends('admin.layouts.master')

@section('title', 'User Details')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <a href="{{ route('category#list') }}">
                    <div class="btn btn-primary mb-5 ms-1 col-1 ">
                        <i class="fa-solid fa-arrow-left me-2"></i>Back
                    </div>
                </a>
                @if(session('updateSuccess'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('updateSuccess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 profile-head">
                        <h3 class="col-4 offset-4 text-center"><i class="fa-solid fa-user me-2"></i>Your Profile</h3>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center py-5" style="min-height: 380px">
                            @if (Auth::user()->image == null)
                                <img src="{{ asset('storage/image/defaultUser1.png') }}" class="rounded">
                            @else
                                <img src="{{ asset('storage/admin/' . Auth::user()->image) }}" class="rounded">
                            @endif
                            <div class="d-flex justify-content-center mb-2 mt-4">
                                <a href="{{ route('admin#edit') }}" class="btn btn-primary">
                                    <i class="fa-solid fa-user-pen me-2"></i>Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body py-5" style="height: 380px">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gender</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->gender }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Role</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
