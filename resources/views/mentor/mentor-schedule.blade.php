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
                            <li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Schedule Timings</h2>
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
                                <li><a href="{{ route('mentor-view') }}"><i
                                            class="fas fa-home"></i>Dashboard<span></span></a></li>
                                <li><a href="{{ route('mentor-booking') }}"><i
                                            class="fas fa-clock"></i>Bookings<span></span></a></li>
                                <li><a href="{{ route('mentor-message') }}"><i
                                            class="fas fa-comments"></i>Messages<span></span></a></li>
                                <li><a href="{{ route('mentor-schedule') }}" class="active"><i
                                            class="fas fa-hourglass-start"></i>Schedule<span></span></a></li>
                                <li><a href="{{ route('mentor-invoice') }}"><i class="fas fa-file-invoice"></i>Invoices
                                        <span></span></a></li>
                                <li><a href="{{ route('mentor-review') }}"><i class="fas fa-eye"></i>Reviews
                                        <span></i></span></a></li>
                                <li><a href="{{ route('mentor-appointments') }}"><i
                                            class="fab fa-blogger-b"></i>Appointments <span></i></span></a></li>
                                <li><a href="{{ route('mentor-profile-settings') }}"><i class="fas fa-user-cog"></i>Profile
                                        <span></span></a></li>

                                {{-- <li><a href="blog.html"><i class="fab fa-blogger-b"></i>Blog <span></span></a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /Sidebar -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Schedule Timings</h4>
                                    <div class="profile-box">
                                        <div class="row">

                                            {{-- <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Timing Slot Duration</label>
                                                    <select class="select form-control">
                                                        <option>Select</option>
                                                        <option>15 mins</option>
                                                        <option selected="selected">30 mins</option>
                                                        <option>45 mins</option>
                                                        <option>1 Hour</option>
                                                    </select>
                                                </div>
                                            </div> --}}

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button id="add-event-button">Add Event</button>

                                                <div id='calendar'></div>

                                                <!-- Modal -->
                                                <!-- Modal for adding event -->
                                                <div id="addEventModal" class="modal">
                                                    <div class="modal-content">
                                                      <span class="close">&times;</span>
                                                      <h2>Add New Event</h2>
                                                      <label for="eventTitle">Event Title:</label>
                                                      <input type="text" id="eventTitle" placeholder="Enter event title"><br><br>
                                                      <label for="startDate">Start Date:</label>
                                                      <input type="date" id="startDate"><br><br>
                                                      <label for="startTime">Start Time:</label>
                                                      <input type="time" id="startTime"><br><br>
                                                      <label for="endDate">End Date:</label>
                                                      <input type="date" id="endDate"><br><br>
                                                      <label for="endTime">End Time:</label>
                                                      <input type="time" id="endTime"><br><br>
                                                      <button id="submitEvent">Add Event</button>
                                                    </div>
                                                  </div>
                                                <div id="messageModal" class="modal">
                                                <div class="modal-content">
                                                    <span class="close">&times;</span>
                                                    <p id="modal-message"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
