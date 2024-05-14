<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Tutorly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/tutorin-logo-last.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Content -->
        <div class="bg-pattern-style">
            <div class="content">
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="account-box">
                        <div class="login-right">
                            <div class="login-header">
                                <h3>Login <span>Student & Tutor</span></h3>
                                <p class="text-muted">Access to our dashboard</p>
                            </div>
                            <form action="index.html">
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                </div>
                                <a href="{{ route('student-view') }}"><button class="btn btn-primary login-btn"
                                        type="button">Login</button></a>
                                <div class="text-center dont-have">Don’t have an account? <a
                                        href="register.html">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>

        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>


</body>

</html>
