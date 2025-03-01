@extends('include.main')
@section('content')
        <!-- Page-title -->
        <div class="page-title page-contact-us  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="{{asset($contact->ban_img)}}" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                   {{$contact->banner_subtitle}}
                                </p>
                                <h1 class="title">
                                {{$contact->banner_title}}
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Contact Us </a>
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
        <div class="main-content pt-0 pb-0 page-contact-us">

            <!-- Section contact us -->
            <section class="s-contact-us style-2 bg-white pt-118 pb-88" id="bgcontact-banner" >
                <div class="section-wrap">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="content-left">
                                    <div class="image mb-30">
                                        <img src="{{asset($contact->sec1_img)}}" alt="{{asset($contact->sec1_img)}}"
                                            class=" img lazyload" />
                                        <img src="images/item/leaf.png" alt=""
                                            class="img-item tf-animate__rotate-left" />
                                    </div>
                                    <ul class="contact-list">
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                    Address
                                                </p>
                                                <p class="text">
                                                    {{$contact->card_addr}}
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
                                                {{$contact->card_email}}
                                                
                                                </p>
                                                <p class="text">
                                                    
                                                {{$contact->card_phone}}
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
                                                     {{$contact->card_workinghours}}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="content-section" id="bg-contantfrom">
                                    <div class="heading-section has-text mb-50">
                                        <p class="sub-title"> {{$contact->card2_subtitle}}</p>
                                        <p class="title wow fadeInUp" data-wow-delay="0s">{{$contact->card2_title}}</p>
                                        <p class="text">
                                        {{$contact->card2_desc}}
                                        </p>
                                        <div class="img-item">
                                            <img class="tf-animate-1" src="images/item/leaves-2.png" alt="" />
                                        </div>
                                    </div>
                                    <form id="contactform" method="post" action="https://themesflat.co/html/Leafy Delights/contact/contact-process.php"
                                        novalidate="novalidate" class="form-send-message style-2">
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="name bginput-feilds" name="name"
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
            </section><!-- /.Section contact us -->

            <!-- Section map -->
            <div class="box-map">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Prinsengracht 250, 2501016 PM Amsterdam Netherlands&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
            </div><!-- Section map -->

        </div><!-- /.Main-content -->



@endsection