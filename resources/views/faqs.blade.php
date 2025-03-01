@extends('include.main')
@section('content')

        <!-- Page-title -->
        <div class="page-title page-faq  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="{{asset($faq->ban_img)}}" alt="">
            </div>
            <div class="content-wrap">

                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                   {{$faq->ban_subttitle}}
                                </p>
                                <h1 class="title">
                                {{$faq->ban_title}}
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Frequently Asked Questions </a>
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
        <div class="main-content page-faq">
            <div class="wg-tabs style-4">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="tf-sidebar-2 ">
                                <div class="sidebar-item-2 list-tab has-bg-3 mb-40">
                                    <ul class="menu-tab">
                                        <li class="item active"><a href="#content" class="btn-tab">General
                                                Question</a></li>
                                        <li class="item"><a href="#content" class="btn-tab">Product
                                                Questions</a></li>
                                        <li class="item"><a href="#content" class="btn-tab">Questions About
                                                The Tour</a></li>
                                        <li class="item"><a href="#content" class="btn-tab">microgreens plants are healthy???</a></li>
                                        <li class="item"><a href="#content" class="btn-tab">How delivery works </a></li>
                                    </ul>
                                </div>
                                <div class="sidebar-item-2 has-bg-1 infor-contact">
                                    <p class="sub font-snowfall fs-30">
                                    {{$faq->sec1_title}}
                                    </p>
                                    <p class="text">
                                    {{$faq->sec1_desc}}
                                    </p>
                                    <ul class="contact-list">
                                        <li>
                                            <i class="fa-solid fa-location-dot fs-17"></i>
                                            <p class="address">
                                            {{$faq->Ioc}}
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone"></i>
                                            <p class="phone-number fs-15">
                                                Call us: {{$faq->phone}}
                                            </p>
                                        </li>
                                        <li> <i class="icon-package-box"></i>
                                            <p class="email fs-15">
                                                Mail: {{$faq->sec1_mail}}
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-clock"></i>
                                            <p class="time-open fs-15">
                                                Mon - Fri:{{$faq->timing}}
                                            </p>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="content" id="content">
                                <h2 class="title font-worksans fw-7">
                                {{$faq->sec2_title}}
                                </h2>
                                <p class="text">
                                {{$faq->sec1_desc}}
                                </p>
                                <div class="widget-content-tab">
                                    <div class="widget-content-inner active">
                                        <div class="tf-accordion accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        How can I contact customer support?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        
                                                    On our website, you can fill out a contact form,  email, or phone to contact our customer support team.
                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        
                                                        What is your return policy?
                                            
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        
                                                    We will offer return or exchange service only if ever order doesn't meet quality standards.
                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        How can I learn more about the benefits of microgreens?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        
                                                    Visit our blog, where you'll get a detailed description, including the benefits of Microgreens.
                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        What are your delivery days and times?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Deliveries are made on harvest day, i-e Thursday, typically between 11:00 am and 9:00 pm. On high demand, we also deliver another day
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        What makes Leafy Delights microgreens special?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Our microgreens are grown with sustainable practices, ensuring they are 100% organic, fresh, and packed with nutrients. We focus on delivering exceptional quality and flavor to elevate your meals.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        IHow do you maintain the freshness and quality of your microgreens?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        We harvest our microgreens at their peak freshness and follow strict hygiene and packaging practices to preserve their vibrant taste, nutrients, and shelf life during delivery.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">
                                        <div class="tf-accordion accordion" id="accordionExample1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                                        aria-expanded="true" aria-controls="collapseOne1">
                                                        What are microgreens, and why are they popular?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne1" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Microgreens are young, nutrient-dense plants harvested just after their first true leaves develop. They are popular for their vibrant flavors, visual appeal, and impressive health benefits.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                                        aria-expanded="false" aria-controls="collapseTwo2">
                                                        How should I store microgreens to keep them fresh?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo2" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Store your microgreens in an airtight container lined with a dry paper towel and place it in the refrigerator. This helps retain their freshness and crispness for up to a week.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree3"
                                                        aria-expanded="false" aria-controls="collapseThree3">
                                                        Can microgreens be eaten raw?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree3" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Absolutely! Microgreens are best enjoyed raw to retain their nutrients and flavors. They’re perfect for salads, sandwiches, smoothies, and garnishing dishes.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour4"
                                                        aria-expanded="false" aria-controls="collapseFour4">
                                                        Are microgreens different from sprouts?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour4" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        Yes! Unlike sprouts, which are germinated seeds eaten whole, microgreens are grown in soil or a medium, harvested above the root, and have more developed leaves and stronger flavors.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">
                                        <div class="tf-accordion accordion" id="accordionExample2">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne11"
                                                        aria-expanded="true" aria-controls="collapseOne11">
                                                        Can I visit the Leafy Delights farm for a tour?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne11" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">
                                                        Yes! We welcome visitors to experience our sustainable farming practices and see how we grow fresh, high-quality microgreens.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo12"
                                                        aria-expanded="false" aria-controls="collapseTwo12">
                                                        How do I book a farm tour?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo12" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">
                                                        You can book a farm tour by contacting us through our website or social media channels. We’ll schedule a convenient time for your visit.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree13"
                                                        aria-expanded="false" aria-controls="collapseThree13">
                                                        What can I expect during the farm tour?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree13" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">
                                                        You’ll get a behind-the-scenes look at our microgreen production process, learn about sustainable farming, and enjoy a chance to sample our fresh produce.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour14"
                                                        aria-expanded="false" aria-controls="collapseFour14">
                                                        Is there an entry fee for the farm tour?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour14" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">
                                                        We offer both complimentary and premium tours depending on the experience. Please contact us for detailed pricing and package options.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">
                                        <div class="tf-accordion accordion" id="accordionExample3">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne21"
                                                        aria-expanded="true" aria-controls="collapseOne21">
                                                        Are microgreens more nutritious than regular vegetables?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne21" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample3">
                                                    <div class="accordion-body">
                                                        Yes, microgreens often contain higher levels of vitamins, minerals, and antioxidants compared to their mature counterparts, making them a nutrient-dense superfood.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo22"
                                                        aria-expanded="false" aria-controls="collapseTwo22">
                                                        Which nutrients are commonly found in microgreens?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo22" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample3">
                                                    <div class="accordion-body">
                                                        Microgreens are rich in vitamins A, C, E, and K, along with essential minerals like potassium, iron, and magnesium.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree23"
                                                        aria-expanded="false" aria-controls="collapseThree23">
                                                        Can microgreens support a healthy lifestyle?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree23" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample3">
                                                    <div class="accordion-body">
                                                        Absolutely! Microgreens are low in calories, high in nutrients, and perfect for enhancing the flavor and nutrition of your meals.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour24"
                                                        aria-expanded="false" aria-controls="collapseFour24">
                                                        Are microgreens safe for everyone to eat?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour24" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample3">
                                                    <div class="accordion-body">
                                                        Yes, they are safe for all age groups, but those with specific allergies to certain plants should consume with caution. Always wash before use for best results.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">
                                        <div class="tf-accordion accordion" id="accordionExample4">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne31"
                                                        aria-expanded="true" aria-controls="collapseOne31">
                                                        How do you ensure the freshness of microgreens during delivery?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne31" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        We carefully harvest and pack our microgreens just before dispatch, using eco-friendly packaging that locks in freshness and protects the produce during transit.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo32"
                                                        aria-expanded="false" aria-controls="collapseTwo32">
                                                        What areas do you deliver to?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo32" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        We currently deliver to [insert locations]. For updates on expanding delivery zones, please check our website or contact us directly.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree33"
                                                        aria-expanded="false" aria-controls="collapseThree33">
                                                        How long does it take for my order to be delivered?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree33" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        We strive to deliver orders within [insert time frame] after confirmation to ensure you receive fresh and healthy microgreens.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour34"
                                                        aria-expanded="false" aria-controls="collapseFour34">
                                                        Can I schedule a delivery for a specific date?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour34" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample4">
                                                    <div class="accordion-body">
                                                        Yes! You can select your preferred delivery date during checkout, and we'll do our best to accommodate your request.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bot">
                                    <p class="sub">
                                    {{$faq->sec3_subtitle}}
                                    </p>
                                    <p class="question">
                                    {{$faq->sec3_title}}
                                    </p>
                                    <a href="contact-us.html" class="tf-btn bg-white">
                                        <span class="text-style cl-primary">
                                        {{$faq->sec3_btn_txt}}
                                        </span>
                                        <div class="icon">
                                            <i class="icon-arrow_right"></i>
                                        </div>
                                    </a>
                                    <div class="img-item item-1 scroll-element-3 ">
                                        <img class="wow fadeInRight" data-wow-delay="0s" data-wow-duration="1s"
                                            src="{{asset($faq->sec3_img)}}" alt="">
                                    </div>
                                    <div class="img-item item-2 nhapNhap">
                                        <img src="images/item/FAQs.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- /.Main-content -->


@endsection