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
                                <li class="breadcrumb-item active" aria-current="page">Mentor Profile</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Mentor Profile</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <!-- Mentor Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mentor-widget">
                                    <div class="user-info-left align-items-center">
                                        <div class="mentor-img d-flex flex-wrap justify-content-center">
                                            <div class="pro-avatar">WR</div>
                                            <div class="rating text-center">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="mentor-details m-0">
                                                <p class="user-location m-0"><i class="fas fa-map-marker-alt"></i>
                                                    Bangladesh, India</p>
                                            </div>
                                        </div>
                                        <div class="user-info-cont">
                                            <h4 class="usr-name">Willas Rorrong</h4>
                                            <p class="mentor-type">Fullstack Developer</p>
                                            <div class="mentor-action">
                                                <p class="mentor-type social-title">Contact Me</p>
                                                <a href="javascript:void(0)" class="btn-blue">
                                                    <i class="fas fa-comments"></i>
                                                </a>
                                                <a href="chat.html" class="btn-blue">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn-blue" data-toggle="modal"
                                                    data-target="#voice_call">
                                                    <i class="fas fa-phone-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info-right d-flex align-items-end flex-wrap">
                                        <div class="hireme-btn text-center">
                                            <span class="hire-rate">Rp 500.000 / Jam</span>
                                            <a class="blue-btn-radius" href="booking">Pesan sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Widget -->

                        <!-- Mentor Details Tab -->
                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <!-- About Details -->
                                <div class="widget about-widget custom-about mb-0">
                                    <h4 class="widget-title">About Me</h4>
                                    <hr />
                                    <p>Saya adalah Willas Rorrong, seorang tutor berpengalaman dengan latar belakang
                                        pendidikan dalam Sastra Inggris dari Universitas Indonesia. Saya memiliki gelar
                                        Master of Arts (M.A) dan telah mengajar selama lebih dari 10 tahun. Selama waktu
                                        tersebut, saya telah membantu ratusan siswa dalam meningkatkan kemampuan
                                        literasi dan apresiasi terhadap literatur Inggris.</p>
                                    <p>Sebagai mentor, saya percaya pada pendekatan yang disesuaikan untuk setiap siswa,
                                        memastikan bahwa setiap sesi tidak hanya informatif tetapi juga menarik dan
                                        sesuai dengan kebutuhan belajar mereka. Saya mengkhususkan diri dalam membantu
                                        siswa mempersiapkan ujian literatur, penulisan esai kritis, dan pemahaman
                                        mendalam tentang karya-karya besar literatur Inggris.</p>
                                    <p>Komitmen saya adalah untuk membimbing siswa mencapai potensi penuh mereka melalui
                                        sesi yang interaktif dan mendukung. Saya menantikan kesempatan untuk bekerja
                                        sama dengan Anda dalam mengeksplorasi kedalaman dan kekayaan sastra Inggris.</p>
                                </div>
                                <!-- /About Details -->
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <!-- Personal Details -->
                                <div class="widget education-widget mb-0">
                                    <h4 class="widget-title">Personal Details</h4>
                                    <hr />
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Jenis Kelamin</span>
                                                        <div class="row-result">Perempuan</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Tanggal Lahir</span>
                                                        <div class="row-result">01 - 02 - 2000</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Personal Details -->

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <!-- Qualification Details -->
                                <div class="widget experience-widget mb-0">
                                    <h4 class="widget-title">Qualification</h4>
                                    <hr />
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Universitas</span>
                                                        <div class="row-result">Universitas Cina</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Jurusan</span>
                                                        <div class="row-result">Informatika</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Type of Degree</span>
                                                        <div class="row-result">S.Kom (Sarjana Komputer)</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Qualification Details -->

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body pb-1 custom-border-card">

                                <!-- Location Details -->
                                <div class="widget awards-widget m-0">
                                    <h4 class="widget-title">Location</h4>
                                    <hr />
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Alamat 1</span>
                                                        <div class="row-result">Kos Bu Ika, Sambikerep</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Negara</span>
                                                        <div class="row-result">Indonesia</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Kota</span>
                                                        <div class="row-result">Surabaya</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Provinsi</span>
                                                        <div class="row-result">Jawa Timur</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Kode Pos</span>
                                                        <div class="row-result">641001</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Location Details -->

                            </div>
                        </div>
                        <!-- /Mentor Details Tab -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->


    </div>
    <!-- /Main Wrapper -->

    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
                                    <h4>Jonathan Doe</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                        aria-label="Close"><i class="material-icons">call_end</i></a>
                                    <a href="voice-call.html" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                        aria-label="Close"><i class="material-icons">call_end</i></a>
                                    <a href="video-call.html" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->

@endsection
