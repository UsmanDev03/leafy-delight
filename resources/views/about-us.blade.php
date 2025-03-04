@extends('include.main')
@section('content')


        <!-- Page-title -->
        <div class="page-title page-about-us">
            <div class="rellax" data-rellax-speed="5">
                <img src="{{asset($about->ban_img)}}" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                   {{$about->ban_title}}
                                </p>
                                <h1 class="title">
                                {{$about->ban_subtitle}}
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">About Us </a>
                                    <!-- <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">About The Farm</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="images/item/grass.png" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content pb-0 pt-93">
            <!-- Section our-agriculture-2 -->
            <section class="s-our-agriculture style-2 type-2">
                <div class="counter-wrap">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wrap">
                                    <p class="text font-snowfall fs-30">
                                    {{$about->sec1_desc}}<span>
                                            <a href="#" class="hover-text-4">
                                            <u>
                                                {{$about->sec1_link_text}}
                                                </u>
                                            </a>

                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="wg-counter style-5">
                                    <div class="icon style-circle">
                                        <i class="fa-solid fa-leaf"></i>
                                    </div>
                                    <div class="counter-item">
                                        <p class="title font-worksans fw-5 fs-18">
                                           {{$about->sec1_counter1_title}}
                                        </p>
                                        <div class="counter">
                                            <div id="odometer" class="odometer style-5">{{$about->sec1_counter1_count}}</div>
                                            <span class="sub-odo color-secondary">+</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="wg-counter style-5">
                                    <div class="icon style-circle">
                                        <i class="fa-solid fa-face-smile"></i>
                                    </div>
                                    <div class="counter-item">
                                        <p class="title font-worksans fw-5 fs-18">
                                        {{$about->sec1_counter2_title}}
                                        </p>
                                        <div class="counter">
                                            <div class="odometer style-5-2">{{$about->sec1_counter2_count}}</div>
                                            <span class="sub-odo color-secondary">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section our-agriculture-2 -->

            <!-- Section welcome to -->
            <!-- <section class="s-welcome-to">
                <div class="s-content-wrap">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="content-section">
                                    <div class="heading-section style-4">
                                        <div class="img-item">
                                            <img class="tf-animate-1" src="images/item/leaves-2.png" alt="">
                                        </div>
                                        <p class="sub-title">
                                            Welcome to Leafy Delights Agriculture & Organic Farms
                                        </p>
                                        <p class="title wow fadeInUp" data-wow-delay="0s">
                                            Providing The Finest
                                            Products To The Best
                                            Feed Suppliers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="text-wrap">
                                    <p class="text-1 wow fadeInUp" data-wow-delay="0s">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus odio,
                                        egestas vitae augue sed, vulputate viverra velit. Quisque fringilla viverra
                                        turpis, at condimentum arcu convallis sit amet. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra, per inceptos himenaeos. Fusce laoreet lectus
                                        in velit euismod.
                                    </p>
                                    <p class="text-2 wow fadeInUp" data-wow-delay="0s">
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Fusce laoreet lectus in velit euismod. Praesent fermentum dignissim
                                        sapien ornare sagittis. Cras erat lorem, vulputate non magna ac, molestie
                                        bibendum felis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="s-img-item item-1 scroll-element-3">
                        <img class="scale-1-1" src="images/section/yellow-f.png" alt="">
                    </div>
                </div>
                <div class="s-content-wrap-2">
                    <div class="tf-container w-1620">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="swiper-container slider-gallery">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gallery-item img-hover wow fadeInUp" data-wow-delay="0s">
                                                <div class="image hover-item">
                                                    <img class=" lazyload" src="images/widget/gallery-item-4.jpg"
                                                        data-src="./images/widget/gallery-item-4.jpg" alt="">
                                                </div>
                                                <a href="gallery.html" class="add-gallery">
                                                    +
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-item img-hover wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image hover-item">
                                                    <img class=" lazyload" src="images/widget/gallery-item-7.jpg"
                                                        data-src="./images/widget/gallery-item-7.jpg" alt="">
                                                </div>
                                                <a href="gallery.html" class="add-gallery">
                                                    +
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-item img-hover wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image hover-item">
                                                    <img class=" lazyload" src="images/blog/blog-1.jpg"
                                                        data-src="./images/blog/blog-1.jpg" alt="">
                                                </div>
                                                <a href="gallery.html" class="add-gallery">
                                                    +
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery-item img-hover wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image hover-item">
                                                    <img class=" lazyload" src="images/widget/gallery-item-9.jpg"
                                                        data-src="./images/widget/gallery-item-9.jpg" alt="">
                                                </div>
                                                <a href="gallery.html" class="add-gallery">
                                                    +
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-text wow fadeInUp" data-wow-delay="0s">
                                    <p class="title font-worksans fw-7">
                                        Our Mission
                                    </p>
                                    <p class="text font-snowfall">
                                        Our mission is to contribute to the promotion of agricultural products in
                                        Vietnam with a commitment to produce sustainable values that meet international
                                        standards and thereby create a fair and competitive market
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-text wow fadeInUp" data-wow-delay="0.1s">
                                    <p class="title font-worksans fw-7">
                                        Our Vision
                                    </p>
                                    <p class="text font-snowfall">
                                        Our mission is to contribute to the promotion of agricultural products in
                                        Vietnam with a commitment to produce sustainable values that meet international
                                        standards and thereby create a fair and competitive market
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-img-item item-1">
                        <img src="images/item/wave-yellow-has-item.png" alt="">
                    </div>

                </div>
            </section>  -->
            <!-- /.Section welcome to -->

            <!-- Section our agriculture -->
            <section class="s-our-agriculture style-3" id="about-newbg"  >
                <div class="s-content-wrap content-section">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="image-wrap">
                                    <div class="image video-wrap style-2">
                                        <img src="images/leafy/mirco-farming02.jpg" alt="" class="lazyload">
                                        <a href="https://www.youtube.com/watch?v=OC5-34STAeY"
                                            class="style-icon-play popup-youtube">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="content">
                                    <div class="heading-section style-2">
                                        <div class="img-item">
                                            <div class="item">
                                                <img class="tf-animate-1" src="{{ asset('images/item/leaves-2.png') }}" alt="" />
                                            </div>
                                            <p class="sub-title">
                                                Our Skill's

                                            </p>
                                        </div>

                                        <p class="title text-anime-style-1">
                                            {{$about->sec2_title}}
                                        </p>
                                    </div>
                                    <p class="text mb-20" style="color: black;" >
                                       {{$about->sec2_desc}}
                                    </p>
                                    <div class="wg-progress mb-29">
                                        <div class="top">
                                            <span> {{$about->sec2_progress_title1}}</span>
                                            <span>{{$about->sec2_progress_num}}%</span>
                                        </div>
                                        <div class="progress tf-animate-1" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 99%"></div>
                                        </div>
                                    </div>
                                    <div class="wg-progress">
                                        <div class="top">
                                            <span>{{$about->sec2_progress_title2}}</span>
                                            <span>{{$about->sec2_progress_num2}}%</span>
                                        </div>
                                        <div class="progress tf-animate-1" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 98%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="s-img-item item-1 ">
                    <img class="wow fadeInRight" data-wow-delay="0s" id="leaves-moving" src="images/leafy/palm leaves-01.png" alt="">
                </div>
                <div class="s-img-item item-2">
                    <img src="images/item/page-title-top.png" alt="">
                </div>
            </section><!-- /.Section our agriculture -->

            <!-- Section benefit -->
            <section class="s-benefit mt--217">
                <div class="benefit-list">
                    <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0s">
                        <div class="icon mb-29 hover-icon style-circle">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <a href="#" class="caption fw-6 mb-17 font-worksans hover-text-secondary">
                        {{$about->sec2_card1title}}
                        </a>
                        <p class="text font-nunito">
                        {{$about->sec2_card1desc}}
                        </p>
                    </div>
                    <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon mb-29 style-circle hover-icon img-hover-2">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                        <a href="#" class="caption fw-6 mb-17 font-worksans hover-text-secondary">
                             {{$about->sec2_card2title}}
                        </a>
                        <p class="text font-nunito">
                        {{$about->sec2_card2desc}}
                    </div>
                    <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon mb-29 hover-icon style-circle">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <a href="#" class="caption fw-6 mb-17 font-worksans hover-text-secondary">
                        {{$about->sec2_card3title}}
                        </a>
                        <p class="text font-nunito">
                        {{$about->sec2_card3desc}}
                        </p>
                    </div>
                    <div class="box-icon ic-hover wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon mb-29 hover-icon style-circle">
                            <img src="icons/dollar-circle.png" alt="">
                        </div>
                        <a href="#" class="caption fw-6 mb-17 font-worksans hover-text-secondary">
                        {{$about->sec2_card4title}}
                        </a>
                        <p class="text font-nunito">
                        {{$about->sec2_card4desc}}
                        </p>
                    </div>
                </div>
            </section><!-- /.Section benefit -->

            <!-- Section quality of life -->
            <section class="s-quality-of-life style-2">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-section text-center">

                                <div class="img-item item-3 tf-animate__box">
                                    <img class="up-down-move" src="images/item/notice-2.png" alt="">
                                </div>
                                <div class="clip-color-text font-snowfall text-center">
                                    <p class="clip-text-bg-vertical">
                                       {{$about->sec3_title}}
                                    </p>
                                </div>
                                <p class="sub font-snowfall fs-30 text-anime-style-1">
                                {{$about->sec3_desc}}
                                </p>
                                <div class="swiper-container slider-box-icon">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <ul class="box-icon-list style-2">
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <i class="icon-chemical"></i>
                                                        </div>
                                                        <a href="#"
                                                            class="caption fw-6 font-worksans hover-text-4">
                                                            {{$about->sec3_icon1_title}}
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0.1s">
                                                        <div class="icon style-circle hover-icon">
                                                            <i class="icon-worm"></i>
                                                        </div>
                                                        <a href="#"
                                                            class="caption fw-6 font-worksans hover-text-4">
                                                            {{$about->sec3_icon2_title}}
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0.2s">
                                                        <div class="icon style-circle hover-icon">
                                                            <i class="icon-disposal"></i>
                                                        </div>
                                                        <a href="#"
                                                            class="caption fw-6 font-worksans hover-text-4">
                                                            {{$about->sec3_icon3_title}}
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0.3s">
                                                        <div class="icon style-circle hover-icon">
                                                            <i class="icon-light-bulb"></i>
                                                        </div>
                                                        <a href="#"
                                                            class="caption fw-6 font-worksans hover-text-4">
                                                            {{$about->sec3_icon4_title}}
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0.4s">
                                                        <div class="icon style-circle hover-icon">
                                                            <i class="icon-water-drops"></i>
                                                        </div>
                                                        <a href="#"
                                                            class="caption fw-6 font-worksans hover-text-4">
                                                            {{$about->sec3_icon5_title}}
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bot flex justify-center">

                                    <a href="#" class="tf-btn scale-50">
                                        <span class="text-style ">
                                        {{$about->sec3_btn_txt}}
                                        </span>
                                        <div class="icon">
                                            <i class="icon-arrow_right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section quality of life -->

            <!-- Section our history -->
            <section class="s-our-history has-img-item tf-pt-0">
                <div class="tf-container w-1620">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-section img-hover">
                                <div class="image hover-item">
                                    <img src="{{asset($about->sec4_img)}}"
                                        data-src="{{asset($about->sec4_img)}}" alt="" class="lazyload">
                                </div>
                                <div class="heading-section style-4 has-text style-3">
                                    <div class="img-item">
                                        <div class="item">
                                            <img class="tf-animate-1" src="{{ asset('images/item/leaves-2.png') }}" alt="">
                                        </div>
                                        <p class="sub-title">
                                        {{$about->sec4_subtitle}}
                                        </p>
                                    </div>
                                    <p class="title text-anime-style-1">
                                    {{$about->sec4_title}}

                                    </p>
                                    <p class="text">
                                    {{$about->sec4_desc}}
                                    </p>
                                    <a href="#" class="tf-btn bg-white wow fadeInUp" data-wow-delay="0s">
                                        <span class="text-style cl-primary">
                                        {{$about->sec4_btn_txt}}   
                                        </span>
                                        <div class="icon">
                                            <i class="icon-arrow_right"></i>
                                        </div>
                                    </a>
                                    <div class="wg-exprerience text-center z-5 tf-rotate-back-and-forth">
                                        <p class="year">{{$about->sec4_exp_num}}</p>
                                        <p class="text">
                                            Years Of <br> Experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="s-img-item item-1">
                    <img src="images/item/brown-top.png" alt="">
                </div>
                <div class="s-img-item item-bottom">
                    <img src="images/item/brown-bottom.png" alt="">
                </div>
                <div class="s-img-item item-3 wow zoomIn">
                    <div class="scroll-element-3">

                        <img src="images/item/windmill-2.png" alt="">
                    </div>
                </div>
            </section><!-- /.Section our history -->

            <!-- Section farmer tour -->
            <!-- <section class="s-farm-tour">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-about-us img-hover wow fadeInUp" data-wow-delay="0s">
                                <div class="image hover-item">
                                    <img src="images/widget/about-us-1.jpg" data-src="images/widget/about-us-1.jpg"
                                        alt="" class=" lazyload">
                                </div>
                                <div class="content">
                                    <a href="event-detail.html"
                                        class="title fw-7 fs-30 font-worksans hover-text-secondary">
                                        We Are Dedicated Farmers!
                                    </a>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec <br> sodales
                                        faucibus
                                        commodo.
                                        Proin vehicula massa id congue <br>
                                        rutrum, ex libero sodales ex, cursus euismod.
                                    </p>
                                    <div class="flex justify-center">
                                        <a href="our-farmers.html" class="tf-btn-read text-white hover-text-secondary">
                                            View All The
                                            Farmers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-about-us img-hover wow fadeInUp" data-wow-delay="0.1s">
                                <div class="image hover-item">
                                    <img src="images/widget/about-us-2.jpg" data-src="images/widget/about-us-2.jpg"
                                        alt="" class=" lazyload">
                                </div>
                                <div class="content">
                                    <a href="event-detail.html"
                                        class="title fw-7 fs-30 font-worksans hover-text-secondary">
                                        Explore Our Farm Tours

                                    </a>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec <br> sodales
                                        faucibus
                                        commodo.
                                        Proin vehicula massa id congue <br>
                                        rutrum, ex libero sodales ex, cursus euismod.
                                    </p>
                                    <div class="flex justify-center">
                                        <a href="our-farmers.html" class="tf-btn-read text-white hover-text-secondary">
                                            Discovey Farm
                                            Tours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- /.Section farmer tour -->

            <!-- Section contact us -->
            <!-- <section class="s-contact-us style-2 bg-white pt-124 pb-82">
                <div class="section-wrap">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="content-left">

                                    <div class="box-map style-2">
                                        <div id="map" class="map"></div>
                                    </div>
                                    <ul class="contact-list overflow-hidden">
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                    Farm Address
                                                </p>
                                                <p class="text">
                                                    Prinsengracht 250, 2501016 PM <br>
                                                    Amsterdam Netherlands
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-address-book"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                    Contact Us
                                                </p>
                                                <p class="text">
                                                    Leafy Delightss@gmail.com <br>
                                                    Call Us 24/7: +1 987 654 3210
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-clock"></i>
                                            </div>
                                            <div class="infor">

                                                <p class="title">
                                                    Working Hours
                                                </p>
                                                <p class="text">
                                                    Mon - Fri: 8.00am - 18.00pm <br>
                                                    Sat: 9.00am - 17.00pm Holidays: Closes
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="content-section">
                                    <div class="heading-section has-text mb-50">
                                        <p class="sub-title">Let's Cooperate Together</p>
                                        <p class="title text-anime-style-2">Contact Us Today!</p>
                                        <p class="text">
                                            We will reply you within 24 hours via email, thank you for contacting

                                        </p>
                                        <div class="img-item">
                                            <img class="tf-animate-1" src="images/item/rice-plant-2.png" alt="" />
                                        </div>
                                    </div>
                                    <form id="contactform" method="post" action="https://themesflat.co/html/Leafy Delights/contact/contact-process.php"
                                        novalidate="novalidate" class="form-send-message style-2">
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Name*" aria-required="true" required />
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" class="form-control email" id="mail" name="mail"
                                                    placeholder="Email*" required />
                                            </fieldset>
                                        </div>
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone*" aria-required="true" required />
                                            </fieldset>
                                            <fieldset class="dropdown">
                                                <select name="text" id="Support">
                                                    <option value="You need to suport?" selected="">You need to
                                                        suport?
                                                    </option>
                                                    <option value="You need to suport? 1">You need to suport? 1
                                                    </option>
                                                    <option value="You need to suport? 2">You need to suport? 2
                                                    </option>
                                                    <option value="You need to suport? 3">You need to suport? 3
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="cols mb-30">
                                            <fieldset>
                                                <textarea name="message" id="message"
                                                    placeholder="Message..."></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="checkbox-item send-wrap">
                                            <label class="mb-0">
                                                <span class="text font-nunito">Agree to our terms and
                                                    conditions</span>
                                                <input type="checkbox" class="checkbox-item" checked>
                                                <span class="btn-checkbox"></span>
                                            </label>
                                            <button type="submit" class="tf-btn ">
                                                <span class="text-style">
                                                    Send Message
                                                </span>
                                                <span class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- /.Section contact us -->

            <!-- Section partner -->
            <!-- <section class="s-partner style-2 has-img-item pb-71">
                <div class="tf-container w-1780">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrap">
                                <div class="swiper-container slider-partner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide-partner">
                                                <div class="image">
                                                    <a href="#">

                                                        <img src="images/partner/wide-open.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">

                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/partner/sollio.png" alt="" class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">
                                                <div class="image">
                                                    <a href="#">

                                                        <img src="images/partner/syngenta.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">

                                                <div class="image">
                                                    <a href="#">

                                                        <img src="images/partner/strachan-valley.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">


                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/partner/new-holland.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-partner">

                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/partner/stony-field.png" alt=""
                                                            class="lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="images/item/page-title-top.png" alt="" />
                </div>
            </section> -->
            <!-- /.Section partner -->

        </div><!-- /.Main-content -->




@endsection