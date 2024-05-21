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
                        <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">My Bookings</h2>
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
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                        </div>
                        <div class="user-info-cont">
                            <h4 class="usr-name">Willas Tobing</h4>
                            <p class="mentor-type">Mahasiswa Universitas Ciputra</p>
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
                            <li><a href="{{route('student-view')}}" ><i class="fas fa-home"></i>Dashboard<span></span></a></li>
                            <li><a href="{{route('student-booking')}}" class="active"><i class="fas fa-clock"></i>Bookings<span></span></a></li>
                            <li><a href="chat-mentee.html"><i class="fas fa-comments"></i>Messages<span></span></a></li>
                        </ul>
                    </div>
                </div>                <!-- /Sidebar -->
                </div>
            <!-- Booking summary -->
            <div class="col-md-7 col-lg-8 col-xl-9">
                <h3 class="pb-3">Booking Summary</h3>
                <!-- Mentee List Tab -->
                <div class="tab-pane show active" id="mentee-list">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Mentor LISTS</th>
                                            <th>SCHEDULED DATE</th>
                                            <th class="text-center">SCHEDULED TIMINGS</th>
                                            <th class="text-center">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user14.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Evan Tanuwijaya<span>evam@gmail.com</span></a>
                                                </h2>
                                            </td>
                                            <td>12 April 2024</td>
                                            <td class="text-center"><span class="pending">8:00 AM - 16:00 PM</span></td>
                                            <td class="text-center"><a href="{{route('profile')}}" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mentee List Tab -->
            </div>
            <!-- /Booking summary -->

            </div>

    </div>
</div>
@endsection
