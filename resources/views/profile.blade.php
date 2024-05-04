<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Tutorly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

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
                        <a href="index.html" class="navbar-brand logo">
                            <img src="assets/img/tutorly.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="assets/img/tutorly.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="has-submenu">
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
                            </li>
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
                            <li class="has-submenu">
                                <a href="">Blog <i class="fas fa-chevron-circle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('home') }}">Blog List</a></li>
                                    <li><a href="{{ route('home') }}">Blog Grid</a></li>
                                    <li><a href="{{ route('home') }}">Blog Details</a></li>
                                </ul>
                            </li>
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

        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mentor Profile</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Mentor Profile</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <!-- Mentor Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mentor-widget">
                                    <div class="user-info-left align-items-center">
                                        <div class="mentor-img d-flex flex-wrap justify-content-center">
                                            <div class="pro-avatar">WR</div>
                                            <div class="rating text-center">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="mentor-details m-0">
                                                <p class="user-location m-0"><i class="fas fa-map-marker-alt"></i>
                                                    Bangladesh, India</p>
                                            </div>
                                        </div>
                                        <div class="user-info-cont">
                                            <h4 class="usr-name">Willas Rorrong</h4>
                                            <p class="mentor-type">Fullstack Developer</p>
                                            <div class="mentor-action">
                                                <p class="mentor-type social-title">Contact Me</p>
                                                <a href="javascript:void(0)" class="btn-blue">
                                                    <i class="fas fa-comments"></i>
                                                </a>
                                                <a href="chat.html" class="btn-blue">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn-blue" data-toggle="modal"
                                                    data-target="#voice_call">
                                                    <i class="fas fa-phone-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info-right d-flex align-items-end flex-wrap">
                                        <div class="hireme-btn text-center">
                                            <span class="hire-rate">Rp 500.000 / Jam</span>
                                            <a class="blue-btn-radius" href="booking">Pesan sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Widget -->

                        <!-- Mentor Details Tab -->
                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <!-- About Details -->
                                <div class="widget about-widget custom-about mb-0">
                                    <h4 class="widget-title">About Me</h4>
                                    <hr />
                                    <p>Saya adalah Willas Rorrong, seorang tutor berpengalaman dengan latar belakang
                                        pendidikan dalam Sastra Inggris dari Universitas Indonesia. Saya memiliki gelar
                                        Master of Arts (M.A) dan telah mengajar selama lebih dari 10 tahun. Selama waktu
                                        tersebut, saya telah membantu ratusan siswa dalam meningkatkan kemampuan
                                        literasi dan apresiasi terhadap literatur Inggris.</p>
                                    <p>Sebagai mentor, saya percaya pada pendekatan yang disesuaikan untuk setiap siswa,
                                        memastikan bahwa setiap sesi tidak hanya informatif tetapi juga menarik dan
                                        sesuai dengan kebutuhan belajar mereka. Saya mengkhususkan diri dalam membantu
                                        siswa mempersiapkan ujian literatur, penulisan esai kritis, dan pemahaman
                                        mendalam tentang karya-karya besar literatur Inggris.</p>
                                    <p>Komitmen saya adalah untuk membimbing siswa mencapai potensi penuh mereka melalui
                                        sesi yang interaktif dan mendukung. Saya menantikan kesempatan untuk bekerja
                                        sama dengan Anda dalam mengeksplorasi kedalaman dan kekayaan sastra Inggris.</p>
                                </div>
                                <!-- /About Details -->
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <!-- Personal Details -->
                                <div class="widget education-widget mb-0">
                                    <h4 class="widget-title">Personal Details</h4>
                                    <hr />
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Jenis Kelamin</span>
                                                        <div class="row-result">Perempuan</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Tanggal Lahir</span>
                                                        <div class="row-result">01 - 02 - 2000</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Personal Details -->

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <!-- Qualification Details -->
                                <div class="widget experience-widget mb-0">
                                    <h4 class="widget-title">Qualification</h4>
                                    <hr />
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Universitas</span>
                                                        <div class="row-result">Universitas Cina</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Jurusan</span>
                                                        <div class="row-result">Informatika</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Type of Degree</span>
                                                        <div class="row-result">S.Kom (Sarjana Komputer)</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Qualification Details -->

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body pb-1 custom-border-card">

                                <!-- Location Details -->
                                <div class="widget awards-widget m-0">
                                    <h4 class="widget-title">Location</h4>
                                    <hr />
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Alamat 1</span>
                                                        <div class="row-result">Kos Bu Ika, Sambikerep</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Negara</span>
                                                        <div class="row-result">Indonesia</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Kota</span>
                                                        <div class="row-result">Surabaya</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Provinsi</span>
                                                        <div class="row-result">Jawa Timur</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Kode Pos</span>
                                                        <div class="row-result">641001</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Location Details -->

                            </div>
                        </div>
                        <!-- /Mentor Details Tab -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        <footer class="footer">

            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="assets/img/tutorly.png" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Mentee</h2>
                                <ul>
                                    <li><a href="search.html">Search Mentors</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Mentors</h2>
                                <ul>
                                    <li><a href="appointments.html">Appointments</a></li>
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="dashboard.html">Mentor Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <p>
                                        <i class="fas fa-phone-alt"></i>
                                        +1 315 369 5943
                                    </p>
                                    <p class="mb-0">
                                        <i class="fas fa-envelope"></i>
                                        mentoring@example.com
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container-fluid">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2020 Tutorly. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->

                </div>
            </div>
            <!-- /Footer Bottom -->

        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
                                    <h4>Jonathan Doe</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                        aria-label="Close"><i class="material-icons">call_end</i></a>
                                    <a href="voice-call.html" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                        aria-label="Close"><i class="material-icons">call_end</i></a>
                                    <a href="video-call.html" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>


</body>

</html>
