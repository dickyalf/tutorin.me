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

                                                <!-- Modal for adding event -->
                                                <div id="addEventModal" class="modal">
                                                    <div class="modal-content">
                                                        <span class="close">&times;</span>
                                                        <h2>Add New Event</h2>
                                                        <label for="eventTitle">Event Title:</label>
                                                        <input type="text" id="eventTitle" placeholder="Enter event title"><br><br>
                                                        <label for="startDate">Date:</label>
                                                        <input type="date" id="startDate"><br><br>
                                                        <label for="startTime">Start Time:</label>
                                                        <select id="startTime">
                                                            <option value="00:00">00:00</option>
                                                            <option value="00:30">00:30</option>
                                                            <option value="01:00">01:00</option>
                                                            <option value="01:30">01:30</option>
                                                            <option value="02:00">02:00</option>
                                                            <option value="02:30">02:30</option>
                                                            <option value="03:00">03:00</option>
                                                            <option value="03:30">03:30</option>
                                                            <option value="04:00">04:00</option>
                                                            <option value="04:30">04:30</option>
                                                            <option value="05:00">05:00</option>
                                                            <option value="05:30">05:30</option>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="12:30">12:30</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="13:30">13:30</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="14:30">14:30</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="15:30">15:30</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="16:30">16:30</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="17:30">17:30</option>
                                                            <option value="18:00">18:00</option>
                                                            <option value="18:30">18:30</option>
                                                            <option value="19:00">19:00</option>
                                                            <option value="19:30">19:30</option>
                                                            <option value="20:00">20:00</option>
                                                            <option value="20:30">20:30</option>
                                                            <option value="21:00">21:00</option>
                                                            <option value="21:30">21:30</option>
                                                            <option value="22:00">22:00</option>
                                                            <option value="22:30">22:30</option>
                                                            <option value="23:00">23:00</option>
                                                            <option value="23:30">23:30</option>
                                                        </select><br><br>
                                                        <label for="endTime">End Time:</label>
                                                        <select id="endTime">
                                                            <option value="00:00">00:00</option>
                                                            <option value="00:30">00:30</option>
                                                            <option value="01:00">01:00</option>
                                                            <option value="01:30">01:30</option>
                                                            <option value="02:00">02:00</option>
                                                            <option value="02:30">02:30</option>
                                                            <option value="03:00">03:00</option>
                                                            <option value="03:30">03:30</option>
                                                            <option value="04:00">04:00</option>
                                                            <option value="04:30">04:30</option>
                                                            <option value="05:00">05:00</option>
                                                            <option value="05:30">05:30</option>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="12:30">12:30</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="13:30">13:30</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="14:30">14:30</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="15:30">15:30</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="16:30">16:30</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="17:30">17:30</option>
                                                            <option value="18:00">18:00</option>
                                                            <option value="18:30">18:30</option>
                                                            <option value="19:00">19:00</option>
                                                            <option value="19:30">19:30</option>
                                                            <option value="20:00">20:00</option>
                                                            <option value="20:30">20:30</option>
                                                            <option value="21:00">21:00</option>
                                                            <option value="21:30">21:30</option>
                                                            <option value="22:00">22:00</option>
                                                            <option value="22:30">22:30</option>
                                                            <option value="23:00">23:00</option>
                                                            <option value="23:30">23:30</option>
                                                        </select><br><br>
                                                        <button id="submitEvent">Add Event</button>                                                    </div>
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
