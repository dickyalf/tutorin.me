@extends('layouts.app')
@section('main_content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div c lass="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat Nota Pembayaran</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Lihat Nota Pembayaran</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="assets/img/tutorin-logo-last.jpg" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details">
                                        <strong>Order:</strong> #00124 <br>
                                        <strong>Issued:</strong> 20/07/2019
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <strong class="customer-text">Nota dari</strong>
                                        <p class="invoice-details invoice-details-two">
                                            Willas Rorrong <br>
                                            806 Kos bu ika, Sambikerep,<br>
                                            Surabaya, Indonesia <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info invoice-info2">
                                        <strong class="customer-text">Nota ke</strong>
                                        <p class="invoice-details">
                                            Julius Wuwung <br>
                                            299 Tanah Merah, Kenjeran, <br>
                                            Surabaya, Indonesia <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="invoice-info">
                                        <strong class="customer-text">Detail pertemuan</strong>
                                        <p class="invoice-details invoice-details-two">
                                            12 Nov 2019  <br>
                                            5:00PM to 6:00PM <br>
                                            Online <br>
                                            Kelas Algoritma Keamanan Siber<br>
                                            Private<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="invoice-info">
                                        <strong class="customer-text">Metode pembayaran</strong>
                                        <p class="invoice-details invoice-details-two">
                                            Debit Card <br>
                                            XXXXXXXXXXXX-2541 <br>
                                            BCA<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th class="text-center">Jumlah</th>
                                                    <th class="text-center">VAT</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Biaya Mentoring</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Rp 500.000</td>
                                                    <td class="text-end">Rp 500.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Pelayanan</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Rp 5.000</td>
                                                    <td class="text-end">Rp 5.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Add-Ons: Rekaman ulang</td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Rp 50.000</td>
                                                    <td class="text-end">Rp 50.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 ms-auto">
                                    <div class="table-responsive">
                                        <table class="invoice-table-two table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal:</th>
                                                    <td><span>Rp 555.000</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Discount:</th>
                                                    <td><span>-</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Amount:</th>
                                                    <td><span>Rp 555.000</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Information -->
                        <div class="other-info">
                            <h4>Informasi lain</h4>
                            <p class="text-muted mb-0">Berlaku hanya sesuai tanggal main. Penggaduan bisa diadukan pada customer service. Selamat belajar.</p>
                        </div>
                        <!-- /Invoice Information -->

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
    <!-- /Main Wrapper -->
