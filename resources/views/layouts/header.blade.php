<!-- Header -->
<header class="header">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ route('homepage') }}" class="navbar-brand logo">
                    <img src="assets/img/tutorin-logo-last.jpg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('homepage') }}" class="menu-logo">
                        <img src="assets/img/tutorin-logo-last.jpg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li>
                        <a href="{{ route('homepage') }}">Beranda</a>
                    </li>
                    {{-- <li class="has-submenu">
                        <a href="">Mentor <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ route('homepage') }}">Mentor Dashboard</a></li>
                            <li><a href="{{ route('homepage') }}">Bookings</a></li>
                            <li><a href="{{ route('homepage') }}">Schedule Timing</a></li>
                            <li><a href="{{ route('homepage') }}">Mentee List</a></li>
                            <li><a href="{{ route('homepage') }}">Mentee Profile</a></li>
                            <li class="has-submenu">
                                <a href="{{ route('homepage') }}">Blog</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('homepage') }}">Blog</a></li>
                                    <li><a href="{{ route('homepage') }}">Blog View</a></li>
                                    <li><a href="{{ route('homepage') }}">Add Blog</a></li>
                                    <li><a href="{{ route('homepage') }}">Edit Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('homepage') }}">Chat</a></li>
                            <li><a href="{{ route('homepage') }}">Invoices</a></li>
                            <li><a href="{{ route('homepage') }}">Profile Settings</a></li>
                            <li><a href="{{ route('homepage') }}">Reviews</a></li>
                            <li><a href="{{ route('homepage') }}">Mentor Register</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="">Mentee <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Mentors</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('homepage') }}">Map Grid</a></li>
                                    <li><a href="{{ route('homepage') }}">Map List</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('homepage') }}">Search Mentor</a></li>
                            <li><a href="{{ route('homepage') }}">Mentor Profile</a></li>
                            <li><a href="{{ route('homepage') }}">Bookings</a></li>
                            <li><a href="{{ route('homepage') }}">Checkout</a></li>
                            <li><a href="{{ route('homepage') }}">Booking Success</a></li>
                            <li><a href="{{ route('homepage') }}">Mentee Dashboard</a></li>
                            <li><a href="{{ route('homepage') }}">Favourites</a></li>
                            <li><a href="{{ route('homepage') }}">Chat</a></li>
                            <li><a href="{{ route('homepage') }}">Profile Settings</a></li>
                            <li><a href="{{ route('homepage') }}">Change Password</a></li>
                        </ul>
                    </li> --}}
                    <li class="has-submenu">
                        <a href="">Halaman <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{route('homepage')}}">Voice Call</a></li>
                            <li><a href="{{route('homepage')}}">Video Call</a></li>
                            <li><a href="{{route('homepage')}}">Cari Tutor</a></li>
                            {{-- <li><a href="{{route('homepage')}}">Komponen</a></li> --}}
                            <li class="has-submenu">
                                <a href="{{route('homepage')}}">Nota pembayaran</a>
                                <ul class="submenu">
                                    <li><a href="{{route('homepage')}}">Semua nota</a></li>
                                    <li><a href="{{route('homepage')}}">Jadwal booking</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('homepage')}}">Halaman Utama</a></li>
                            <li><a href="{{route('homepage')}}">Login</a></li>
                            <li><a href="{{route('homepage')}}">Daftar</a></li>
                            <li><a href="{{route('homepage')}}">Lupa Password</a></li>
                        </ul>
                    </li>
                    {{-- <li class="has-submenu">
                        <a href="">Blog <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ route('homepage') }}">Blog List</a></li>
                            <li><a href="{{ route('homepage') }}">Blog Grid</a></li>
                            <li><a href="{{ route('homepage') }}">Blog Details</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <ul class="nav header-navbar-rht">

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user/user.jpg" width="31"
                                alt="Darren Elder">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/user/user.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Jonathan Doe</h6>
                                <p class="text-muted mb-0">Mentor</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="profile-settings.html">Profile Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
