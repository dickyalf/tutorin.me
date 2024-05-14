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
                <a href="{{ route('home') }}" class="navbar-brand logo">
                    <img src="assets/img/tutorin-logo-last.jpg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('home') }}" class="menu-logo">
                        <img src="assets/img/tutorin-logo-last.jpg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    {{-- <li class="has-submenu">
                        <a href="">Mentor <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ route('home') }}">Mentor Dashboard</a></li>
                            <li><a href="{{ route('home') }}">Bookings</a></li>
                            <li><a href="{{ route('home') }}">Schedule Timing</a></li>
                            <li><a href="{{ route('home') }}">Mentee List</a></li>
                            <li><a href="{{ route('home') }}">Mentee Profile</a></li>
                            <li class="has-submenu">
                                <a href="{{ route('home') }}">Blog</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('home') }}">Blog</a></li>
                                    <li><a href="{{ route('home') }}">Blog View</a></li>
                                    <li><a href="{{ route('home') }}">Add Blog</a></li>
                                    <li><a href="{{ route('home') }}">Edit Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('home') }}">Chat</a></li>
                            <li><a href="{{ route('home') }}">Invoices</a></li>
                            <li><a href="{{ route('home') }}">Profile Settings</a></li>
                            <li><a href="{{ route('home') }}">Reviews</a></li>
                            <li><a href="{{ route('home') }}">Mentor Register</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="">Mentee <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Mentors</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('home') }}">Map Grid</a></li>
                                    <li><a href="{{ route('home') }}">Map List</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('home') }}">Search Mentor</a></li>
                            <li><a href="{{ route('home') }}">Mentor Profile</a></li>
                            <li><a href="{{ route('home') }}">Bookings</a></li>
                            <li><a href="{{ route('home') }}">Checkout</a></li>
                            <li><a href="{{ route('home') }}">Booking Success</a></li>
                            <li><a href="{{ route('home') }}">Mentee Dashboard</a></li>
                            <li><a href="{{ route('home') }}">Favourites</a></li>
                            <li><a href="{{ route('home') }}">Chat</a></li>
                            <li><a href="{{ route('home') }}">Profile Settings</a></li>
                            <li><a href="{{ route('home') }}">Change Password</a></li>
                        </ul>
                    </li> --}}
                    <li class="has-submenu">
                        <a href="">Pages <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ route('home') }}">Voice Call</a></li>
                            <li><a href="{{ route('home') }}">Video Call</a></li>
                            <li><a href="{{ route('home') }}">Search Mentors</a></li>
                            <li><a href="{{ route('home') }}">Components</a></li>
                            <li class="has-submenu">
                                <a href="{{ route('home') }}">Invoices</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('home') }}">Invoices</a></li>
                                    <li><a href="{{ route('home') }}">Invoice View</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('home') }}">Starter Page</a></li>
                            <li><a href="{{ route('home') }}">Login</a></li>
                            <li><a href="{{ route('home') }}">Register</a></li>
                            <li><a href="{{ route('home') }}">Forgot Password</a></li>
                        </ul>
                    </li>
                    {{-- <li class="has-submenu">
                        <a href="">Blog <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ route('home') }}">Blog List</a></li>
                            <li><a href="{{ route('home') }}">Blog Grid</a></li>
                            <li><a href="{{ route('home') }}">Blog Details</a></li>
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
