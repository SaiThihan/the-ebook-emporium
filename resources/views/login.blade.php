<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="{{asset('storage/user_image/book-shelf.png');}}" rel="shortcut icon">
        <title>Ebook Emporium | Digital Ebooks</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!--====== Google Font ======-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <!--====== Vendor Css ======-->
        <link rel="stylesheet" href="{{asset('css/user/vendor.css');}}">
        <!--====== Utility-Spacing ======-->
        <link rel="stylesheet" href="{{asset('css/user/utility.css');}}">
        <!--====== App ======-->
        <link rel="stylesheet" href="{{asset('css/user/app.css');}}">
    </head>
    <body style="background-image: url('{{ asset('storage/login-reg-bg.jpg') }}') !important; background-size: cover; background-repeat:no-repeat;">
        <div class="preloader is-active">
            <div class="preloader__wrap">
                <img class="preloader__img" src="{{asset('storage/user_image/preloader.png');}}" alt="">
            </div>
        </div>
        <!--====== App Content ======-->
        <div class="app-content">
            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">
                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-30" style="margin-top:50px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary" style="color:white !important">Welcome To Ebook Emporium</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->
                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8">
                                <div class="l-f-o" style="background-color:#FFFBEB;border-radius:10px;">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1" style="text-align: center;">SIGNIN</h1>
                                        <span class="gl-text u-s-m-b-30" style="text-align: center;">If you have an account with us, please log in.</span>
                                        <form class="l-f-o__form" action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="login-email">E-MAIL *</label>
                                                <input class="input-text input-text--primary-style @error('email') is-invalid @enderror" type="email" id="login-email" placeholder="Enter E-mail" value="{{ old('email') }}" name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        <small style="color: red;">{{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="login-password">PASSWORD *</label>
                                                <input class="input-text input-text--primary-style @error('password') is-invalid @enderror" type="password" id="login-password" placeholder="Enter Password" name="password">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        <small style="color: red;">{{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30" style="text-align: center;">
                                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button>
                                                </div>
                                            </div>
                                        </form>
                                        <h1 class="gl-h1">I'M NEW CUSTOMER</h1>
                                        <span class="gl-text u-s-m-b-30">By creating an account with our store, you will be able to move through the checkout process faster, store shipping addresses, view and track your orders in your account and more.</span>
                                        <div class="u-s-m-b-15">
                                            <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="{{ route('auth#registerPage') }}">CREATE AN ACCOUNT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->
        </div>
        </div>
        <!--====== End - App Content ======-->
        <!--====== Main Footer ======-->
        </div>
        <!--====== End - Main App ======-->
        <!--====== Vendor Js ======-->
        <script src="{{asset('js/user/vendor.js');}}"></script>
        <!--====== jQuery Shopnav plugin ======-->
        <script src="{{asset('js/user/jquery.shopnav.js');}}"></script>
        <!--====== App ======-->
        <script src="{{asset('js/user/app.js');}}"></script>
    </body>
</html>