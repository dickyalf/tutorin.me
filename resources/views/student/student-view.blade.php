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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Dashboard</h2>
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
                    <div class="pro-avatar">WT</div>
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
                        <li><a href="chat-mentee.html"><i class="fas fa-comments"></i>Messages <span><i class="fas fa-chevron-right"></i></span></a></li>
                        <li><a href="favourites.html"><i class="fas fa-star"></i>Favourites <span><i class="fas fa-chevron-right"></i></span></a></li> --}}
                        {{-- <li><a href="profile-mentee.html"><i class="fas fa-user-cog"></i>Profile <span><i class="fas fa-chevron-right"></i></span></a></li>
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i>Logout <span><i class="fas fa-chevron-right"></i></span></a></li> --}}
                        <li><a href="{{route('student-view')}}" class="active"><i class="fas fa-home"></i>Dashboard<span></span></a></li>
                        <li><a href="{{route('student-booking')}}"><i class="fas fa-clock"></i>Bookings<span></span></a></li>
                        <li><a href="{{route('student-message')}}"><i class="fas fa-comments"></i>Messages<span></span></a></li>
                        <li><a href="{{route('student-profile-settings')}}"><i class="fas fa-user-cog"></i>Profile <span></span></a></li>

                    </ul>
                </div>
            </div>
            <!-- /Sidebar -->

            </div>

            <div class="col-md-7 col-lg-8 col-xl-9">

                <div class="row">
                    <div class="col-md-12 col-lg-4 dash-board-list blue">
                        <div class="dash-widget">
                            <div class="circle-bar">
                                <div class="icon-col">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h3>1</h3>
                                <h6>Appointments</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4 dash-board-list yellow">
                        <div class="dash-widget">
                            <div class="circle-bar">
                                <div class="icon-col">
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h3>0</h3>
                                <h6>Mentoring Points</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4 dash-board-list pink">
                        <div class="dash-widget">
                            <div class="circle-bar">
                                <div class="icon-col">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h3>-</h3>
                                <h6>Rank</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Mentor Lists</h4>

                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>BASIC INFO</th>
                                                <th>CREATED DATE</th>
                                                <th class="text-center">TAGS</th>
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
                                                <td class="text-center"><span class="pending">Pending</span></td>
                                                <td class="text-center"><a href="{{route('profile')}}" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
@endsection
