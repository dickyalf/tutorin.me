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
                        <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Invoices</h2>
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
                        <li><a href="{{ route('mentor-view') }}" ><i
                            class="fas fa-home"></i>Dashboard<span></span></a></li>
                <li><a href="{{ route('mentor-booking') }}"><i
                            class="fas fa-clock"></i>Bookings<span></span></a></li>
                            <li><a href="{{route('mentor-message')}}"><i class="fas fa-comments"></i>Messages<span></span></a></li>
                            <li><a href="{{ route('mentor-schedule') }}"><i class="fas fa-hourglass-start"></i>Schedule<span></span></a></li>
                        <li><a href="{{ route('mentor-invoice') }}" class="active"><i class="fas fa-file-invoice"></i>Invoices<span></span></a></li>
                        <li><a href="{{route('mentor-review')}}"><i class="fas fa-eye"></i>Reviews <span></i></span></a></li>
                        <li><a href="{{route('mentor-appointments')}}"><i class="fab fa-blogger-b"></i>Appointments <span></i></span></a></li>
                        <li><a href="{{route('mentor-profile-settings')}}"><i class="fas fa-user-cog"></i>Profile <span></span></a></li>

                        {{-- <li><a href="blog.html"><i class="fab fa-blogger-b"></i>Blog <span></span></a></li> --}}

                        </ul>
                    </div>
                </div>
                <!-- /Sidebar -->

            </div>
            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card card-table">
                    <div class="card-body">

                        <!-- Invoice Table -->
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Invoice No</th>
                                        <th>Mentee</th>
                                        <th>Amount</th>
                                        <th>Paid On</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="invoice-view.html">#INV-0010</a>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile-mentee.html" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-circle" src="assets/img/user/user2.jpg" alt="User Image">
                                                </a>
                                                <a href="profile-mentee.html">Tyrone Roberts <span>16</span></a>
                                            </h2>
                                        </td>
                                        <td>$450</td>
                                        <td>14 Nov 2019</td>
                                        <td class="text-end">
                                            <div class="table-action">
                                                <a href="{{route('invoice-view')}}" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye"></i> View
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                    <i class="fas fa-print"></i> Print
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="invoice-view.html">#INV-0009</a>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile-mentee.html" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-circle" src="assets/img/user/user1.jpg" alt="User Image">
                                                </a>
                                                <a href="profile-mentee.html">Julie Pennington <span>01</span></a>
                                            </h2>
                                        </td>
                                        <td>$200</td>
                                        <td>13 Nov 2019</td>
                                        <td class="text-end">
                                            <div class="table-action">
                                                <a href="{{route('invoice-view')}}" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye"></i> View
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                    <i class="fas fa-print"></i> Print
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="invoice-view.html">#INV-0009</a>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile-mentee.html" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-circle" src="assets/img/user/user1.jpg" alt="User Image">
                                                </a>
                                                <a href="profile-mentee.html">Julie Pennington <span>01</span></a>
                                            </h2>
                                        </td>
                                        <td>$200</td>
                                        <td>13 Nov 2019</td>
                                        <td class="text-end">
                                            <div class="table-action">
                                                <a href="{{route('invoice-view')}}" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye"></i> View
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                    <i class="fas fa-print"></i> Print
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Invoice Table -->

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->
@endsection
