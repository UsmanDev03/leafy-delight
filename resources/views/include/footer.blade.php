@php
$recipies = \App\Models\Recipe::latest()->take(2)->get();
$genral_setting = \App\Models\GeneralSetting::first();
@endphp
<footer class="footer" id="footer-main">
            <div class="tf-container w-1290">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top">
                            <div class="footer-left">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{asset($genral_setting->sec3_logo2)}}" class="logo-size" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="footer-center">
                                <p class="font-snowfall">
                               {{ $genral_setting->sec3_title }}
                                </p>
                            </div>
                            <div class="footer-right">
                                <div class="wg-social">
                                    <ul class="list">
                                        <li class="item">
                                            <a href="{{$genral_setting->sec2_social_link_2}}"><i class="icon-facebook1"></i></a>
                                        </li>
                                        <li class="item">
                                            <a href="{{$genral_setting->sec2_social_link_1}}"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li class="item">
                                            <a href="{{$genral_setting->sec2_social_link_4}}"><i class="icon-instagram2"></i></a>
                                        </li>
                                        <li class="item">
                                            <a href="{{$genral_setting->sec2_social_link_3}}"><i class="icon-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-inner">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="footer-inner-wrap footer-col-block">
                                <h4 class="footer-title footer-title-desktop mb-23">
                                    Contact Us!
                                </h4>
                                <h4 class="footer-title footer-title-mobile mb-23">
                                    Contact Us!
                                </h4>
                                <ul class="contact-list tf-collapse-content">
                                    <li>
                                        <i class="fa-solid fa-location-dot fs-17"></i>
                                        <p class="address">
                                        {{$genral_setting->sec1_address}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="phone-number fs-15">
                                            Call us: {{$genral_setting->sec1_phone}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="icon-package-box"></i>
                                        <p class="email fs-15">
                                            Mail: {{$genral_setting->sec1_email}}
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-clock"></i>
                                        <p class="time-open fs-15">
                                            Mon - Fri: {{$genral_setting->sec1_timing}}
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="footer-inner-wrap footer-col-block">
                                <h4 class="footer-title footer-title-desktop mb-23">
                                    News Posts
                                </h4>
                                <h4 class="footer-title footer-title-mobile mb-23">
                                    News Posts
                                </h4>
                                <ul class="new-post-list tf-collapse-content">
                                @foreach($recipies as $reci)
                                <li class="item img-hover">
                                    <div class="image hover-item">
                                        <img src="{{asset($reci->sec1_img)}}" alt="" />
                                    </div>
                                    <div class="content">
                                        <a href="{{route('recipe-detail',$reci->slug)}}" class="title-post hover-text-secondary">
                                        {{ Illuminate\Support\Str::limit($reci->sec1_title, 40) }}
                                        </a>
                                        <p class="date-release">
                                        {{ \Carbon\Carbon::parse($reci->sec1_date)->format('d F Y') }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach   
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="footer-inner-wrap footer-col-block">
                                <h4 class="footer-title footer-title-desktop mb-28">
                                    Quick Links
                                </h4>
                                <h4 class="footer-title footer-title-mobile mb-28">
                                    Quick Links
                                </h4>
                                <ul class="link-list tf-collapse-content">
                                    <li class="item">

                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Learn About Us
                                        </a>
                                    </li>
                                    <li class="item">

                                        <a href="#">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Services We Provide</a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            View Recent Projects</a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Meet The Farmers</a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                                height="16">
                                                <path
                                                    d="M264.547 70.633L440.547 238.633C445.297 243.164 447.984 249.445 447.984 256.008S445.297 268.852 440.547 273.383L264.547 441.383C254.953 450.508 239.766 450.164 230.609 440.57C221.453 431.07 221.797 415.82 231.422 406.633L364.09 280.008H24C10.75 280.008 0 269.258 0 256.008S10.75 232.008 24 232.008H364.09L231.422 105.383C221.797 96.227 221.453 80.977 230.609 71.445C239.766 61.852 254.953 61.508 264.547 70.633Z">
                                                </path>
                                            </svg>
                                            Up Coming Events</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-inner-wrap">
                                <h4 class="footer-title fs-20">
                                    Subscribe Newsletter
                                </h4>
                                <form id="subscribe-form" method="post" accept-charset="utf-8" data-mailchimp="true"
                                    action="#" class=" form-newsletter form-email style-2">
                                    <div id="subscribe-content" class="w-100">
                                        <input id="subscribe-email" type="email" name="email-form" class="email style-2"
                                            placeholder="Email address*" aria-required=" true" required>
                                        <button id="subscribe-button" type="button"
                                            class="tf-btn full bg-white scale-40">
                                            <span class="text-style cl-primary">
                                                Subscribe Now!
                                            </span>
                                            <span class="icon">
                                                <i class="fa-solid fa-paper-plane fs-14"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <div id="subscribe-msg"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-container w-1290">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom" style="justify-content: center;">
                            <p class="no-copy font-nunito" >
                                Copyright © 2024 Design and Develop By The Vision Brands.    
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-item item-1">
                <img src="{{asset('images/item/grass-2.png')}}" alt="" />
            </div>
            <div class="img-item item-2">

                <div class="  scroll-element-3">
                    <img class="wow zoomIn" src="{{asset('images/item/silo.png')}}" alt="" />
                </div>
            </div>
            <!-- --------------mob-nav-------------------------- -->
            <div class="mobile-nav2">
                <ul class="mobile-nav2-ul">
        
                <!-- item 7 -->
                <li class="relative group li-icon">
                    <a href="#" class="text-lg xl:text-15px 2xl:text-lg hover:text-secondary-color font-semibold whitespace-nowrap d-flex"><i class="fa-solid fa-location-dot"></i>
                    Location</a>
                </li>
        
                <!-- item 4 -->
                <li class="relative group li-icon">
                    <a href="#" class="text-lg xl:text-15px 2xl:text-lg hover:text-secondary-color font-semibold whitespace-nowrap d-flex"><i class="fa-regular fa-comments"></i>
                    Live Chat</a>
                </li>
        
                <!-- item 6 -->
                <li class="relative group li-icon">
                    <a href="#" class="text-lg xl:text-15px 2xl:text-lg hover:text-secondary-color font-semibold whitespace-nowrap d-flex whtsp"><img class="whatsApp-logo" src="{{asset('./images/leafy/whatsapp-04.png')}}" alt="" width="50px">
                    Ask US</a>
                </li>
        
                <!-- item 8 -->
                <li class="relative group li-icon">
                    <a href="#" class="text-lg xl:text-15px 2xl:text-lg hover:text-secondary-color font-semibold whitespace-nowrap d-flex"><i class="fa-solid fa-phone-volume"></i>
                    Call</a>
                </li>
        
                <!-- item 5 -->
                <li class="relative group li-icon">
                    <a href="#" class="text-lg xl:text-15px 2xl:text-lg hover:text-secondary-color font-semibold whitespace-nowrap d-flex"><i class="fa-regular fa-address-book"></i>
                    Appointment</a>
                </li>        
                </ul>
            </div>
        </footer>

                <!-- /.Footer -->

    </div>
    <!-- /#Wapper -->

    <!-- Open-search -->
    <div class="offcanvas offcanvas-top offcanvas-search" id="canvasSearch">
        <button class="btn-close-search" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="icon-close"></i>
        </button>
        <div class="tf-container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas-body">
                        <form action="#" class="form-search-courses">
                            <div class="icon">
                                <i class="icon-keyboard"></i>
                            </div>
                            <fieldset>
                                <input class="" type="text" placeholder="Search for anything" name="text" tabindex="2"
                                    value="" aria-required="true" required="" />
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit">
                                    <i class="icon-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.Open-search -->

    <!-- Prograss -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div><!-- /.Prograss -->