<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - Workshop</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('images/PCC.png')}}" rel="icon">
    <link href="{{asset('images/PCC.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!--  CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form_style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('layout.header')

    <!-- ======= Hero Section ======= -->
    @yield('hero')

    <main id="main">

        @yield('main')

    </main>

    <!-- ======= Footer ======= -->

    @extends('layout.footer')

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="{{asset('assets/js/form_popup.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script>
        var currentPage = 1;
        var rowsPerPage = 10;
        var tableRows = document.querySelectorAll('#dtBasicExample tbody tr');
        var totalPages = Math.ceil(tableRows.length / rowsPerPage);

        showPage(1);

        document.getElementById('prevPage').addEventListener('click', function () {
            if (currentPage > 1) {
                showPage(--currentPage);
            }
        });

        document.getElementById('nextPage').addEventListener('click', function () {
            if (currentPage < totalPages) {
                showPage(++currentPage);
            }
        });

        function showPage(page) {
            var start = (page - 1) * rowsPerPage;
            var end = start + rowsPerPage;

            for (var i = 0; i < tableRows.length; i++) {
                if (i >= start && i < end) {
                    tableRows[i].style.display = '';
                } else {
                    tableRows[i].style.display = 'none';
                }
            }
        }
    </script>

    <script>
        function shareImage(imageUrl) {
            if (navigator.share) {
                navigator.share({
                    title: 'Bagikan gambar ini',
                    url: imageUrl
                }).then(() => {
                    console.log('Gambar berhasil dibagikan');
                }).catch((error) => {
                    console.error('Error sharing:', error);
                });
            } else {
                alert('Maaf, fitur share tidak didukung di browser Anda.');
            }
        }
    </script>

</body>

</html>