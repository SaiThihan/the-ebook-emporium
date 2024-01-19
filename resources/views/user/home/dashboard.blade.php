@extends('user.layouts.master') @section('content')
    <div class="app-content">
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-30">

        </div>
        <!--====== End - Section 1 ======-->

        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="row">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">
                                            Edit Profile
                                        </h1>

                                        <span class="dash__text u-s-m-b-30">Looks like you haven't update your
                                            profile</span>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form class="dash-edit-p" action="{{ route('userUpdate') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            @if (Auth::user()->image == null)
                                                                <img src="{{ asset('storage/image/defaultUser1.png') }}" class="img-thumbnail" style="width:200px;">
                                                            @else
                                                                <img src="{{ asset('storage/admin/' . Auth::user()->image) }}" class="img-thumbnail" style="width:200px;">
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-lname">Choose image *</label>

                                                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="reg-lname" name="image"/>
                                                            @error('image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-fname">NAME *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="text" name="name" id="reg-fname" value="{{ old('name', Auth::user()->name) }}" placeholder="John" />
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-lname">EMAIL *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="email" id="reg-lname" name="email" value="{{ old('email', Auth::user()->email) }}"/>
                                                        </div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-lname">PHONE *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="number" id="reg-lname" name="phone" value="{{ old('phone', Auth::user()->phone) }}" />
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="gender">GENDER</label><select
                                                                class="select-box select-box--primary-style u-w-100"
                                                                id="gender" name="gender">
                                                                <option selected="">
                                                                    Select
                                                                </option>
                                                                <option value="male" @if(Auth::user()->gender == 'male') selected @endif>
                                                                    Male
                                                                </option>
                                                                <option value="female" @if(Auth::user()->gender == 'female') selected @endif>
                                                                    Female
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <label class="gl-label" for="reg-lname">ADDRESS *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="text" name="address" id="reg-lname" value="{{ old('address', Auth::user()->address) }}" />
                                                        </div>
                                                    </div>

                                                    <button class="btn btn--e-brand-b-2" type="submit">
                                                        SAVE
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
@endsection