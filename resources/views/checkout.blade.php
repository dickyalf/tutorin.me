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
									<img class="rounded-circle" src="assets/img/user/user.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
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
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									<form action="success-book">
									
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Personal Information</h4>
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>First Name</label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Last Name</label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" type="email">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
											<div class="exist-customer">Existing Customer? <a href="#">Click here to login</a></div>
										</div>
										<!-- /Personal Information -->
										
										<div class="payment-widget">
											<h4 class="card-title">Payment Method</h4>
											
											<!-- Credit Card Payment -->
											<div class="payment-list">
												<label class="payment-radio credit-card-option">
													<input type="radio" name="radio" checked>
													<span class="checkmark"></span>
													Credit card
												</label>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_name">Name on Card</label>
															<input class="form-control" id="card_name" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_number">Card Number</label>
															<input class="form-control" id="card_number" placeholder="1234  5678  9876  5432" type="text">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="expiry_month">Expiry Month</label>
															<input class="form-control" id="expiry_month" placeholder="MM" type="text">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="expiry_year">Expiry Year</label>
															<input class="form-control" id="expiry_year" placeholder="YY" type="text">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="cvv">CVV</label>
															<input class="form-control" id="cvv" type="text">
														</div>
													</div>
												</div>
											</div>
											<!-- /Credit Card Payment -->
											
											<!-- Paypal Payment -->
											<div class="payment-list">
												<label class="payment-radio paypal-option">
													<input type="radio" name="radio">
													<span class="checkmark"></span>
													Paypal
												</label>
											</div>
											<!-- /Paypal Payment -->
											
											<!-- Terms Accept -->
											<div class="terms-accept">
												<div class="custom-checkbox">
												   <input type="checkbox" id="terms_accept">
												   <label for="terms_accept">I have read and accepted <a href="#">Terms &amp; Conditions</a></label>
												</div>
											</div>
											<!-- /Terms Accept -->
											
											<!-- Submit Section -->
											<div class="submit-section mt-4">
												<button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
											</div>
											<!-- /Submit Section -->
											
										</div>
									</form>
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">
								
									<!-- Booking Mentee Info -->
									<div class="booking-user-info">
										<a href="profile.html" class="booking-user-img">
											<img src="assets/img/user/user2.jpg" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="profile.html">Willas Rorrong</a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<div class="mentor-details">
												<p class="user-location"><i class="fas fa-map-marker-alt"></i> Bangladesh, India</p>
											</div>
										</div>
									</div>
									<!-- Booking Mentee Info -->
									
									<div class="booking-summary">
										<div class="booking-item-wrap">
											<ul class="booking-date">
												<li>Date <span>16 Nov 2019</span></li>
												<li>Time <span>10:00 AM</span></li>
											</ul>
											<ul class="booking-fee">
												<li>Consulting Fee <span>Rp 500.000</span></li>
												<li>Booking Fee <span>Rp 10.000</span></li>
												<li>Video Call <span>Rp 0</span></li>
											</ul>
											<div class="booking-total">
												<ul class="booking-total-list">
													<li>
														<span>Total</span>
														<span class="total-cost">Rp 510.000</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Booking Summary -->
							
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
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
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
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
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
	  
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>
</html>