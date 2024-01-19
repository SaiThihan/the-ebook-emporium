<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-datetimepicker.min.css') }}">

        {{-- fontawesome  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="">
        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left active text-center">
                    <a href="index.html" class="logo">
                    <img src="{{ asset('storage/icons/logo-lg.png') }}" style="width:220px !important" alt="">
                    </a>
                    <a href="index.html" class="logo-small">
                    <img src="{{ asset('storage/icons/logo-sm.svg') }}" alt="">
                    </a>
                    <a id="toggle_btn" href="javascript:void(0);"> </a>
                </div>
                <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
                </span>
                </a>
                <ul class="nav user-menu">
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img me-2">
                            @if (Auth::user()->image == null)
                                <img src="{{ asset('storage/image/defaultUser1.png') }}" alt="profile image" class="rounded">
                            @else
                                <img src="{{ asset('storage/admin/' . Auth::user()->image) }}" alt="profile image" class="rounded">
                            @endif
                            <span class="status online"></span>

                        </span>
                        <div class="text-muted fs-6">{{ Auth::user()->name }}<i class="fa-solid fa-angle-down ms-2"></i></div>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilename">
                                <div class="profileset">
                                    <span class="user-img">
                                        @if (Auth::user()->image == null)
                                            <img src="{{ asset('storage/image/defaultUser1.png') }}" alt="profile image" class="rounded">
                                        @else
                                            <img src="{{ asset('storage/admin/' . Auth::user()->image) }}" alt="profile image" class="rounded">
                                        @endif
                                        <span class="status online"></span>
                                    </span>
                                    <div class="profilesets">
                                        <h6>{{ Auth::user()->name }}</h6>
                                        <h5>{{ Auth::user()->role }}</h5>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <a class="dropdown-item" href="{{ route('admin#details') }}"> <i class="me-2" data-feather="user"></i> My Profile</a>
                                <a class="dropdown-item" href="{{ route('admin#changePasswordPage') }}"> <i class="fa-solid fa-key me-2"></i> Change Password</a>
                                <hr class="m-0">
                                {{-- <a class="dropdown-item logout pb-0" href="signin.html"><img src="{{ asset('storage/icons/log-out.svg') }}" class="me-2" alt="img">Logout</a> --}}
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item logout pb-0"><img src="{{ asset('storage/icons/log-out.svg') }}" class="me-2" alt="img">Logout</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="generalsettings.html">Settings</a>
                        <a class="dropdown-item" href="signin.html">Logout</a>
                    </div>
                </div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/users1.svg') }}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{route('admin#customer#list')}}">Users List</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/product.svg') }}" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ route('products.index') }}">Product List</a></li>
                                    <li><a href="{{ route('products.create') }}">Add Product</a></li>
                                    <li><a href="{{ route('category#list')}}">Category List</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/purchase1.svg') }}" alt="img"><span>Manage Orders</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{route('order.index')}}">Order Lists</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-wrapper pagehead">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="{{ asset('js/admin/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/admin/feather.min.js') }}"></script>
        <script src="{{ asset('js/admin/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/admin/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/admin/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('js/admin/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('js/admin/script.js') }}"></script>
    </body>
</html>
