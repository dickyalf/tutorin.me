<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Tutorin</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/tutorin-logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assetsg/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <header class="header-eight min-header">
            <div class="header-fixed header-fixed-wrap">
                <nav class="navbar navbar-expand-lg header-nav header-nav-eight">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon bar-icon-eight">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="{{ route('homepage') }}" class="navbar-brand navbar-brand-eight logo">
                            <img src="assets/img/tutorin-logo-last.jpg" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper main-menu-wrapper-eight">
                        <div class="menu-header menu-header-eight">
                            <a href="{{ route('homepage') }}" class="menu-logo">
                                <img src="assets/img/tutorin-logo-last.jpg" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav main-nav-eight">
                            <li>
                                <a href="{{ route('homepage') }}">Beranda</a>
                            </li>
                            {{-- <li class="has-submenu">
									<a href="">Mentor <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li><a href="{{route('homepage')}}">Mentor Dashboard</a></li>
										<li><a href="{{route('homepage')}}">Bookings</a></li>
										<li><a href="{{route('homepage')}}">Schedule Timing</a></li>
										<li><a href="{{route('homepage')}}">Mentee List</a></li>
										<li><a href="{{route('homepage')}}">Mentee Profile</a></li>
										<li class="has-submenu">
											<a href="{{route('homepage')}}">Blog</a>
											<ul class="submenu">
												<li><a href="{{route('homepage')}}">Blog</a></li>
												<li><a href="{{route('homepage')}}">Blog View</a></li>
												<li><a href="{{route('homepage')}}">Add Blog</a></li>
												<li><a href="{{route('homepage')}}">Edit Blog</a></li>
											</ul>
										</li>
										<li><a href="{{route('homepage')}}">Chat</a></li>
										<li><a href="{{route('homepage')}}">Invoices</a></li>
										<li><a href="{{route('homepage')}}">Profile Settings</a></li>
										<li><a href="{{route('homepage')}}">Reviews</a></li>
										<li><a href="{{route('homepage')}}">Mentor Register</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="">Mentee <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li class="has-submenu">
											<a href="#">Mentors</a>
											<ul class="submenu">
												<li><a href="{{route('homepage')}}">Map Grid</a></li>
												<li><a href="{{route('homepage')}}">Map List</a></li>
											</ul>
										</li>
										<li><a href="{{route('homepage')}}">Search Mentor</a></li>
										<li><a href="{{route('homepage')}}">Mentor Profile</a></li>
										<li><a href="{{route('homepage')}}">Bookings</a></li>
										<li><a href="{{route('homepage')}}">Checkout</a></li>
										<li><a href="{{route('homepage')}}">Booking Success</a></li>
										<li><a href="{{route('homepage')}}">Mentee Dashboard</a></li>
										<li><a href="{{route('homepage')}}">Favourites</a></li>
										<li><a href="{{route('homepage')}}">Chat</a></li>
										<li><a href="{{route('homepage')}}">Profile Settings</a></li>
										<li><a href="{{route('homepage')}}">Change Password</a></li>
									</ul>
								</li> --}}
                            <li class="has-submenu">
                                <a href="">Halaman <i class="fas fa-chevron-circle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('homepage') }}">Voice Call</a></li>
                                    <li><a href="{{ route('homepage') }}">Video Call</a></li>
                                    <li><a href="{{ route('homepage') }}">Cari Tutor</a></li>
                                    {{-- <li><a href="{{route('homepage')}}">Komponen</a></li> --}}
                                    <li class="has-submenu">
                                        <a href="{{ route('homepage') }}">Nota pembayaran</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('homepage') }}">Semua nota</a></li>
                                            <li><a href="{{ route('homepage') }}">Jadwal booking</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('homepage') }}">Halaman Utama</a></li>
                                    <li><a href="{{ route('homepage') }}">Login</a></li>
                                    <li><a href="{{ route('homepage') }}">Daftar</a></li>
                                    <li><a href="{{ route('homepage') }}">Lupa Password</a></li>
                                </ul>
                            </li>
                            {{-- <li class="has-submenu">
									<a href="">Blog <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li><a href="{{route('homepage')}}">Blog List</a></li>
										<li><a href="{{route('homepage')}}">Blog Grid</a></li>
										<li><a href="{{route('homepage')}}">Blog Details</a></li>
									</ul>
								</li> --}}
                            <li class="login-link">
                                <a href="{{ route('homepage') }}">Login</a>
                            </li>
                            <li class="login-link">
                                <a href="{{ route('homepage') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht header-navbar-rht-eight">
                        <li class="nav-item">
                            <a class="nav-link btn btn-register" href="{{ route('register') }}"><i
                                    class="fas fa-sign-in-alt"></i> Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-login" href="{{ route('login') }}"><i class="fas fa-lock"></i>
                                Sign in</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- /Header -->

        <!-- homepage Banner -->
        <section class="section section-search-eight">
            <div class="container">
                <div class="banner-wrapper-eight m-auto text-center">
                    <div class="banner-header aos" data-aos="fade-up">
                        <h1>Cari Tutor di <span>Tutorin</span> </h1>
                        <p>Temukan Tutor dan Institusi seperti preferensimu!</p>
                    </div>

                    <!-- Search -->
                    <div class="search-box-eight aos" data-aos="fade-up">
                        <form action="{{ route('homepage') }}">
                            <div class="form-search">
                                <div class="form-inner">
                                    <div class="form-group search-location-eight">
                                        <i class="material-icons">search</i>
                                        <select class="form-control select">
                                            <optgroup label="Category">
                                                <option>Matematika</option>
                                                <option>Sains</option>
                                                <option>Bahasa Inggris</option>
                                                <option>Sejarah</option>
                                                <option>Pemrograman</option>
                                                <option>Bahasa Jepang</option>
                                                <option>Berenang</option>
                                                <option>Musik</option>
                                                <option>Mengaji</option>

                                            </optgroup>
                                            {{-- <optgroup label="Tutor">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </optgroup>
                                            <optgroup label="Lokasi">
                                                <option>Online</option>
                                                <option>Offline</option>
                                            </optgroup> --}}
                                        </select>
                                    </div>
                                    <div class="form-group search-info-eight">
                                        <i class="material-icons">cari</i>
                                        <input type="text" class="form-control"
                                            placeholder="Cari Tutor, Kategori, dll">
                                    </div>
                                    <button type="submit" class="btn search-btn-eight mt-0">Cari <i
                                            class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /Search -->

                </div>
            </div>
        </section>
        <!-- /homepage Banner -->

        <!-- Work Flow -->
        <section class="section how-it-works-section">
            <div class="container">
                <div class="section-header-eight text-center aos" data-aos="fade-up">
                    <span>Flow Tutorin</span>
                    <h2>Bagaimana cara kerjanya?</h2>
                    <p class="sub-title">Apakah anda ingin bergabung pada program belajar? Mudah sekali, Daftar dengan
                        Tutorin!</p>
                    <div class="sec-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="row justify-content-center feature-list">
                    <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                        <div class="feature-grid text-center top-box">
                            <div class="feature-header-eight">
                                <div class="feature-icon-eight">
                                    <span class="circle bg-green"><i class="fas fa-sign-in-alt"></i></span>
                                </div>
                                <div class="feature-cont">
                                    <div class="feature-text-eight">Daftar</div>
                                </div>
                            </div>
                            <p>Pendaftaran murid baru hanya membutuhkan waktu &lt;5 menit!</p>
                            <span class="text-green">01</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
                        <div class="feature-grid text-center">
                            <div class="feature-header-eight">
                                <div class="feature-icon-eight">
                                    <span class="circle bg-blue"><i class="material-icons">accessibility</i></span>
                                </div>
                                <div class="feature-cont">
                                    <div class="feature-text-eight">Belajar bersama</div>
                                </div>
                            </div>
                            <p>Pilih waktu belajarmu sendiri, dengan scheduling tutor!</p>
                            <span class="text-blue">02</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
                        <div class="feature-grid text-center top-box">
                            <div class="feature-header-eight">
                                <div class="feature-icon-eight">
                                    <span class="circle bg-orange"><i class="material-icons">event_seat</i></span>
                                </div>
                                <div class="feature-cont">
                                    <div class="feature-text-eight">Beri Ulasan</div>
                                </div>
                            </div>
                            <p>Berikan ulasan bagi kami dan pengajar, bersama kita akan bertumbuh untuk yang lebih baik!
                            </p>
                            <span class="text-orange">03</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work Flow -->

        <!-- Popular Mendors -->
        <section class="section popular-mendors">
            <div class="mendor-title">
                <div class="section-header-eight text-center">
                    <div class="container aos" data-aos="fade-up">
                        <span>Panutan Tutorin</span>
                        <h2 class="text-white">Mentor Terbaik</h2>
                        <p class="sub-title text-white"> Cari Mentor dengan rating dan jumlah murid terbaik, mereka
                            akan membantu kamu mencapai mimpi kamu.</p>
                        <div class="sec-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mendor-list">
                <div class="container aos" data-aos="fade-up">
                    <div class="mendor-slider slick">

                        <!-- Mentor Item -->
                        <div class="mendor-box">
                            <div class="mendor-img">
                                <a href="profile">
                                    <img class="img-fluid" alt="" src="assets/foto/dicky_dei.jpg">
                                </a>
                                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia
                                </div>
                            </div>
                            <div class="mendor-content">
                                <h3 class="title"><a href="profile">Dicky Al Fayed</a></h3>
                                <div class="mendor-course">
                                    Fullstack Programming
                                </div>
                                <div class="mendor-price-list">
                                    <div class="mendor-price">Rp 200.000 <span>/ Jam</span></div>
                                    <div class="mendor-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Item -->

                        <!-- Mentor Item -->
                        <div class="mendor-box">
                            <div class="mendor-img">
                                <a href="profile">
                                    <img class="img-fluid" alt="" src="assets/foto/willas_dei.jpg">
                                </a>
                                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia
                                </div>
                            </div>
                            <div class="mendor-content">
                                <h3 class="title"><a href="profile">Willas Rorrong</a></h3>
                                <div class="mendor-course">
                                    UNIX, Calculus, Trigonometry
                                </div>
                                <div class="mendor-price-list">
                                    <div class="mendor-price">Rp 500.000 <span>/ Jam</span></div>
                                    <div class="mendor-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Item -->

                        <!-- Mentor Item -->
                        <div class="mendor-box">
                            <div class="mendor-img">
                                <a href="profile">
                                    <img class="img-fluid" alt="" src="assets/foto/willy_dei.jpg">
                                </a>
                                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia
                                </div>
                            </div>
                            <div class="mendor-content">
                                <h3 class="title"><a href="profile">Willy Cahyadi</a></h3>
                                <div class="mendor-course">
                                    ASP.NET,Computer Gaming
                                </div>
                                <div class="mendor-price-list">
                                    <div class="mendor-price">Rp 300.000 <span>/ Jam</span></div>
                                    <div class="mendor-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Item -->

                        <!-- Mentor Item -->
                        <div class="mendor-box">
                            <div class="mendor-img">
                                <a href="profile">
                                    <img class="img-fluid" alt="" src="assets/foto/yobel_dei.jpg">
                                </a>
                                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia
                                </div>
                            </div>
                            <div class="mendor-content">
                                <h3 class="title"><a href="profile">Yobel</a></h3>
                                <div class="mendor-course">
                                    Landscape Photography, Social Photography
                                </div>
                                <div class="mendor-price-list">
                                    <div class="mendor-price">Rp 300.000 <span>/ Jam</span></div>
                                    <div class="mendor-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Item -->

                        <!-- Mentor Item -->
                        <div class="mendor-box">
                            <div class="mendor-img">
                                <a href="profile">
                                    <img class="img-fluid" alt="" src="assets/foto/kevin_dei.jpg">
                                </a>
                                <div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia
                                </div>
                            </div>
                            <div class="mendor-content">
                                <h3 class="title"><a href="profile">Kevin Christian</a></h3>
                                <div class="mendor-course">
                                    Digital Marketer
                                </div>
                                <div class="mendor-price-list">
                                    <div class="mendor-price">Rp 400.000 <span>/ Jam</span></div>
                                    <div class="mendor-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Item -->

                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Mendors -->

        <!-- Path section start -->
        <section class="section path-section-eight">
            <div class="section-header-eight text-center aos" data-aos="fade-up">
                <div class="container">
                    <span>Pilih jalur</span>
                    <h2> Belajar yang beraneka ragam!</h2>
                    <p class="sub-title">Apakah anda ingin bergabung pada program belajar? Mudah sekali, Daftar dengan
                        Tutorin!</p>
                    <div class="sec-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="course-sec">
                <div class="container">
                    <div class="row">
                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-01.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>Digital Marketer</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>400 Mentors</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-02.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>Ui designer</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>300 Mentors</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-03.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>IT Security</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>200 Mentors</p>
                                                <p>20 Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-04.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>Front-End Developer</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>100 Mentors</p>
                                                <p>11 Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-05.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>Web Developer</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>500 Mentors</p>
                                                <p>30 Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-06.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>Administrator</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>200 Mentors</p>
                                                <p>10 Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-07.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>Project Manager</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>600 Mentors</p>
                                                <p>40 Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                        <!-- Course Item -->
                        <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                            <div class="course-item">
                                <a href="{{ route('homepage') }}" class="course-img">
                                    <div class="image-col-merge">
                                        <img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-08.jpg"
                                            alt="learn">
                                        <div class="course-text">
                                            <h5>PHP Developer</h5>
                                            <div class="d-flex justify-content-between">
                                                <p>400 Mentors</p>
                                                <p>10 Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /Course Item -->

                    </div>
                    <div class="view-all text-center aos" data-aos="fade-up">
                        <a href="{{ route('homepage') }}" class="btn btn-primary btn-view">Lihat semua</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Path section end -->

        <!-- Profile Section -->
        <section class="section profile-section">
            <div class="section-header-eight text-center aos" data-aos="fade-up">
                <div class="container">
                    <span>PELAJAR TERAKTIF</span>
                    <h2>Profil Pelajar paling aktif minggu ini</h2>
                    {{-- <p class="sub-title">Apakah anda ingin bergabung pada program belajar? Mudah sekali, Daftar dengan
                        Tutorin!</p> --}}
                    <div class="sec-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Profile Item -->
                    <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                        <div class="profile-list">
                            <div class="profile-detail">
                                <div class="profile-img-eight">
                                    <img class="img-fluid" alt="" src="assets/foto/prisil_dei.jpg">
                                </div>
                                <div class="profile-content">
                                    <h4>Priscilia King Chandra</h4>
                                    <p>Mahasiswa Universitas Ciputra</p>
                                </div>
                            </div>
                            <div class="profile-rating">
                                {{-- <div class="mendor-rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                </div> --}}
                                <div class="price-box" >Rank  1</div>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Item -->

                    <!-- Profile Item -->
                    <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                        <div class="profile-list">
                            <div class="profile-detail">
                                <div class="profile-img-eight">
                                    <img class="img-fluid" alt="" src="assets/foto/kenneth_dei.jpg">
                                </div>
                                <div class="profile-content">
                                    <h4>Mario Kenneth</h4>
                                    <p>Siswa SMA Cita Hati</p>
                                </div>
                            </div>
                            <div class="profile-rating">
                                {{-- <div class="mendor-rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                </div> --}}
                                <div class="price-box" >Rank  147</div>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Item -->

                    <!-- Profile Item -->
                    <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                        <div class="profile-list">
                            <div class="profile-detail">
                                <div class="profile-img-eight">
                                    <img class="img-fluid" alt="" src="assets/foto/radhit_dei.jpg">
                                </div>
                                <div class="profile-content">
                                    <h4>Ida Bagus Radhita Putra Keniten</h4>
                                    <p>Mahasiswa Universitas O-Week</p>
                                </div>
                            </div>
                            <div class="profile-rating">
                                {{-- <div class="mendor-rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                </div> --}}
                                <div class="price-box" >Rank  -</div>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Item -->

                    <!-- Profile Item -->
                    <div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
                        <div class="profile-list">
                            <div class="profile-detail">
                                <div class="profile-img-eight">
                                    <img class="img-fluid" alt="" src="assets/foto/aaron_dei.jpg">
                                </div>
                                <div class="profile-content">
                                    <h4>Aaron Asa Soelistiono</h4>
                                    <p>Mahasiswa UNAIR</p>
                                </div>
                            </div>
                            <div class="profile-rating">
                                {{-- <div class="mendor-rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star "></i>
                                </div> --}}
                                <div class="price-box" >Rank  -</div>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Item -->
                </div>
            </div>
        </section>
        <!-- /Profile Section -->

        <!-- Statistics Section -->
        <section class="section statistics-section-eight">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 aos" data-aos="fade-up">
                        <div class="statistics-list-eight">
                            <div class="statistics-icon-eight">
                                <i class="fas fa-street-view"></i>
                            </div>
                            <div class="statistics-content-eight">
                                <span>500+</span>
                                <h3>Client Berbahagia</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 aos" data-aos="fade-up">
                        <div class="statistics-list-eight">
                            <div class="statistics-icon-eight">
                                <i class="fas fa-history"></i>
                            </div>
                            <div class="statistics-content-eight">
                                <span>120+</span>
                                <h3>Pertemuan Online</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 aos" data-aos="fade-up">
                        <div class="statistics-list-eight">
                            <div class="statistics-icon-eight">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="statistics-content-eight">
                                <span>90%</span>
                                <h3>Kepuasan Pelanggan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Statistics Section -->

        <!-- Blog Section -->
        <section class="section section-blogs-eight">
            <div class="container">

                <!-- Section Header -->
                <div class="section-header-eight text-center aos" data-aos="fade-up">
                    <span>Terbaru</span>
                    <h2>Blog & Berita</h2>
                    <p class="sub-title">Apakah anda ingin bergabung pada program belajar? Mudah sekali, Daftar dengan
                        Tutorin!</p>
                    <div class="sec-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- /Section Header -->

                <div class="row blog-grid-row justify-content-center">
                    <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

                        <!-- Blog Post -->
                        <div class="blog-card">
                            <div class="blog-card-image">
                                <a href="{{ route('homepage') }}"><img class="img-fluid"
                                        src="https://mentoring.dreamstechnologies.com/html/template/assets/img/blog/blog-01.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-month">04 <span>Dec</span></div>
                                <ul class="meta-item-eight">
                                    <li>
                                        <div class="post-author-eight">
                                            <a href="{{ route('homepage') }}"><span>Tyrone Roberts</span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title-eight"><a href="{{ route('homepage') }}">Apa itu Lorem Ipsum?
                                        Lorem Ipsum secara sederhana</a></h3>
                                <p>Lorem ipsum adalah kalimat yang biasa digunakan untuk designing. Biasanya designer
                                    menggunakan kalimat ini..</p>
                                <a href="{{ route('homepage') }}" class="read">Baca lebih lagi</a>
                            </div>
                        </div>
                        <!-- /Blog Post -->

                    </div>

                    <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

                        <!-- Blog Post -->
                        <div class="blog-card">
                            <div class="blog-card-image">
                                <a href="{{ route('homepage') }}"><img class="img-fluid"
                                        src="https://mentoring.dreamstechnologies.com/html/template/assets/img/blog/blog-16.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-month">05 <span>Jan</span></div>
                                <ul class="meta-item-eight">
                                    <li>
                                        <div class="post-author-eight">
                                            <a href="{{ route('homepage') }}"><span>Brittany Garcia</span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title-eight"><a href="{{ route('homepage') }}">Lain dari perkiraan,
                                        ternyata 'Laying fLat' adalah</a></h3>
                                <p>Negara Tiongkok akhir akhir ini diguncangkan dengan adanya fenomena 'Laying Flat'.
                                    Anak mudah lebih memilih..</p>
                                <a href="{{ route('homepage') }}" class="read">Baca lebih lagi</a>
                            </div>
                        </div>
                        <!-- /Blog Post -->

                    </div>

                    <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

                        <!-- Blog Post -->
                        <div class="blog-card">
                            <div class="blog-card-image">
                                <a href="{{ route('homepage') }}"><img class="img-fluid"
                                        src="https://mentoring.dreamstechnologies.com/html/template/assets/img/blog/blog-17.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-month">06 <span>May</span></div>
                                <ul class="meta-item-eight">
                                    <li>
                                        <div class="post-author-eight">
                                            <a href="{{ route('homepage') }}"><span>Allen Davis</span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="blog-title-eight"><a href="{{ route('homepage') }}">Chunk yang paling
                                        sering digunakan adalah Standard</a></h3>
                                <p>Siapasih belum tau dengan konsep chunk? Chunk adalah ukuran data yang...</p>
                                <a href="{{ route('homepage') }}" class="read">Baca lebih lagi</a>
                            </div>
                        </div>
                        <!-- /Blog Post -->

                    </div>
                </div>
                <div class="view-all text-center aos" data-aos="fade-up">
                    <a href="{{ route('homepage') }}" class="btn btn-primary btn-view">View All</a>
                </div>
            </div>
        </section>
        <!-- /Blog Section -->

        <!-- Footer -->
        <footer class="footer footer-eight">

            <!-- Footer Top -->
            <div class="footer-top aos" data-aos="fade-up">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="assets/img/tutorin-logolastlastwhite.jpg" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Tutoring Fleksibel hanya ada di Tutorin.me</p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Untuk Murid</h2>
                                <ul>
                                    <li><a href="{{ route('homepage') }}">Search tutor</a></li>
                                    <li><a href="{{ route('homepage') }}">Login</a></li>
                                    <li><a href="{{ route('homepage') }}">Daftar</a></li>
                                    <li><a href="{{ route('homepage') }}">Booking</a></li>
                                    <li><a href="{{ route('homepage') }}">Dashboard Murid</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Untuk Tutor</h2>
                                <ul>
                                    <li><a href="{{ route('homepage') }}">Appointments</a></li>
                                    <li><a href="{{ route('homepage') }}">Chat</a></li>
                                    <li><a href="{{ route('homepage') }}">Login</a></li>
                                    <li><a href="{{ route('homepage') }}">Daftarr</a></li>
                                    <li><a href="{{ route('homepage') }}">Tutor Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Kami</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <p> Universitas Ciputra,<br> Surabaya, Indonesia </p>
                                    </div>
                                    <p>
                                        +62 8123 456 4647
                                    </p>
                                    <p class="mb-0">
                                        Tutorly@example.com
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
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2022 Tutorin. All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="social-icon text-md-end">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                    </ul>
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

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/plugins/slick/slick.js"></script>

    <!-- Aos JS -->
    <script src="assets/plugins/aos/aos.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>
