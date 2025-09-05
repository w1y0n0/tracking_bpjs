<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tracking BPJS</title>
    <meta name="description" content="Tracking BPJS" />
    <meta name="keywords" content="">
    {{-- <meta name="author" content="" />
        <meta name="csrf-token" content="0SscbZdgd6bjL2Una44DKVQ7FL2gX128CcABB389"> --}}
    <!-- Favicon icon -->

    <!-- Favicons -->
    {{-- <link href="{{ asset('images/icon-kopkar-pdam.png') }}" rel="icon">
    <link href="{{ asset('images/icon-kopkar-pdam.png') }}" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        body {
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('/') }}flexstart/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}flexstart/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}flexstart/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/') }}flexstart/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}flexstart/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/') }}flexstart/css/main.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .login-button {
            background-color: #155f82;
            color: white;
            /* Tambahkan warna teks jika perlu */
            border: none;
            /* Opsional: Hapus border */
            padding: 10px 20px;
            /* Opsional: Ukuran tombol */
            cursor: pointer;
            /* Memberikan efek pointer saat hover */
            transition: background-color 0.3s ease;
            /* Efek transisi */
        }

        .login-button:hover {
            background-color: green;
            /* Warna hijau saat hover */
            color: white;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('/') }}images/kopkar-pdam.png" alt="">
                {{-- <h1 class="sitename mt-2">SPPD</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Selamat Datang,</h1>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Di Tracking Pendaftaran BPJS
                        </p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="btn btn-lg mr-2 login-button">Admin </a> &nbsp;&nbsp;
                            <a href="#" class="btn btn-lg mr-2 login-button">Pegawai </a> &nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('/') }}flexstart/img/hero-img.png" class="img-fluid animated"
                            alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container text-center mt-4">
            <p>
                2025 &copy; <strong><span><a href="#" target="_blank">Kirana Deviani Arimbi</a></span></strong>
            </p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}flexstart/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('/') }}flexstart/vendor/php-email-form/validate.js"></script> --}}
    <script src="{{ asset('/') }}flexstart/vendor/aos/aos.js"></script>
    <script src="{{ asset('/') }}flexstart/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}flexstart/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('/') }}flexstart/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('/') }}flexstart/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}flexstart/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/') }}flexstart/js/main.js"></script>

</body>

</html>
