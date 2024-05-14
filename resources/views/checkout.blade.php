@extends('layouts.app')
@section('main_content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Checkout</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <!-- Checkout Form -->
                            <form action="success-book">

                                <!-- Personal Information -->
                                <div class="info-widget">
                                    <h4 class="card-title">Personal Information</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <label>Nama Depan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <label>Nama Belakang</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <label>Email</label>
                                                <input class="form-control" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group card-label">
                                                <label>Phone</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exist-customer">Existing Customer? <a href="#">Click here to login</a>
                                    </div>
                                </div>
                                <!-- /Personal Information -->

                                <div class="payment-widget">
                                    <h4 class="card-title">Payment Method</h4>

                                    <!-- Credit Card Payment -->
                                    <div class="payment-list">
                                        <label class="payment-radio credit-card-option">
                                            <input type="radio" name="radio" checked>
                                            <span class="checkmark"></span>
                                            Credit card
                                        </label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group card-label">
                                                    <label for="card_name">Nama pada Kartu</label>
                                                    <input class="form-control" id="card_name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group card-label">
                                                    <label for="card_number">Nomor Kartu</label>
                                                    <input class="form-control" id="card_number"
                                                        placeholder="1234  5678  9876  5432" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group card-label">
                                                    <label for="expiry_month">Bulan Expired</label>
                                                    <input class="form-control" id="expiry_month" placeholder="MM"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group card-label">
                                                    <label for="expiry_year">Tahun Expired</label>
                                                    <input class="form-control" id="expiry_year" placeholder="YY"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group card-label">
                                                    <label for="cvv">CVV</label>
                                                    <input class="form-control" id="cvv" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Credit Card Payment -->

                                    <!-- Paypal Payment -->
                                    <div class="payment-list">
                                        <label class="payment-radio paypal-option">
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                            Paypal
                                        </label>
                                    </div>
                                    <!-- /Paypal Payment -->

                                    <!-- Terms Accept -->
                                    <div class="terms-accept">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="terms_accept">
                                            <label for="terms_accept">Saya sudah membaca dan menyetujui Terms & Conditions <a href="#">Terms &amp;
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                    <!-- /Terms Accept -->

                                    <!-- Submit Section -->
                                    <div class="submit-section mt-4">
                                        <button type="submit" class="btn btn-primary submit-btn">Konfirmasi dan Bayar</button>
                                    </div>
                                    <!-- /Submit Section -->

                                </div>
                            </form>
                            <!-- /Checkout Form -->

                        </div>
                    </div>

                </div>

                <div class="col-md-5 col-lg-4 theiaStickySidebar">

                    <!-- Booking Summary -->
                    <div class="card booking-card">
                        <div class="card-header">
                            <h4 class="card-title">Booking Summary</h4>
                        </div>
                        <div class="card-body">

                            <!-- Booking Mentee Info -->
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
                                    <div class="mentor-details">
                                        <p class="user-location"><i class="fas fa-map-marker-alt"></i> Bangladesh, India
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Booking Mentee Info -->

                            <div class="booking-summary">
                                <div class="booking-item-wrap">
                                    <ul class="booking-date">
                                        <li>Tanggal <span>16 Nov 2019</span></li>
                                        <li>Waktu <span>10:00 AM</span></li>
                                    </ul>
                                    <ul class="booking-fee">
                                        <li>Biaya Mentoring <span>Rp 500.000</span></li>
                                        <li>Biaya Layanan <span>Rp 5.000</span></li>
                                        <li>Biaya Add-Ons: Rekaman Ulang<span>Rp 50.000</span></li>
                                    </ul>
                                    <div class="booking-total">
                                        <ul class="booking-total-list">
                                            <li>
                                                <span>Total</span>
                                                <span class="total-cost">Rp 555.000</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Summary -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
    <!-- /Main Wrapper -->


