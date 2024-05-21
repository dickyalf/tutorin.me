@extends('layouts.app')
@section('main_content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Appointments</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
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
                        <li><a href="{{ route('mentor-view') }}" "><i
                            class="fas fa-home"></i>Dashboard<span></span></a></li>
                <li><a href="{{ route('mentor-booking') }}"><i
                            class="fas fa-clock"></i>Bookings<span></span></a></li>
                <li><a href="{{route('mentor-message')}}"><i class="fas fa-comments"></i>Messages<span></span></a></li>
                        <li><a href="{{ route('mentor-schedule') }}"><i class="fas fa-hourglass-start"></i>Schedule<span></span></a></li>
                        <li><a href="{{ route('mentor-invoice') }}"><i class="fas fa-file-invoice"></i>Invoices<span></span></a></li>
                        <li><a href="{{route('mentor-review')}}"><i class="fas fa-eye"></i>Reviews <span></i></span></a></li>
                        <li><a href="{{route('mentor-appointments')}}" class="active"><i class="fab fa-blogger-b"></i>Appointments <span></i></span></a></li>
                        {{-- <li><a href="blog.html"><i class="fab fa-blogger-b"></i>Blog <span></span></a></li> --}}
                        <li><a href="{{route('mentor-profile-settings')}}"><i class="fas fa-user-cog"></i>Profile <span></span></a></li>

                        </ul>
                    </div>
                </div>
                <!-- /Sidebar -->

            </div>

            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="appointments">

                    <!-- Appointment List -->
                    <div class="appointment-list">
                        <div class="profile-info-widget">
                            <a href="profile-mentee.html" class="booking-user-img">
                                <img src="assets/img/user/user2.jpg" alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3><a href="profile-mentee.html">Willas Tobing</a></h3>
                                <div class="mentee-details">
                                    <h5><i class="far fa-clock"></i> 14 Nov 2023, 10.00 AM</h5>
                                    <h5><i class="fas fa-map-marker-alt"></i> Palu, Indonesia</h5>
                                    <h5><i class="fas fa-envelope"></i> willas@gmail.com</h5>
                                    <h5 class="mb-0"><i class="fas fa-phone"></i> 0822 5967 2523</h5>
                                </div>
                            </div>
                        </div>
                        <div class="appointment-action">
                            <a href="#" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details">
                                <i class="far fa-eye"></i> View
                            </a>
                            <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                <i class="fas fa-check"></i> Accept
                            </a>
                            <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </div>
                    <!-- /Appointment List -->



                </div>
            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->
@endsection
