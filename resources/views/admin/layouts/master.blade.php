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
                    <img src="{{ asset('storage/Asset-1.webp') }}" alt="">
                    </a>
                    <a href="index.html" class="logo-small">
                    <img src="{{ asset('storage/logo-small.png') }}" alt="">
                    </a>
                </div>
                <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
                </span>
                </a>
                <ul class="nav user-menu">
                    <li class="nav-item">
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                            </a>
                            <form action="#">
                                <div class="searchinputs">
                                    <input type="text" placeholder="Search Here ...">
                                    <div class="search-addon">
                                        <span><img src="{{ asset('storage/icons/closes.svg') }}" alt="img"></span>
                                    </div>
                                </div>
                                <a class="btn" id="searchdiv"><img src="{{ asset('storage/icons/search.svg') }}" alt="img"></a>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="{{ asset('storage/icons/notification-bing.svg') }}" alt="img"> <span class="badge rounded-pill">4</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('storage/profiles/avatar-02.jpg') }}">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('storage/profiles/avatar-03.jpg') }}">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('storage/profiles/avatar-06.jpg') }}">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('storage/profiles/avatar-17.jpg') }}">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('storage/profiles/avatar-13.jpg') }}">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
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
                            <li>
                                <a href="index.html"><img src="{{ asset('storage/icons/dashboard.svg') }}" alt="img"><span> Dashboard</span> </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/users1.svg') }}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="userlists.html">Users List</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/product.svg') }}" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="productlist.html">Product List</a></li>
                                    <li><a href="addproduct.html">Add Product</a></li>
                                    <li><a href="categorylist.html">Category List</a></li>
                                    <li><a href="addcategory.html">Add Category</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/purchase1.svg') }}" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="purchaselist.html">Purchase List</a></li>
                                    <li><a href="addpurchase.html">Add Purchase</a></li>
                                    <li><a href="importpurchase.html">Import Purchase</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/icons/users1.svg') }}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="userlist.html">User List</a></li>
                                    <li><a href="adduser.html">Add User</a></li>
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
        <script src="{{ asset('js/admin/script.js') }}"></script>
    </body>
</html>
