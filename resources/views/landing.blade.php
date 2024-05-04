<!DOCTYPE html> 
<html lang="en">
	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Tutorly</title>
		
		<!-- Favicon -->
		<link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
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
							<a href="index.html" class="navbar-brand navbar-brand-eight logo">
								<img src="assets/img/tutorly.png" class="img-fluid" alt="Logo">
							</a>
						</div>
						<div class="main-menu-wrapper main-menu-wrapper-eight">
							<div class="menu-header menu-header-eight">
								<a href="index.html" class="menu-logo">
									<img src="assets/img/tutorly.png" class="img-fluid" alt="Logo">
								</a>
								<a id="menu_close" class="menu-close" href="javascript:void(0);">
									<i class="fas fa-times"></i>
								</a>
							</div>
							<ul class="main-nav main-nav-eight">
                                <li>
									<a href="{{route('home')}}">Home</a>
								</li>
								<li class="has-submenu">
									<a href="">Mentor <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li><a href="{{route('home')}}">Mentor Dashboard</a></li>
										<li><a href="{{route('home')}}">Bookings</a></li>
										<li><a href="{{route('home')}}">Schedule Timing</a></li>
										<li><a href="{{route('home')}}">Mentee List</a></li>
										<li><a href="{{route('home')}}">Mentee Profile</a></li>
										<li class="has-submenu">
											<a href="{{route('home')}}">Blog</a>
											<ul class="submenu">
												<li><a href="{{route('home')}}">Blog</a></li>
												<li><a href="{{route('home')}}">Blog View</a></li>
												<li><a href="{{route('home')}}">Add Blog</a></li>
												<li><a href="{{route('home')}}">Edit Blog</a></li>
											</ul>
										</li>
										<li><a href="{{route('home')}}">Chat</a></li>
										<li><a href="{{route('home')}}">Invoices</a></li>
										<li><a href="{{route('home')}}">Profile Settings</a></li>
										<li><a href="{{route('home')}}">Reviews</a></li>
										<li><a href="{{route('home')}}">Mentor Register</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="">Mentee <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li class="has-submenu">
											<a href="#">Mentors</a>
											<ul class="submenu">
												<li><a href="{{route('home')}}">Map Grid</a></li>
												<li><a href="{{route('home')}}">Map List</a></li>
											</ul>
										</li>
										<li><a href="{{route('home')}}">Search Mentor</a></li>
										<li><a href="{{route('home')}}">Mentor Profile</a></li>
										<li><a href="{{route('home')}}">Bookings</a></li>
										<li><a href="{{route('home')}}">Checkout</a></li>
										<li><a href="{{route('home')}}">Booking Success</a></li>
										<li><a href="{{route('home')}}">Mentee Dashboard</a></li>
										<li><a href="{{route('home')}}">Favourites</a></li>
										<li><a href="{{route('home')}}">Chat</a></li>
										<li><a href="{{route('home')}}">Profile Settings</a></li>
										<li><a href="{{route('home')}}">Change Password</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="">Pages <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li><a href="{{route('home')}}">Voice Call</a></li>
										<li><a href="{{route('home')}}">Video Call</a></li>
										<li><a href="{{route('home')}}">Search Mentors</a></li>
										<li><a href="{{route('home')}}">Components</a></li>
										<li class="has-submenu">
											<a href="{{route('home')}}">Invoices</a>
											<ul class="submenu">
												<li><a href="{{route('home')}}">Invoices</a></li>
												<li><a href="{{route('home')}}">Invoice View</a></li>
											</ul>
										</li>
										<li><a href="{{route('home')}}">Starter Page</a></li>
										<li><a href="{{route('home')}}">Login</a></li>
										<li><a href="{{route('home')}}">Register</a></li>
										<li><a href="{{route('home')}}">Forgot Password</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="">Blog <i class="fas fa-chevron-circle-down"></i></a>
									<ul class="submenu">
										<li><a href="{{route('home')}}">Blog List</a></li>
										<li><a href="{{route('home')}}">Blog Grid</a></li>
										<li><a href="{{route('home')}}">Blog Details</a></li>
									</ul>
								</li>						
								<li class="login-link">
									<a href="login.html">Login</a>
								</li>						
								<li class="login-link">
									<a href="register login.html">Register</a>
								</li>
							</ul>		 
						</div>		 
						<ul class="nav header-navbar-rht header-navbar-rht-eight">
							<li class="nav-item">
								<a class="nav-link btn btn-register" href="register.html"><i class="fas fa-sign-in-alt"></i> Sign up</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn btn-login" href="login.html"><i class="fas fa-lock"></i> Sign in</a>
							</li>
						</ul>
					</nav>
				</div>	
			</header>
			<!-- /Header -->
			
			<!-- Home Banner -->
			<section class="section section-search-eight">
				<div class="container">
					<div class="banner-wrapper-eight m-auto text-center">
						<div class="banner-header aos" data-aos="fade-up">
							<h1>Search Teacher in <span>Tutorly</span> Appointment</h1>
							<p>Discover the best Mentors & institutions the city nearest to you.</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box-eight aos" data-aos="fade-up">
							<form action="search.html">
								<div class="form-search">
									<div class="form-inner">
										<div class="form-group search-location-eight">
											<i class="material-icons">search</i>
											<select class="form-control select">
												<option>Tutor</option>
												<option>Categories</option>
												<option>Location</option>
											</select>
										</div>
										<div class="form-group search-info-eight">
											<i class="material-icons">search</i>
											<input type="text" class="form-control" placeholder="Search Tutor, Categories, etc">
										</div>
										<button type="submit" class="btn search-btn-eight mt-0">Search <i class="fas fa-long-arrow-alt-right"></i></button>
									</div>
								</div>
							</form>
						</div>
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Work Flow -->
			<section class="section how-it-works-section">
				<div class="container">
					<div class="section-header-eight text-center aos" data-aos="fade-up">
						<span>Tutorly Flow</span>
						<h2>How does it works ?</h2>
						<p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with Tutorly</p>
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
										<div class="feature-text-eight">Sign up</div>
									</div>
								</div>
								<p>Are you looking to join online Learning? Now it's very simple, Now Sign up</p>
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
										<div class="feature-text-eight">Collaborate</div>
									</div>
								</div>
								<p>Collaborate on your own timing, by scheduling with mentor booking</p>
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
										<div class="feature-text-eight">Improve & Get Back</div>
									</div>
								</div>
								<p>you can gather different skill set, and you can become mentor too</p>
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
							<span>Tutorly Goals</span>
							<h2 class="text-white">Popular Mentors</h2>
							<p class="sub-title text-white"> Choose your most popular leaning mentors, it will help you to achieve your professional goals..</p>
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
										<img class="img-fluid" alt="" src="assets/foto/dicky.jpg">
									</a>
									<div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia</div>
								</div>
								<div class="mendor-content">
									<h3 class="title"><a href="profile">Dicky Al Fayed</a></h3>
									<div class="mendor-course">
										Fullstack Programmer
									</div>
									<div class="mendor-price-list">									
										<div class="mendor-price">Rp 200.000 <span>/ hr</span></div>
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
										<img class="img-fluid" alt="" src="assets/foto/willas.jpg">
									</a>
									<div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia</div>
								</div>
								<div class="mendor-content">
									<h3 class="title"><a href="profile">Willas Rorrong</a></h3>
									<div class="mendor-course">
										UNIX, Calculus, Trigonometry
									</div>
									<div class="mendor-price-list">									
										<div class="mendor-price">Rp 500.000 <span>/ hr</span></div>
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
										<img class="img-fluid" alt="" src="assets/foto/kevin1.jpg">
									</a>
									<div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia</div>
								</div>
								<div class="mendor-content">
									<h3 class="title"><a href="profile">Willy Cahyadi</a></h3>
									<div class="mendor-course">
										ASP.NET,Computer Gaming
									</div>
									<div class="mendor-price-list">									
										<div class="mendor-price">Rp 300.000 <span>/ hr</span></div>
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
										<img class="img-fluid" alt="" src="assets/foto/yobel1.jpg">
									</a>
									<div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia</div>
								</div>
								<div class="mendor-content">
									<h3 class="title"><a href="profile">Yobel</a></h3>
									<div class="mendor-course">
										Computer Programming
									</div>
									<div class="mendor-price-list">									
										<div class="mendor-price">Rp 300.000 <span>/ hr</span></div>
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
										<img class="img-fluid" alt="" src="assets/foto/kevin.jpg">
									</a>
									<div class="mendor-country"><i class="fas fa-map-marker-alt"></i> Surabaya, Indonesia</div>
								</div>
								<div class="mendor-content">
									<h3 class="title"><a href="profile">Kevin Christian</a></h3>
									<div class="mendor-course">
										Digital Marketer
									</div>
									<div class="mendor-price-list">									
										<div class="mendor-price">Rp 400.000 <span>/ hr</span></div>
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
						<span>Choose the</span>
						<h2>Different All Learning Paths</h2>
						<p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with Tutorly</p>
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-01.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-02.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-03.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-04.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-05.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-06.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-07.jpg" alt="learn">
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
									<a href="search.html" class="course-img">
										<div class="image-col-merge">
											<img src="https://mentoring.dreamstechnologies.com/html/template/assets/img/course/course-08.jpg" alt="learn">
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
							<a href="search.html" class="btn btn-primary btn-view">View All</a>
						</div>						
					</div>
				</div>
			</section>
			<!-- Path section end -->

			<!-- Profile Section -->
			<section class="section profile-section">
				<div class="section-header-eight text-center aos" data-aos="fade-up">
					<div class="container">
						<span>MOST VIEWED</span>
						<h2>Featured Profile of this week</h2>
						<p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with Tutorly</p>
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
										<img class="img-fluid" alt="" src="assets/foto/willas.jpg">
									</div>
									<div class="profile-content">
										<h4>Willas Rorrong</h4>
										<p>UNIX, Calculus, Trigonometry</p>
									</div>
								</div>
								<div class="profile-rating">
									<div class="mendor-rating">							
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
									</div>
									<div class="price-box">Rp 500.000 <span>/ hr</span></div>
								</div>
							</div>
						</div>
						<!-- /Profile Item -->
						
						<!-- Profile Item -->
						<div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="profile-list">
								<div class="profile-detail">
									<div class="profile-img-eight">
										<img class="img-fluid" alt="" src="assets/foto/yobel1.jpg">
									</div>
									<div class="profile-content">
										<h4>Yobel</h4>
										<p>Computer Programming</p>
									</div>
								</div>
								<div class="profile-rating">
									<div class="mendor-rating">							
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
									</div>
									<div class="price-box">Rp 200.000 <span>/ hr</span></div>
								</div>
							</div>
						</div>
						<!-- /Profile Item -->
						
						<!-- Profile Item -->
						<div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="profile-list">
								<div class="profile-detail">
									<div class="profile-img-eight">
										<img class="img-fluid" alt="" src="assets/foto/kevin1.jpg">
									</div>
									<div class="profile-content">
										<h4>Willy Cahyadi</h4>
										<p>ASP.NET,Computer Gaming</p>
									</div>
								</div>
								<div class="profile-rating">
									<div class="mendor-rating">							
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
									</div>
									<div class="price-box">Rp 300.000 <span>/ hr</span></div>
								</div>
							</div>
						</div>
						<!-- /Profile Item -->
						
						<!-- Profile Item -->
						<div class="col-12 col-md-6 col-lg-3 aos" data-aos="fade-up">
							<div class="profile-list">
								<div class="profile-detail">
									<div class="profile-img-eight">
										<img class="img-fluid" alt="" src="assets/foto/dicky.jpg">
									</div>
									<div class="profile-content">
										<h4>Dicky Al Fayed</h4>
										<p>Fullstack Programmer</p>
									</div>
								</div>
								<div class="profile-rating">
									<div class="mendor-rating">							
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
									</div>
									<div class="price-box">Rp 200.000 <span>/ hr</span></div>
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
									<h3>Happy Clients</h3>
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
									<h3>Online Appointments</h3>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 aos" data-aos="fade-up">
							<div class="statistics-list-eight">
								<div class="statistics-icon-eight">
									<i class="fas fa-user-check"></i>
								</div>
								<div class="statistics-content-eight">
									<span>100%</span>
									<h3>Job Satisfaction</h3>
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
						<span>LATEST</span>
						<h2>Blogs & News</h2>
						<p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with Tutorly</p>
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
									<a href="blog-details.html"><img class="img-fluid" src="https://mentoring.dreamstechnologies.com/html/template/assets/img/blog/blog-01.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-card-content">
									<div class="blog-month">04 <span>Dec</span></div>
									<ul class="meta-item-eight">
										<li>
											<div class="post-author-eight">
												<a href="blog-details.html"><span>Tyrone Roberts</span></a>
											</div>
										</li>										
									</ul>
									<h3 class="blog-title-eight"><a href="blog-details.html">What is Lorem Ipsum? Lorem Ipsum is simply</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									<a href="blog-details.html" class="read">Read more</a>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						
						<div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">
						
							<!-- Blog Post -->
							<div class="blog-card">
								<div class="blog-card-image">
									<a href="blog-details.html"><img class="img-fluid" src="https://mentoring.dreamstechnologies.com/html/template/assets/img/blog/blog-16.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-card-content">
									<div class="blog-month">05 <span>Jan</span></div>
									<ul class="meta-item-eight">
										<li>
											<div class="post-author-eight">
												<a href="blog-details.html"><span>Brittany Garcia</span></a>
											</div>
										</li>										
									</ul>
									<h3 class="blog-title-eight"><a href="blog-details.html">Contrary to popular belief, Lorem Ipsum is</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									<a href="blog-details.html" class="read">Read more</a>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						
						<div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">
						
							<!-- Blog Post -->
							<div class="blog-card">
								<div class="blog-card-image">
									<a href="blog-details.html"><img class="img-fluid" src="https://mentoring.dreamstechnologies.com/html/template/assets/img/blog/blog-17.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-card-content">
									<div class="blog-month">06 <span>May</span></div>
									<ul class="meta-item-eight">
										<li>
											<div class="post-author-eight">
												<a href="blog-details.html"><span>Allen Davis</span></a>
											</div>
										</li>										
									</ul>
									<h3 class="blog-title-eight"><a href="blog-details.html">The standard chunk of Lorem Ipsum used</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									<a href="blog-details.html" class="read">Read more</a>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
					</div>
					<div class="view-all text-center aos" data-aos="fade-up"> 
						<a href="blog-list.html" class="btn btn-primary btn-view">View All</a>
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
										<img src="assets/img/tutorly.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
										<p class="mb-0">&copy; 2022 Tutorly. All rights reserved.</p>
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