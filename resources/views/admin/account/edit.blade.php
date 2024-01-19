@extends('admin.layouts.master')

@section('title', 'Profile Edit')

@section('content')
<!-- <section style="background-color: #eee; height:auto">
   <div class="content col-lg-12" style="min-height:90vh">
      <div class="row" style="margin-top: 5%">
         <div class="row">
            <div class="col-1 offset-1">
               <a href="{{ route('admin#details') }}">
                  <div class="btn btn-primary mb-5 ms-1">
                     <i class="fa-solid fa-arrow-left me-2"></i>Back
                  </div>
               </a>
            </div>
         </div>
         <div class="col-10 offset-1">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 profile-head">
               <h3 class="col-4 offset-4 text-center"><i class="fa-solid fa-user me-2"></i>Your Profile</h3>
            </nav>
         </div>
      </div>
      <div class="col-10 offset-1">
         <div class="card">
            <div class="card-body">
               <form action="{{ route('admin#updateUserDetails') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                           <label>User Name</label>
                           <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name...">
                           @error('name')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Phone</label>
                           <input type="number" name="phone" class="form-control text-muted @error('phone') is-invalid @enderror" placeholder="Enter your phone number..." value="{{ old('phone', Auth::user()->phone) }}">
                           @error('phone')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Gender</label>
                           <select class="form-control text-muted @error('gender') is-invalid @enderror" name="gender">
                           <option value="male" @if(Auth::user()->gender == 'male') selected @endif>Male</option>
                           <option value="female" @if(Auth::user()->gender == 'female') selected @endif>Female</option>
                           </select>
                           @error('gender')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Email</label>
                           <input type="email" name="email" class="form-control text-muted @error('email') is-invalid @enderror" value="{{ old('email', Auth::user()->email) }}" placeholder="Enter your email... ">
                           @error('email')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Address</label>
                           <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', Auth::user()->address) }}" placeholder="Enter your address...">
                           @error('address')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Role</label>
                           <select class="form-control text-muted @error('role') is-invalid @enderror" disabled>
                           <option value="admin" @if(Auth::user()->gender == 'admin') selected @endif>Admin</option>
                           <option value="user" @if(Auth::user()->gender == 'user') selected @endif>User</option>
                           </select>
                           @error('role')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-12 offset-lg-1">
                        <div class="form-group uploadedimage">
                           <label> Profile Picture</label>
                            <div class="">
                                 @if (Auth::user()->image == null)
                                 <img src="{{ asset('storage/image/defaultUser1.png') }}" class="img-thumbnail mw-100 h-100">
                                 @else
                                 <img src="{{ asset('storage/admin/' . Auth::user()->image) }}" class="img-thumbnail mw-100 h-100">
                                 @endif
                            </div>
                           <div class="form-group">
                              <label for="image">Choose a image...</label>
                              <input type="file" name="image" class="form-control col-4 @error('image') is-invalid @enderror">
                              @error('image')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12 ">
                        <div class="row">
                           <div class="col-4 offset-2">
                              <button class="btn bg-warning col-6">
                              <i class="fa-solid fa-circle-up me-2"></i>Update
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>
</section> -->
<div class="page-header">
    <div class="row">
        <div class="col-1 offset-1">
            <a href="{{ route('admin#details') }}">
                <div class="btn btn-primary mb-1">
                    <i class="fa-solid fa-arrow-left me-2"></i>
                </div>
            </a> 
        </div>
    </div>
    <div class="page-title mx-auto">
        <h4>User Profile</h4>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="profile-set">
            <div class="profile-head"></div>
            <div class="profile-top">
                <div class="profile-content">
                    <div class="profile-contentimg">
                        @if (Auth::user()->image == null)
                        <img src="{{ asset('storage/image/defaultUser1.png') }}" class="img-thumbnail mw-100 h-100">
                        @else
                        <img src="{{ asset('storage/admin/' . Auth::user()->image) }}" class="img-thumbnail mw-100 h-100">
                        @endif
                    </div>
                    <div class="profile-contentname">
                        <h2>{{Auth::user()->name}}</h2>
                        <h4>Updates Your Photo and Personal Details.</h4>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('admin#updateUserDetails') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control" placeholder="Enter your name...">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control text-muted @error('phone') is-invalid @enderror" placeholder="Enter your phone number..." value="{{ old('phone', Auth::user()->phone) }}">
                        @error('phone')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                    <label>Email</label>
                        <input type="email" name="email" class="form-control text-muted @error('email') is-invalid @enderror" value="{{ old('email', Auth::user()->email) }}" placeholder="Enter your email... ">
                        @error('email')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', Auth::user()->address) }}" placeholder="Enter your address...">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Gender</label>
                           <select class="form-control text-muted @error('gender') is-invalid @enderror" name="gender">
                           <option value="male" {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                           <option value="female" {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                           </select>
                        @error('gender')
                           <div class="invalid-feedback row">
                              {{ $message }}
                           </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="image">Choose a image...</label>
                        <input type="file" name="image" class="form-control col-4 @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label>Role</label>
                        <select class="form-control text-muted @error('role') is-invalid @enderror" disabled>
                           <option value="admin" @if(Auth::user()->gender == 'admin') selected @endif>Admin</option>
                           <option value="user" @if(Auth::user()->gender == 'user') selected @endif>User</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-4  mt-4 mx-auto">
                    <button class="btn bg-warning col-6">
                        <i class="fa-solid fa-circle-up me-2"></i>Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection