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

    <style>
        .custom-link {
            text-decoration: underline;
            /* Menambahkan underline */
        }

        .custom-link:hover {
            color: blue;
            /* Warna teks saat dihover */
            text-decoration: underline;
            /* Memastikan underline tetap ada saat dihover */
        }
    </style>

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Content -->
        <div class="bg-pattern-style bg-pattern-style-register">
            <div class="content">
                <!-- Register Content -->
                <div class="account-content">

                    <div class="account-box">

                        <div class="login-right">

                            <div class="login-header">
                                <h3><span>Tutor</span> Register</h3>
                                <p class="text-muted">Access to our dashboard</p>
                            </div>

                            <!-- Register Form -->
                            <form action="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama dapan</label>
                                            <input id="first-name" type="text" class="form-control" name="first_name"
                                                autofocus="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama belakang</label>
                                            <input id="last-name" type="text" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input id="email" type="email" class="form-control">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-xs custom-checkbox">
                                        <input type="checkbox" class="form-check-input" name="agreeCheckboxUser"
                                            id="agree_checkbox_user">
                                        <label class="form-check-label" for="agree_checkbox_user">I setuju untuk menjadi
                                            tutor dan sudah membaca </label>
                                        <a tabindex="-1" href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#termsModal" class="custom-link">Syarat dan Ketentuan</a>


                                        <!-- terms -->


                                        <div class="modal fade" id="termsModal" tabindex="-1" role="dialog"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Syarat dan
                                                            Ketentuan Registrasi Tutor</h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Terakhir diperbarui: 15/05/2024<br><br>
                                                            Selamat datang di Tutorin! Syarat dan
                                                            Ketentuan ini ("Syarat") mengatur pendaftaran, tanggung
                                                            jawab, dan kegiatan Anda sebagai tutor di platform kami.
                                                            Dengan mendaftar sebagai tutor di Tutorin, Anda setuju untuk
                                                            mematuhi Syarat ini.
                                                            <br>1.Kelayakan Pendaftaran
                                                            <br>Anda harus berusia minimal 18 tahun dan memiliki KTP
                                                            untuk mendaftar sebagai tutor.
                                                            Anda harus memiliki kualifikasi yang relevan dan pengalaman
                                                            dalam bidang yang Anda ajarkan.
                                                            Anda harus memberikan informasi yang akurat dan lengkap
                                                            selama proses pendaftaran.
                                                            Jika Anda di bawah usia 18 tahun, pendaftaran harus
                                                            dilakukan oleh orangtua atau wali yang sah atas nama Anda.
                                                            <br>2.Proses Pendaftaran
                                                            Lengkapi formulir pendaftaran online dengan informasi yang
                                                            diperlukan, termasuk data pribadi, kualifikasi pendidikan,
                                                            dan pengalaman mengajar.
                                                            Semua dokumen pendukung (seperti sertifikat pendidikan dan
                                                            identifikasi diri) harus diunggah dan diverifikasi oleh tim
                                                            kami.
                                                            Setelah pendaftaran Anda disetujui, Anda akan menerima
                                                            konfirmasi melalui email.
                                                            <br>3.Pembuatan Kelas
                                                            Tutor bertanggung jawab untuk membuat dan mengelola
                                                            deskripsi kelas, termasuk judul, konten, jadwal, dan biaya.
                                                            Semua materi kelas harus sesuai dengan pedoman kami dan
                                                            tidak boleh melanggar hak cipta atau hak kekayaan
                                                            intelektual pihak lain.
                                                            Tutor harus memberikan kelas sesuai dengan deskripsi yang
                                                            telah diposting dan memastikan kualitas pengajaran yang
                                                            tinggi.
                                                            Kelas online yang dibuat wajib menggunakan platform video
                                                            call Tutorin.
                                                            <br>4.Komisi dan Pembayaran
                                                            Tutorin akan mengambil komisi sebesar 10% dari setiap
                                                            pembayaran kelas yang diterima.
                                                            Pembayaran kepada tutor akan diproses dalam waktu 1 hari
                                                            kerja setelah kelas selesai, melalui metode pembayaran yang
                                                            disetujui.
                                                            Tutor bertanggung jawab untuk memastikan informasi
                                                            pembayaran mereka akurat dan terkini.
                                                            <br>5.Kewajiban dan Tanggung Jawab
                                                            Tutor harus menjaga profesionalisme dan integritas selama
                                                            berinteraksi dengan murid.
                                                            Tutor harus mematuhi semua hukum dan peraturan yang berlaku,
                                                            termasuk namun tidak terbatas pada peraturan pendidikan dan
                                                            perlindungan data.
                                                            Tutor dilarang menyebarkan informasi pribadi murid atau
                                                            menggunakan informasi tersebut untuk tujuan lain selain
                                                            pengajaran.
                                                            Tutor dilarang menjelekkan atau merusak reputasi Tutorin di
                                                            depan umum atau kepada murid.
                                                            <br>6.Kebijakan Privasi dan Penggunaan Data
                                                            Kami mengumpulkan, menyimpan, dan menggunakan data pribadi
                                                            Anda sesuai dengan Kebijakan Privasi kami.
                                                            Data pribadi Anda dapat digunakan untuk meningkatkan layanan
                                                            kami, termasuk tetapi tidak terbatas pada personalisasi
                                                            konten, pengembangan algoritma pembelajaran, dan peningkatan
                                                            pengalaman pengguna.
                                                            Kami akan mengambil langkah-langkah yang wajar untuk
                                                            melindungi data pribadi Anda dari akses yang tidak sah,
                                                            pengungkapan, atau penyalahgunaan.
                                                            Dengan menggunakan layanan kami, Anda memberikan persetujuan
                                                            kepada kami untuk menggunakan data Anda untuk tujuan-tujuan
                                                            tersebut.
                                                            <br>7.Pembatalan dan Pengembalian Dana
                                                            Tutor yang perlu membatalkan kelas harus memberitahukan
                                                            murid dan platform sesegera mungkin.
                                                            Pembatalan yang dilakukan oleh tutor akan mengakibatkan
                                                            pengembalian dana penuh kepada murid.
                                                            Pembatalan berulang kali tanpa alasan yang jelas dapat
                                                            mengakibatkan penangguhan atau penghentian akun tutor.
                                                            <br>8.Penilaian dan Umpan Balik
                                                            Murid dapat memberikan penilaian dan umpan balik terhadap
                                                            kelas yang diambil. Penilaian ini akan dipublikasikan di
                                                            profil tutor.
                                                            Tutor yang memiliki pelanggan setia dan menerima ulasan
                                                            positif secara konsisten akan mendapatkan poin lebih tinggi
                                                            di area umpan balik. Poin ini akan meningkatkan visibilitas
                                                            dan reputasi tutor di platform kami.
                                                            Tutor dianjurkan untuk menanggapi umpan balik secara
                                                            profesional dan menggunakan umpan balik tersebut untuk
                                                            meningkatkan kualitas pengajaran.
                                                            <br>9.Pelanggaran dan Sanksi
                                                            Pelanggaran terhadap Syarat ini dapat mengakibatkan sanksi,
                                                            termasuk tetapi tidak terbatas pada penangguhan atau
                                                            penghentian akun.
                                                            Tutorin berhak untuk menghapus konten yang melanggar atau
                                                            menangguhkan akun tanpa pemberitahuan sebelumnya jika
                                                            ditemukan pelanggaran berat.
                                                            <br>10.Perubahan Syarat
                                                            Kami berhak untuk mengubah Syarat ini kapan saja. Setiap
                                                            perubahan akan diposting di halaman ini, dan Syarat yang
                                                            direvisi akan berlaku segera setelah diposting.
                                                            Tutor diharapkan untuk secara rutin memeriksa halaman ini
                                                            untuk perubahan terbaru.
                                                            <br>
                                                            Jika Anda memiliki pertanyaan atau kekhawatiran mengenai
                                                            Syarat dan Ketentuan ini, silakan hubungi kami di
                                                            082337225106.
                                                            Dengan mendaftar sebagai tutor di Tutorin, Anda mengakui
                                                            bahwa Anda telah membaca, memahami, dan setuju untuk terikat
                                                            oleh Syarat dan Ketentuan ini.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary login-btn" type="submit">Buat Akun</button>
                                        <div class="account-footer text-center mt-3">
                                            Already have an account? <a class="forgot-link mb-0"
                                                href="{{ route('login') }}">Login</a>
                                        </div>
                            </form>
                            <!-- /Register Form -->

                        </div>
                    </div>
                </div>
                <!-- /Register Content -->

            </div>

        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
