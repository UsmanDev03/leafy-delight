@extends('include.main')
@section('content')
<div class="page-title page-testimonial" id="testimonial-bg" >
            <div class="parallax-window" data-position="top " data-parallax="scroll"
                data-image-src="./images/page-title/testimonial.jpg" data-speed="0.9" data-bleed="2"></div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                    {{$review->sec1_subtitle}}
                                </p>
                                <h1 class="title">
                                {{$review->sec1_title}}
                                </h1>
                                <div class="icon-img">
                                    <img src="{{asset('images/item/line-throw-title.png')}}" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)"> Reviews </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="{{asset('images/item/grass.png')}}" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content page-testimonial pb-0 mb--20">

            <!-- Section review -->
            <section class="s-review">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="image-wrap">
                                <div class="image ">
                                    <img src="{{ asset('uploads/reviews/' . $review->sec2_img) }}"
                                        data-src="{{ asset('uploads/reviews/' . $review->sec2_img) }}" alt=""
                                        class="lazyload tf-animate-2">
                                </div>
                                <div class="wg-counter style-3 scroll-element">
                                    <div class="has-border">
                                        <div class="counter-item">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-face-smile"></i>
                                            </div>

                                            <div class="counter">
                                                <div id="odometer" class="odometer style-3">{{$review->sec2_happy_cus}}</div>
                                                <span class="sub-odo font-worksans">k</span>
                                            </div>
                                            <p class="title font-worksans">
                                                Happy Customer
                                            </p>
                                            <div class="wg-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content-section">
                                <div class="heading-section style-2">
                                    <div class="img-item">
                                        <div class="item mr-25">
                                            <img class="tf-animate-1" src="{{asset('images/item/leaves-2.png')}}" alt="">
                                        </div>
                                        <p class="sub-title">
                                        {{$review->sec2_subtitle}}
                                        </p>
                                    </div>

                                    <p class="title">
                                    {{$review->sec2_title}}
                                    </p>
                                </div>
                                <p class="text">
                                {{$review->sec2_desc}}
                                </p>
                                <a href="contact-us.html" class="tf-btn btn-read-more scale-50">
                                    <span class="text-style text-anime-style-1">
                                    {{$review->sec2_btn_txt}}
                                    </span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-item item-1 wow fadeInRight" data-wow-delay="0s">
                    <img class="wow fadeInRight" data-wow-delay="0s" id="leaves-moving" src="{{asset('images/leafy/palm leaves-01.png')}}" alt="">
            </section><!-- /.Section review -->

            <!-- Section customer-say-->
            <section class="s-customer-say container-loadmore has-img-item tf-pt-0">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section has-text text-center">
                                <p class="title wow fadeInUp" data-wow-delay="0s">
                                {{$review->sec3_title}}
                                </p>
                                <p class="text">
                                {{$review->sec3_desc}}
                                </p>
                                <div class="img-item"><img class="tf-animate-1" src="https://vithemes.com/"
                                        alt=""></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-customer">
                                <div class="testimonial wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/widget/author-comment.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        CALEXANDER GREEN:
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            Freshness Like No Other!
                                        </p>
                                        <p class="text">
                                            As a health-conscious chef, I’m always on the hunt for ingredients that elevate my dishes. Leafy Delights microgreens are a game-changer — vibrant, flavorful, and incredibly fresh. They’ve become my secret ingredient for unforgettable meals.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/section/customer-say-2.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        EMILY CARTER:
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            A Healthy Delight!
                                        </p>
                                        <p class="text">
                                            I never knew microgreens could make such a difference until I tried Leafy Delights. From my morning smoothies to salads, they add a burst of flavor and nutrition. Truly the best greens I’ve ever had!
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/section/customer-say-2.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        LISA BROWN:
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            Farm Fresh Goodness!
                                        </p>
                                        <p class="text">
                                            Visiting Leafy Delights farm was an inspiring experience. You can see firsthand the dedication to sustainable, eco-friendly farming. Their microgreens are hands-down the freshest I’ve ever tasted.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial item hidden ">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/widget/author-comment.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        DAVID WALKER:
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            Top-Notch Quality!
                                        </p>
                                        <p class="text">
                                            Leafy Delights delivers unmatched quality. You can tell the care that goes into every microgreen. It’s now a staple in my kitchen, and I can’t imagine cooking without it.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-customer ">
                                <div class="testimonial wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/section/customer-say-3.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        SOPHIA JAMES
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            A Burst of Freshness in Every Bite!
                                        </p>
                                        <p class="text">
                                            Leafy Delights microgreens have completely transformed my meals. They’re not just beautiful garnishes — they add real flavor and nutrition. I recommend them to anyone who loves fresh, healthy food!
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/section/customer-say-4.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        MICHAEL ROBERTS:
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            Exceptional Taste and Quality!
                                        </p>
                                        <p class="text">
                                            The microgreens from Leafy Delights are simply unbeatable. You can taste the freshness and care in every batch. They’ve made a huge difference in my meal prep and presentations.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial wow fadeInUp" data-wow-delay="0s">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/section/customer-say-5.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        JACKSON HUGHES:
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            Farm-to-Table Perfection!
                                        </p>
                                        <p class="text">
                                            Knowing where my food comes from is important to me, and Leafy Delights delivers that trust. Their microgreens are always fresh, clean, and grown with heart. Perfect for any kitchen!
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial item hidden ">
                                    <div class="author-wrap">
                                        <div class="left">
                                            <div class="image-avt">
                                                <img src="images/section/customer-say-3.jpg" alt="">
                                            </div>
                                            <div class="infor">
                                                <div class="name-wrap">
                                                    <a href="#" class="name text-upper hover-text-4">
                                                        OLIVIA MARTIN
                                                    </a>
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="duty">
                                                    Director, Radical Orange Pty Ltd.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <i class="icon-quote"></i>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <p class="caption fs-30 font-snowfall">
                                            A Healthy Game-Changer!
                                        </p>
                                        <p class="text">
                                            Switching to Leafy Delights microgreens was the best decision I made for my diet. Packed with nutrients and flavor, they’ve made healthy eating both easy and delicious.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="flex justify-center">
                                <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">
                                    <span class="text-style text-anime-style-1">Load More Preview</span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="images/item/page-title-top.png" alt="">
                </div>
            </section><!-- /.Section customer-say-->

        </div><!-- /.Main-content -->

@endsection