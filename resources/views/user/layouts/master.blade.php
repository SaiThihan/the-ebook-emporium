<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <!--[if IE
            ]><meta http-equiv="X-UA-Compatible" content="IE=edge"
        /><![endif]-->
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link
            href="{{asset('storage/user_image/book-shelf.png');}}"
            rel="shortcut icon"
        />
        <title>Ebook Emporium | Digital Ebooks</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />

        <!--====== Google Font ======-->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
            rel="stylesheet"
        />

        <!--====== Vendor Css ======-->
        <link rel="stylesheet" href="{{asset('css/user/vendor.css');}}" />

        <!--====== Utility-Spacing ======-->
        <link rel="stylesheet" href="{{asset('css/user/utility.css');}}" />

        <!--====== App ======-->
        <link rel="stylesheet" href="{{asset('css/user/app.css');}}" />
    </head>
    <body class="config">
        <div class="preloader is-active">
            <div class="preloader__wrap">
                <img
                    class="preloader__img"
                    src="{{asset('storage/user_image/preloader.png');}}"
                    alt=""
                />
            </div>
        </div>

        <!--====== Main App ======-->
        <div id="app">
            <!--====== Header Wrapper ======-->
            <div class="header-wrapper">
                <!--====== Main Header ======-->
                <header class="header--style-1 header--box-shadow">
                    <!--====== Nav 1 ======-->
                    <!--Nav Cut-->
                    <!--====== End - Nav 1 ======-->

                    <!--====== Nav 2 ======-->
                    <nav class="secondary-nav-wrapper">
                        <div class="container">
                            <!--====== Secondary Nav ======-->
                            <div class="secondary-nav">
                                <!--====== Dropdown Main plugin ======-->
                                <div class="menu-init" id="navigation1">
                                    <h3 class="text-white text-size-sm-down">
                                        <a href="{{route('user#home')}}" class="text-sm"
                                            >Ebook Emporium</a
                                        >
                                    </h3>
                                </div>
                                <!--====== End - Dropdown Main plugin ======-->

                                <!--====== Dropdown Main plugin ======-->
                                <div class="menu-init" id="navigation3">
                                    <button
                                        class="btn btn--icon toggle-button"
                                        type="button"
                                    >
                                        <svg
                                            height="20"
                                            id="IconChangeColor"
                                            style="
                                                enable-background: new 0 0 32 32;
                                            "
                                            version="1.1"
                                            viewBox="0 0 32 32"
                                            width="20"
                                            xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                        >
                                            <path
                                                d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"
                                                id="mainIconPathAttribute"
                                            ></path>
                                        </svg>
                                    </button>

                                    <!--====== Menu ======-->
                                    <div class="ah-lg-mode">
                                        <span class="ah-close">✕ Close</span>

                                        <!--====== List ======-->
                                        <ul
                                            class="ah-list ah-list--design1 ah-list--link-color-secondary"
                                        >
                                            <li>
                                                <a href="{{route('user#shop')}}">Explore</a>
                                            </li>
                                            <li>
                                                <a href="{{route('user#about')}}">About Us</a>
                                            </li>
                                            <li
                                                class="has-dropdown"
                                                data-tooltip="tooltip"
                                                data-placement="left"
                                                title=""
                                            >
                                                <a
                                                    ><i
                                                        class="far fa-user-circle"
                                                    ></i
                                                ></a>

                                                <!--====== Dropdown ======-->

                                                <span
                                                    class="js-menu-toggle"
                                                ></span>
                                                <ul style="width: 120px">
                                                    <li>
                                                        <a href="{{route('user#dashboard')}}"
                                                            ><i
                                                                class="fas fa-user-circle u-s-m-r-6"
                                                            ></i>

                                                            <span
                                                                >Account</span
                                                            ></a
                                                        >
                                                    </li>
                                                    <li>
                                                        <form
                                                            action="{{route('logout');}}"
                                                            method="post"
                                                            style="
                                                                margin-left: 15px;
                                                            "
                                                        >
                                                            @csrf
                                                            <button
                                                                type="submit"
                                                                style="
                                                                    border: none;
                                                                    background-color: white;
                                                                "
                                                            >
                                                                <i
                                                                    class="fas fa-unlock u-s-m-r-6 font-size:12px;color: #333333;font-weight:600; cursor:pointer;"
                                                                    style="
                                                                        font-style: normal;
                                                                        display: inline-block;
                                                                    "
                                                                ></i>
                                                                <span
                                                                    style="
                                                                        background-color: white;
                                                                        font-size: 12px;
                                                                        color: #333333;
                                                                        font-weight: 600;
                                                                        cursor: pointer;
                                                                    "
                                                                    >Logout</span
                                                                >
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                        </ul>
                                        <!--====== End - List ======-->
                                    </div>
                                    <!--====== End - Menu ======-->
                                </div>
                                <!--====== End - Dropdown Main plugin ======-->
                            </div>
                            <!--====== End - Secondary Nav ======-->
                        </div>
                    </nav>
                    <!--====== End - Nav 2 ======-->
                </header>
                <!--====== End - Main Header ======-->
            </div>
            <!--====== End - Header Wrapper ======-->

            <!--====== App Content ======-->
            @yield('content')
            <!--====== End - App Content ======-->

            <!--====== Main Footer ======-->
            <footer>
                <div class="outer-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">
                                    <span class="outer-footer__content-title"
                                        >Contact Us</span
                                    >
                                    <div class="outer-footer__text-wrap">
                                        <i class="fas fa-home"></i>

                                        <span
                                            >4247 Ashford Drive Virginia
                                            VA-20006 USA</span
                                        >
                                    </div>
                                    <div class="outer-footer__text-wrap">
                                        <i class="fas fa-phone-volume"></i>

                                        <span>(+0) 900 901 904</span>
                                    </div>
                                    <div class="outer-footer__text-wrap">
                                        <i class="far fa-envelope"></i>

                                        <span>contact@domain.com</span>
                                    </div>
                                    <div class="outer-footer__social">
                                        <ul>
                                            <li>
                                                <a
                                                    class="s-fb--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-facebook-f"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-tw--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-twitter"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-youtube--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-youtube"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-insta--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-instagram"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-gplus--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-google-plus-g"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="outer-footer__content u-s-m-b-40"
                                        >
                                            <span
                                                class="outer-footer__content-title"
                                                >Information</span
                                            >
                                            <div
                                                class="outer-footer__list-wrap"
                                            >
                                                <ul>
                                                    <li>
                                                        <a href="#"
                                                            >Cart</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            >Account</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            >Manufacturer</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            >Finance</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            >Shop</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="outer-footer__content u-s-m-b-40"
                                        >
                                            <div
                                                class="outer-footer__list-wrap"
                                            >
                                                <span
                                                    class="outer-footer__content-title"
                                                    >Our Company</span
                                                >
                                                <ul>
                                                    <li>
                                                        <a href="#"
                                                            >About us</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            >Contact Us</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            >Sitemap</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            >Delivery</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="#"
                                                            >Store</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="outer-footer__content">
                                    <span class="outer-footer__content-title"
                                        >Join our Newsletter</span
                                    >
                                    <form class="newsletter">
                                        <div class="newsletter__group">
                                            <label for="newsletter"></label>

                                            <input
                                                class="input-text input-text--only-white"
                                                type="text"
                                                id="newsletter"
                                                placeholder="Enter your Email"
                                            />

                                            <button
                                                class="btn btn--e-brand newsletter__btn"
                                                type="submit"
                                            >
                                                SUBSCRIBE
                                            </button>
                                        </div>

                                        <span class="newsletter__text"
                                            >Subscribe to the mailing list to
                                            receive updates on promotions, new
                                            arrivals, discount and
                                            coupons.</span
                                        >
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="lower-footer__content">
                                    <div class="lower-footer__copyright">
                                        <span>Copyright © 2023</span>

                                        <a href="index.html"
                                            ><span>Ebook Emporium</span></a
                                        >

                                        <span>All Right Reserved</span>
                                    </div>
                                    <div class="lower-footer__payment">
                                        <ul>
                                            <li>
                                                <img
                                                    src="{{asset('storage/user_image/logo/kbz pay.png');}}"
                                                    width="30px"
                                                    height="30px"
                                                    alt=""
                                                />
                                            </li>
                                            <li>
                                                <img
                                                    src="{{asset('storage/user_image/logo/wave pay.png');}}"
                                                    width="30px"
                                                    height="30px"
                                                    alt=""
                                                />
                                            </li>
                                            <li>
                                                <img
                                                    src="{{asset('storage/user_image/logo/ayapay.png');}}"
                                                    width="30px"
                                                    height="30px"
                                                    alt=""
                                                />
                                            </li>
                                            <li>
                                                <img
                                                    src="{{asset('storage/user_image/logo/cbpay.png');}}"
                                                    width="30px"
                                                    height="30px"
                                                    alt=""
                                                />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
