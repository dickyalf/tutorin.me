@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
		<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-		- Header -->
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
						<li class="nav-item dropdo		 wn has-arrow 		 logged-item">
							<a href="#" class="dro						pdown-toggle nav-link" data-bs-toggle="dropdown">
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
						<div c			lass="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice View</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Invoice View</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div 			class="invoice-content">
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-logo">
												<img src="assets/img/tutorly.png" alt="logo">
											</div>
										</div>
										<div class="col-md-6">
											<p class="invoice-details">
												<strong>Order:</strong> #00124 <br>
												<strong>Issued:</strong> 20/07/2019
											</p>
										</div>
									</div>
								</div>

								<!-- Invoice Item -->
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-6">
											<div class="invoice-info">
												<strong c								lass="customer-text">Invoice From</strong>
												<p class="invoice-details invoice-details-two">
													Willas Rorrong <br>
													806 Kos bu ika, Sambikerep,<br>
													Surabaya, Indonesia <br>
												</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="invoice-info invoice-info2">
												<strong class="customer-text">Invoice To</strong>
												<p class="invoice-details">
													Julius Wuwung <br>
													299 Tanah Merah, Kenjeran, <br>
													Surabaya, Indonesia <br>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->

								<!-- Invoice Item -->
								<div class="invoice-item">
									<div class="row">
										<div class="col-md-12">
											<div class="invoice-info">
												<strong class="customer-text">Payme								nt Method</strong>
												<p class="invoice-details invoice-details-two">
													Debit Card <br>
													XXXXXXXXXXXX-2541 <br>
													BCA<br>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->

								<!-- Invoice Item -->
								<div class="invoice-item invoice-table-wrap">
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="invoice-table t								able table-bordered">
													<thead>
														<tr>
															<th>Description</th>
															<th class="text-center">Quantity</th>
															<th class="text-center">VAT</th>
															<th class="text-end">Total</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>General Consultation</td>
															<td class="text-center">1</td>
															<td class="text-center">Rp 500.000</td>
															<td class="text-end">Rp 500.000</td>
														</tr>
                                                        <tr>
															<td>Booking Fee</td>
															<td class="text-center">1</td>
															<td class="text-center">Rp 10.000</td>
															<td class="text-end">Rp 10.000</td>
														</tr>
														<tr>
															<td>Video Call Booking</td>
															<td class="text-center">1</td>
															<td class="text-center">Rp 0</td>
															<td class="text-end">Rp 0</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6 col-xl-4 ms-auto">
											<div class="table-responsive">
												<table class="invoice-table-two table">
													<tbody>
													<tr>
														<th>Subtotal:</th>
														<td><span>Rp 510.000</span></td>
													</tr>
													<tr>
														<th>Discount:</th>
														<td><span>-</span></td>
													</tr>
													<tr>
														<th>Total Amount:</th>
														<td><span>Rp 510.000</span></td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Item -->

								<!-- Invoice Information -->
								<div class="other-info">
									<h4>Other information</h4>
									<p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim 								aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero.</p>
								</div>
								<!-- /Invoice Information -->

							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->



		</div>
							<!-- /Main Wrapper -->
