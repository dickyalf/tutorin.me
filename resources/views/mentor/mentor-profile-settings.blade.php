@extends('layouts.app')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Profile Settings</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <!-- Profile Sidebar -->
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                <!-- Sidebar -->
                <div class="profile-sidebar">
                    <div class="user-widget">
                        <div class="pro-avatar">ET</div>
                        <div class="rating">
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                        </div>
                        <div class="user-info-cont">
                            <h4 class="usr-name">Evan Tanuwijaya</h4>
                            <p class="mentor-type">Full Stack Developer, AI Enthusiast</p>
                        </div>
                    </div>
                    {{-- <div class="progress-bar-custom">
                <h6>Complete your profiles ></h6>
                <div class="pro-progress">
                    <div class="tooltip-toggle" tabindex="0"></div>
                    <div class="tooltip">80%</div>
                </div>
            </div> --}}
                    <div class="custom-sidebar-nav">
                        <ul>
                            {{-- <li><a href="dashboard-mentee.html" class="active"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
                    <li><a href="bookings-mentee.html"><i class="fas fa-clock"></i>Bookings <span><i class="fas fa-chevron-right"></i></span></a></li>
                    <li><a href="chat-mentee.html"><i class="fas fa-comments"></i>Messages <span><i class="fas fa-chevron-right"></i></span></a></li> --}}
                            <li><a href="{{ route('mentor-view') }}" ><i
                                        class="fas fa-home"></i>Dashboard<span></span></a></li>
                            <li><a href="{{ route('mentor-booking') }}"><i
                                        class="fas fa-clock"></i>Bookings<span></span></a></li>
                            <li><a href="{{route('mentor-message')}}"><i class="fas fa-comments"></i>Messages<span></span></a></li>
                                    <li><a href="{{ route('mentor-schedule') }}"><i class="fas fa-hourglass-start"></i>Schedule<span></span></a></li>
                                    <li><a href="{{ route('mentor-invoice') }}"><i class="fas fa-file-invoice"></i>Invoices<span></span></a></li>
                                    <li><a href="{{route('mentor-review')}}"><i class="fas fa-eye"></i>Reviews <span></i></span></a></li>
                                    <li><a href="{{route('mentor-appointments')}}"><i class="fab fa-blogger-b"></i>Appointments <span></i></span></a></li>
                                    {{-- <li><a href="blog.html"><i class="fab fa-blogger-b"></i>Blog <span></span></a></li> --}}
                                    <li><a href="{{route('mentor-profile-settings')}}" class="active"><i class="fas fa-user-cog"></i>Profile <span></span></a></li>

                        </ul>
                    </div>
                </div>
                <!-- /Sidebar -->

            </div>
            <!-- /Profile Sidebar -->

            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">

                        <!-- Profile Settings Form -->
                        <form>
                            <div class="row form-row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <div class="change-avatar">
                                            <div class="profile-img">
                                                <img src="assets/img/user/user.jpg" alt="User Image">
                                            </div>
                                            <div class="upload-img">
                                                <div class="change-photo-btn">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file" class="upload">
                                                </div>
                                                <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="Evan">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="Tanuwijaya">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" value="24-07-1983">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select class="form-control select">
                                            <option>A-</option>
                                            <option>A+</option>
                                            <option>B-</option>
                                            <option>B+</option>
                                            <option>AB-</option>
                                            <option>AB+</option>
                                            <option>O-</option>
                                            <option>O+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" value="evan@gmail.com">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" value="+62 856 4467 333" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Address</label>
                                        <input type="text" class="form-control" value="Citraland">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="Surabaya">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" value="Jawa Timur">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" value="13420">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="Indonesia">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                            </div>
                        </form>
                        <!-- /Profile Settings Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->

@section('main_content')
@endsection
