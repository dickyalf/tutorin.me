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
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Reviews</h2>
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
                                <li><a href="{{ route('mentor-schedule') }}"><i
                                            class="fas fa-hourglass-start"></i>Schedule<span></span></a></li>
                                <li><a href="{{ route('mentor-invoice') }}"><i
                                            class="fas fa-file-invoice"></i>Invoices<span></span></a></li>
                                <li><a href="{{ route('mentor-review') }}" class="active"><i class="fas fa-eye"></i>Reviews
                                        <span></i></span></a></li>
                                <li><a href="{{ route('mentor-appointments') }}"><i
                                            class="fab fa-blogger-b"></i>Appointments <span></i></span></a></li>
                                            <li><a href="{{route('mentor-profile-settings')}}" ><i class="fas fa-user-cog"></i>Profile <span></span></a></li>

                                {{-- <li><a href="blog.html"><i class="fab fa-blogger-b"></i>Blog <span></span></a></li> --}}

                            </ul>
                        </div>
                    </div>
                    <!-- /Sidebar -->

                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="doc-review review-listing">

                        <!-- Review Listing -->
                        <ul class="comments-list">

                            <!-- Comment List -->
                            <li>
                                <div class="comment">
                                    <img class="avatar rounded-circle" alt="User Image" src="assets/img/user/user.jpg">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment-author">Willas Tobing</span>
                                            <span class="comment-date">Reviewed 2 Days ago</span>
                                            <div class="review-count rating">
                                                <i class="fas fa-star "></i>
                                                <i class="fas fa-star "></i>
                                                <i class="fas fa-star "></i>
                                                <i class="fas fa-star "></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        {{-- <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the consectetur</p> --}}
                                        <p class="comment-content">
                                            Keren, selama tutoring aku jadi paham mengenai pemograman yang basic seperti
                                            cara menggunakan function dengan baik dan benar dan cara menggunakan operator
                                            pada java
                                        </p>
                                        <div class="comment-reply">
                                            <a class="comment-btn" href="#">
                                                <i class="fas fa-reply"></i> Reply
                                            </a>
                                            {{-- <p class="recommend-btn">
                                                <span>Recommend?</span>
                                                <a href="#" class="like-btn">
                                                    <i class="far fa-thumbs-up"></i> Yes
                                                </a>
                                                <a href="#" class="dislike-btn">
                                                    <i class="far fa-thumbs-down"></i> No
                                                </a>
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>

                                <!-- Comment Reply -->
                                <ul class="comments-reply">

                                    <!-- Comment Reply List -->
                                    <li>
                                        <div class="comment">
                                            <img class="avatar rounded-circle" alt="User Image"
                                                src="assets/img/user/user.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Evan Tanuwijaya</span>
                                                    <span class="comment-date">Replied 2 Days ago</span>
                                                </div>
                                                <p class="comment-content">
                                                    Terima Kasih
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- /Comment Reply List -->

                                </ul>
                                <!-- /Comment Reply -->

                            </li>
                            <!-- /Comment List -->

                            <!-- Comment List -->
                            {{-- <li>
                            <div class="comment">
                                <img class="avatar rounded-circle" alt="User Image" src="assets/img/user/user.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Travis Trimble</span>
                                        <span class="comment-date">Reviewed 4 Days ago</span>
                                        <div class="review-count rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                    <p class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                        Curabitur non nulla sit amet nisl tempus
                                    </p>
                                    <div class="comment-reply">
                                        <a class="comment-btn" href="#">
                                            <i class="fas fa-reply"></i> Reply
                                        </a>
                                        <p class="recommend-btn">
                                            <span>Recommend?</span>
                                            <a href="#" class="like-btn">
                                                <i class="far fa-thumbs-up"></i> Yes
                                            </a>
                                            <a href="#" class="dislike-btn">
                                                <i class="far fa-thumbs-down"></i> No
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- /Comment List -->

                        <!-- Comment List -->
                        <li>
                            <div class="comment">
                                <img class="avatar rounded-circle" alt="User Image" src="assets/img/user/user3.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Carl Kelly</span>
                                        <span class="comment-date">Reviewed 5 Days ago</span>
                                        <div class="review-count rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                    <p class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                        Curabitur non nulla sit amet nisl tempus
                                    </p>
                                    <div class="comment-reply">
                                        <a class="comment-btn" href="#">
                                            <i class="fas fa-reply"></i> Reply
                                        </a>
                                        <p class="recommend-btn">
                                            <span>Recommend?</span>
                                            <a href="#" class="like-btn">
                                                <i class="far fa-thumbs-up"></i> Yes
                                            </a>
                                            <a href="#" class="dislike-btn">
                                                <i class="far fa-thumbs-down"></i> No
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                            <!-- /Comment List -->

                        </ul>
                        <!-- /Comment List -->

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
