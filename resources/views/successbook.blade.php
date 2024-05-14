@extends('layouts.app')
@section('main_content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Penjadwalan</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Penjadwalan</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content success-page-cont">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <!-- Success Card -->
                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Penjadwalan Pertemuan Sukses!</h3>
                                <p>Penjadwalan pertemuan dengan <strong>Willas Rorrong</strong><br> pada <strong>12 Nov 2019 5:00PM
                                        to 6:00PM</strong></p>
                                <a href="invoice-view" class="btn btn-primary view-inv-btn">Lihat Nota Pembayaran</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Success Card -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->

    <!-- /Main Wrapper -->
@endsection
