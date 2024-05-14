@extends('layouts.app')
@section('main_content')
<!-- Main Wrapper -->

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Booking</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="booking-user-info">
                            <a href="{{ route('profile') }}" class="booking-user-img">
                                <img src="assets/img/user/user2.jpg" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4><a href="{{ route('profile') }}">Willas Rorrong</a></h4>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">35</span>
                                </div>
                                <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Bangladesh, India</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-6">
                        <h4 class="mb-1">11 November 2019</h4>
                        <p class="text-muted">Monday</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 text-sm-end">
                        <div class="bookingrange btn btn-white btn-sm mb-3">
                            <i class="far fa-calendar-alt me-2"></i>
                            <span></span>
                            <i class="fas fa-chevron-down ms-2"></i>
                        </div>
                    </div>
                </div>
                <!-- Schedule Widget -->
                <div class="card booking-schedule schedule-widget">

                    <!-- Schedule Header -->
                    <div class="schedule-header">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Day Slot -->
                                <div class="day-slot">
                                    <ul>
                                        <li class="left-arrow">
                                            <a href="">
                                                <i class="fa fa-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <span>Mon</span>
                                            <span class="slot-date">11 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Tue</span>
                                            <span class="slot-date">12 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Wed</span>
                                            <span class="slot-date">13 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Thu</span>
                                            <span class="slot-date">14 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Fri</span>
                                            <span class="slot-date">15 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Sat</span>
                                            <span class="slot-date">16 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Sun</span>
                                            <span class="slot-date">17 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li class="right-arrow">
                                            <a href="">
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Day Slot -->

                            </div>
                        </div>
                    </div>
                    <!-- /Schedule Header -->

                    <!-- Schedule Content -->
                    <div class="schedule-cont">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Time Slot -->
                                <div class="time-slot" id="time-slot">
                                    <ul class="clearfix">
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dis">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="dis">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="dis">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dis">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="dis">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="dis">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Time Slot -->

                            </div>
                        </div>
                    </div>
                    <!-- /Schedule Content -->

                </div>
                <!-- /Schedule Widget -->

                <!-- Submit Section -->
                <div class="submit-section proceed-btn text-end">
                    <a href="checkout" class="btn btn-primary submit-btn">Lanjutkan ke Pembayaran</a>
                </div>
                <!-- /Submit Section -->

            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const timeSlotContainer = document.getElementById('time-slot');
        const timeSlots = timeSlotContainer.querySelectorAll('.timing');

        timeSlots.forEach(slot => {
            slot.addEventListener('click', function (event) {
                event.preventDefault();

                if (this.classList.contains('selected')) {
                    this.classList.remove('selected'); // Deselect the time slot
                } else {
                    // Remove 'selected' class from all other time slots
                    // timeSlots.forEach(slot => slot.classList.remove('selected'));
                    this.classList.add('selected'); // Select the clicked time slot
                }
            });
        });
    });
</script>
@endsection
<!-- /Main Wrapper -->
