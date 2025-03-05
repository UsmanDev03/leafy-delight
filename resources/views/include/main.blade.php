
<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>Leafy Delight </title>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description"
        content="Leafy Delights is a minimal, clean, and modern One Page  designed for farms and other Microgreens-related businesses, such as organic farms, agricultural research centers, or produce stores.">
    <meta name="keywords"
        content=" dairy farm, poultry farm, livestock, organic produce, fresh vegetables, fruits, grains, sustainable Microgreens, eco-friendly farming, farm machinery, irrigation, tractor">
    <meta name="author" >
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- noUiSlider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/odometer.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/map.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/textanimation.css')}}" />

    <!-- Font -->
    <link rel="stylesheet" href="{{asset('font/fonts.css')}}" />

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('icons/icomoon/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('icons/fontawesome/css/all.min.css')}}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('images/leafy/leafy logo favicon.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/leafy/leafy logo favicon.png')}}" />

    <!--font awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body class="counter-scroll">


    <!-- Wrapper -->
 <!-- Header  -->
  @include('include.header')
<!-- /.Header -->
    @yield('content')
    @include('include.footer')
    <!-- Javascript -->
    @include('include.script')



</body>

</html>