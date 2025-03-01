@extends('include.main')
@section('content')
        <!-- Nav-mobile -->
        <div class="mobile-nav-wrap">
            <div class="overlay-mobile-nav"></div>
            <div class="inner-mobile-nav overflow-y-auto">
                <div class="top">
                    <div class="logo">
                        <a href="index.html" rel="home" class="main-logo">
                            <img id="mobile-logo_header" alt="" src="images/leafy/leafy-logo-white.svg" />
                        </a>
                        <div class="mobile-nav-close">
                            <i class="icon-close"></i>
                        </div>
                    </div>
                    <nav id="mobile-main-nav" class="mobile-main-nav">
                        <ul id="menu-mobile-menu" class="menu">
                            <li class="menu-item menu-item-has-children-mobile current-nav">
                                <a class="item-menu-mobile " href="./index.html">
                                    Home
                                </a>

                            </li>
                            <li class="menu-item menu-item-has-children-mobile">
                                <a class="item-menu-mobile current" href="./Product.html">
                                    Our Products
                                </a>

                            </li>
                            <li class="menu-item menu-item-has-children-mobile">
                                <a class="item-menu-mobile" href="./About-us02.html">
                                    About Us
                                  
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children-mobile">
                                <a class="item-menu-mobile" href="./recipes.html">
                                    Recipes
                                 
                                </a>

                            </li>
                            <li class="menu-item menu-item-has-children-mobile">
                                <a class="item-menu-mobile" href="recipes.html">
                                    Reviews 
                                </a>
                            </li>
                            
                            <li class="menu-item menu-item-has-children-mobile">
                                <a class="item-menu-mobile" href="faq.html">FAQ’S</a>
                               
                            </li>
                            <li class="menu-item menu-item-has-children-mobile">
                                <a class="item-menu-mobile" href="contact-us.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="group-icon">
                        <a class="site-nav-icon header-search" href="#canvasSearch"
                            data-bs-toggle="offcanvas">
                            <i class="icon-magnifying-glass fs-21"> </i>
                            Search
                        </a>
                        <a href="#" class="site-nav-icon wg-bag">
                            <i class="icon-basket"></i>
                            Shop
                        </a>
                    </div>
                </div>
                <div class="bottom">
                    <div class="infor-list">
                        <ul>
                            <li>
                                <h5 class="title">
                                    Address:
                                </h5>
                                <p>
                                    Prinsengracht 250, Amsterdam Netherlands
                                </p>
                            </li>
                            <li>
                                <h5 class="title">
                                    Phone:
                                </h5>
                                <p>
                                    416-820-4010
                                </p>
                            </li>
                            <li>
                                <h5 class="title">
                                    Email:
                                </h5>
                                <p>

                                    sales@leafydelights.ca
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="wg-social">
                        <ul class="list">
                            <li class="item">
                                <a href="#"><i class="icon-facebook1"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-instagram2"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.Nav-mobile -->

        <!-- Page-title -->

        <div class="page-title page-portfolio-details  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="images/leafy/single-product-banner.jpg" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content center" id="single-content-set">
                                <p class="sub-title">
                                    Buy Health Foods At Our Store
                                </p>
                                <h1 class="title">
                                    products detail
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="#"> Our Products </a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Products Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="{{asset('images/item/grass-6.png')}}" alt="">
            </div>
        </div><!-- /.Page-title -->


        <!-- Main-content -->
        <div class="main-content page-shop-detail pt-0">

            

            <!-- Section product detail -->
            <section class="s-product-detail section-image-zoom zoom-active" id="products-single">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="thumbs-slider sticky-top">
                                <div class="swiper-container tf-product-media-main" id="carousel-slider-new" >
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image item">
                                            <img src="{{asset('storage/'.$product->sec3_img1)}}"
                                                    data-src="{{asset('storage/'.$product->sec3_img1)}}"
                                                    data-zoom="{{asset('storage/'.$product->sec3_img1)}}" alt=""
                                                    class="lazyload tf-image-zoom">
                                            </div>
                                        </div>
                                        @if (!empty($product->sec3_imgs))
                                            @foreach (json_decode($product->sec3_imgs, true) as $index => $img)
                                            <div class="swiper-slide">
                                                <div class="image item">
                                                    <img src="{{ asset('storage/' . $img) }}"
                                                    data-src="{{asset('storage/' . $img)}}"
                                                    data-zoom="{{asset('storage/' . $img)}}" alt=""
                                                    class="lazyload tf-image-zoom">
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif                                        
                                    </div>
                                </div>


                                <div class="swiper-container tf-product-media-thumbs" data-direction="horizontal">
                                    <div class="swiper-wrapper" id="small-images-set" >
                                        <div class="swiper-slide" id="image-sizing">
                                            <div class="image item">
                                                <img src="{{asset('storage/'.$product->sec3_img1)}}"
                                                    data-src="{{asset('storage/'.$product->sec3_img1)}}" alt=""
                                                    class="lazyload">
                                            </div>
                                        </div>
                                        @if (!empty($product->sec3_imgs))
                                            @foreach (json_decode($product->sec3_imgs, true) as $index => $img)
                                            <div class="swiper-slide" id="image-sizing" >
                                                <div class="image item">
                                                    <img src="{{ asset('storage/' . $img) }}"
                                                    data-src="{{asset('storage/' . $img)}}"
                                                    data-zoom="{{asset('storage/' . $img)}}" alt=""
                                                    class="lazyload tf-image-zoom">
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                        
                                        <div class="swiper-slide" id="image-sizing" >
                                            <div class="image item">
                                                <img src="{{asset('storage/'.$product->sec3_img1)}}"
                                                    data-src="{{asset('storage/'.$product->sec3_img1)}}" alt=""
                                                    class="lazyload">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="tf-zoom-main"></div>
                        <div class="content-inner">
                            <h3 class="fw-6 name font-worksans title">{{ $product->sec1_title }}</h3>
                            
                                <div class="rating-wrap">
                                    <div class="wg-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="font-nunito">5.00 (1 customer review)</p>
                                </div>
                            
                                <div class="price-wrap price-left">
                                    <p id="priceDisplay">Price: <span>--</span></p>
                                </div>

                                <p class="sub font-nunito">{{ $product->sec1_desc }}</p>

                                <ul class="notice-list">
                                    <li>
                                        <p>Available: {{ $product->sec2_available_stock }} in stock</p>
                                    </li>
                                </ul>

                                    <div class="wrap-quantity">
                                        <div class="wg-quantity">
                                            <span class="btn-quantity plus-btn"> <i class="icon-arrow_up"></i></span>
                                            <input class="font-worksans fw-5 quantity-input" type="text" name="number" value="1">
                                            <span class="btn-quantity minus-btn"><i class="icon-arrow_down"></i></span>
                                        </div>

                                            <button type="button" class="tf-btn btn-add-cart"
                                                data-product-id="{{ $product->id }}"
                                                data-product-name="{{ $product->sec1_title }}"
                                                data-product-img="{{ asset('storage/' . $product->sec3_img1) }}"
                                                data-product-price="">
                                                <span class="text-style">Add To Cart</span>
                                                <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
                                            </button>

                                            <div class="white-list-wrap">
                                                <a href="#" class="icon style-circle">
                                                    <i class="fa-solid fa-heart"></i>
                                                    <span class="tt-text">Add Wishlist</span>
                                                </a>
                                            </div>
                                    </div>

                                        <ul class="more-infor">
                                            <li>
                                                <p>Category:
                                                <select name="weight" id="weightSelect" class="form-control" style="width:200px">
                                                    <option value="">Select Weight</option>
                                                    @foreach (json_decode($product->sec4_weight_price, true) ?? [] as $item)
                                                        <option value="{{ $item['weight'] }}" data-price="{{ $item['price'] }}">
                                                            {{ $item['weight'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li><p>Tags: <a href="#">{{ $product->sec2_tags }}</a></p></li>
                                        </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                <div class="tf-sticky-btn">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-12">

                                <div class="content w-100 flex item-center">

                                    <div class="tf-atc-product">
                                        <div class="img-product">
                                            <img src="{{asset('storage/'.$product->sec3_img1)}}" alt="">
                                        </div>
                                        <span class="name-product">   
                                            Bag Of Succulent Oranges
                                        </span>
                                    </div>
                                    <div class="tf-atc-btn">
                                        <div class="wrap-quantity">
                                            <div class="wg-quantity">
                                                <span class="btn-quantity plus-btn"> <i
                                                        class="icon-arrow_up"></i></span>
                                                <input class="font-worksans fw-5" type="text" name="number" value="1">
                                                <span class="btn-quantity minus-btn"><i
                                                        class="icon-arrow_down"></i></span>
                                            </div>
                                            <button type="submit" class="tf-btn btn-add-cart">
                                                <span class="text-style">
                                                    Add To Cart
                                                </span>
                                                <span class="icon">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </span>
                                            </button>
                                            <div class="white-list-wrap">
                                                <a href="#" class="icon style-circle">
                                                    <i class="fa-solid fa-heart"></i>
                                                    <span class="tt-text">
                                                        Add Wishlist
                                                    </span>
                                                </a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section product detail -->

            <!-- Section box icon wrap -->
            <section class="s-box-wrap">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap">
                                <div class="box-icon style-2 ic-hover wow fadeInUp" data-wow-delay="0s ">
                                    <div class="icon style-circle hover-icon">
                                        <i class="fa-solid fa-rocket"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-secondary">
                                        Free Shipping
                                    </a>
                                    <p class="text font-nunito">
                                        Enjoy fresh microgreens delivered to your doorstep with free shipping!
                                    </p>
                                </div>
                                <div class="box-icon style-2 ic-hover wow fadeInUp" data-wow-delay="0.1s ">
                                    <div class="icon style-circle hover-icon">
                                        <i class="fa-solid fa-coins"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-secondary">
                                        100% Secure Payment
                                    </a>
                                    <p class="text font-nunito">
                                        we offer 100% secure payment options for a safe and seamless experience.
                                    </p>
                                </div>
                                <div class="box-icon style-2 ic-hover wow fadeInUp" data-wow-delay="0.2s ">
                                    <div class="icon style-circle hover-icon">
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-secondary">
                                        24/7 Dedicated Support
                                    </a>
                                    <p class="text font-nunito">
                                        our 24/7 dedicated support ensures your questions are answered anytime.
                                    </p>
                                </div>
                                <div class="box-icon style-2 ic-hover wow fadeInUp" data-wow-delay="0.3s ">
                                    <div class="icon style-circle hover-icon">
                                        <i class="fa-solid fa-tag"></i>
                                    </div>
                                    <a href="#" class="caption fw-6  font-worksans hover-text-secondary">
                                        Daily Offers
                                    </a>
                                    <p class="text font-nunito">
                                        Don't miss out — enjoy fresh deals and daily offers on our premium microgreens!
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="images/item/silo-2.png" alt="">
                </div>
                <div class="s-img-item item-2">
                    <img src="images/item/page-title-top.png" alt="">
                </div>
            </section>
            <!-- Section box icon wrap -->

            <!-- Section relate product  -->
            <section class="s-relate-product">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="title fw-7 fs-45 text-center">
                                Related Products
                            </h2>
                            
                            <div class="swiper-container slider-relate-product">
                                <div class="swiper-wrapper" id="images-content-singal">
                                @foreach($ourproducts as $ourproduct)
                                    <div class="swiper-slide">
                                        <div class="card-product style-2 mw-unset">
                                            <ul class="trendy-list">
                                                <li class="trendy-item ">
                                                    <p class="color-2">New</p>
                                                </li>
                                                <li class="trendy-item ">
                                                    <p class="color-3">Hot</p>
                                                </li>
                                            </ul>
                                            <div class="image">
                                                <img src="{{asset('storage/'.$ourproduct->sec3_img1)}}"
                                                    data-src="{{asset('storage/'.$ourproduct->sec3_img1)}}" style="height:150px;width:150px" alt="" class="lazyload">
                                            </div>
                                            <a href="#" class="name-product font-worksans hover-text-4">
                                            {{$ourproduct->sec1_title}}
                                            </a>
                                            <div class="pricing-star">
                                                <div class="price-wrap">

                                                <span class=" price-1">{{$ourproduct->sec1_del_price}}</span>
                                                <span class=" price-2">{{$ourproduct->sec1_price}}</span>
                                                </div>
                                                <div class="wg-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="product-btn-list">
                                                <a href="#" class="icon shoping">

                                                    <div class="tt-text">

                                                        <p>
                                                            Add to card
                                                        </p>
                                                    </div>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <a href="#" class="icon white-list">
                                                    <div class="tt-text">

                                                        <p>
                                                            Add Whitelist
                                                        </p>
                                                    </div>
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                                <a href="{{route('product-detail',$ourproduct->slug)}}" class="icon view-product">
                                                    <div class="tt-text">

                                                        <p>
                                                            Quick View
                                                        </p>
                                                    </div>
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                 @endforeach
                                </div>
                            </div>
                            <div class="btn-slide-product btn-next">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="btn-slide-product btn-prev">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                        </div>
                    </div>
                </div>



            </section><!-- /.Section relate product  -->

            

        </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let weightSelect = document.getElementById("weightSelect");
        let priceDisplay = document.getElementById("priceDisplay").querySelector("span");
        let addToCartBtn = document.querySelector(".btn-add-cart");
        let quantityInput = document.querySelector(".quantity-input");
        let plusBtn = document.querySelector(".plus-btn");
        let minusBtn = document.querySelector(".minus-btn");
        let availableStock = parseInt("{{ $product->sec2_available_stock }}"); // Stock from backend

        // Change Price Based on Weight Selection
        weightSelect.addEventListener("change", function () {
            let selectedOption = weightSelect.options[weightSelect.selectedIndex];
            let price = selectedOption.getAttribute("data-price") || "--";
            priceDisplay.textContent = price;
            addToCartBtn.setAttribute("data-product-price", price);
        });

        // Quantity Increase
        plusBtn.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default behavior
            let currentQuantity = parseInt(quantityInput.value) || 1;

            if (currentQuantity < availableStock) {
                quantityInput.value = currentQuantity + 0;
                updateStockDisplay();
            } else {
                alert("Not enough stock available!");
            }
        });

        // Quantity Decrease
        minusBtn.addEventListener("click", function (event) {
            event.preventDefault();
            let currentQuantity = parseInt(quantityInput.value) || 1;

            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 0;
                updateStockDisplay();
            }
        });

        // Ensure the input value updates properly
        quantityInput.addEventListener("input", function () {
            let value = parseInt(quantityInput.value) || 1;
            if (value < 1) {
                quantityInput.value = 1;
            } else if (value > availableStock) {
                quantityInput.value = availableStock;
            }
            updateStockDisplay();
        });

        // Update Stock Display in Real-Time
        function updateStockDisplay() {
            let selectedQuantity = parseInt(quantityInput.value);
            let stockLeft = availableStock - selectedQuantity;
            document.querySelector(".notice-list p").textContent = `Available: ${stockLeft} in stock`;
        }

        // Add to Cart Button Click
        addToCartBtn.addEventListener("click", function () {
            let productId = this.getAttribute("data-product-id");
            let productName = this.getAttribute("data-product-name");
            let productImg = this.getAttribute("data-product-img");
            let productPrice = this.getAttribute("data-product-price");
            let quantity = quantityInput.value;
            let weight = weightSelect.value;

            if (!weight) {
                alert("Please select a weight first.");
                return;
            }

            fetch("{{ route('cart.add') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    productId,
                    productName,
                    productImg,
                    productPrice,
                    quantity,
                    weight
                })
            }).then(response => response.json())
              .then(data => alert(data.message))
              .catch(error => console.error("Error:", error));
        });

    });
</script>




@endsection