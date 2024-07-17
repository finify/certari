<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--=====TITLE=======-->
    <title>Certari | Home</title>

    <!--=====FAV ICON=======-->
    <link rel="shortcut icon" href="/homeassets/img/certarifavicon.svg" />

    <!--=====CSS=======-->
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/fontawesome.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/sidebar.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/mobile.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/modal-video.min.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/plugins/slick-slider.css" />
    <link rel="stylesheet" href="/homeassets/assets/css/typography.css" />
    <link rel="stylesheet" href="/homeassets/assets/scss/master.css" />

    <!--=====JQUERY=======-->
    <script src="/homeassets/assets/js/plugins/jquery-3-6-0.min.js"></script>
    <script src="/homeassets/assets/js/plugins/waypoints.js"></script>
</head>

<body class="inner-pages">
    <!-- Main Header-->
	@include('home.layout.header')
    <!--End Main Header -->
    
	@yield('content')

	@include('home.layout.footer')
    
    

    <!--=====JS=======-->
    <script src="/homeassets/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/homeassets/assets/js/plugins/fontawesome.js"></script>
    <script src="/homeassets/assets/js/plugins/counter.js"></script>
    <script src="/homeassets/assets/js/plugins/owl-carousel.min.js"></script>
    <script src="/homeassets/assets/js/plugins/jquery-modal.min.js"></script>
    <script src="/homeassets/assets/js/plugins/sidebar.js"></script>
    <script src="/homeassets/assets/js/plugins/jquery.nice-select.js"></script>
    <script src="/homeassets/assets/js/plugins/aos.js"></script>
    <script src="/homeassets/assets/js/plugins/slider.js"></script>
    <script src="/homeassets/assets/js/plugins/mobilemenu.js"></script>
    <script src="/homeassets/assets/js/main.js"></script>
</body>

</html>