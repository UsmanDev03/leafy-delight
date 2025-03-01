@extends('include.main')
@section('content')

    <!-- Page-title -->
    <div class="page-title page-our-commitments">
            <div class="rellax" data-rellax-speed="5">
                <img class="" src="{{$growpage->ban_img}}" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                    {{$growpage->banner_subtitle}}
                                </p>
                                <h1 class="title">
                                {{$growpage->banner_title}}
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="about-us.html">Grow With Us</a>
                                    
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
        <div class="main-content page-our-commitments pb-0 mb--20px">

            

            <!-- Section other commitment -->
            <section class="s-other-commitment" style="padding: 0px 0px;" >
                <div class="tf-container">
                    <div class="row wrap-reverse">
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="img-item item-5 relative">
                                    <img class="tf-animate-1" src="images/item/leaves-2.png" alt="">
                                </div>
                                <h2 class="title fw-7 fs-45 font-worksans text-anime-style-1">
                                {{$growpage->sec1_title}}
                                </h2>
                                <div class="other-list">
                                    <ul>
                                    {!!$growpage->sec1_desc!!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrap">
                                <div class="image">
                                    <img src="{{asset($growpage->sec1_img)}}" data-src="{{asset($growpage->sec1_img)}}"
                                        alt="" class="lazyload">
                                </div>
                                <div class="img-item item-1">
                                    <img class="tf-animate__rotate-right" src="images/item/leaf-5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1 ">
                    <img class="wow fadeInRight" data-wow-delay="0s" id="leaves-moving" src="images/leafy/palm leaves-01.png" alt="">
                </div>
                <div class="s-img-item item-2 wow fadeInLeft" data-wow-delay="0s">
                    <img src="images/leafy/jhaar.png" id="leaves-moving" alt="" width="150px" height="72px">
                </div>
            </section><!-- /.Section other commitment -->

            

            <!-- Section award -->
            <section class="s-award" style="padding-bottom: 0px;">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="top heading-section mb-0 style-2">
                                <div class="img-item">
                                    <div class="item mr-25">
                                        <img class="tf-animate-1" src="images/item/leaves-2.png" alt="" />
                                    </div>
                                    <p class="sub-title">
                                    {{$growpage->sec2_subtitle}}
                                    </p>
                                </div>

                                <p class="title text-anime-style-1">
                                {{$growpage->sec2_title}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="headding-text">
                                <p>
                                {{$growpage->sec2_desc}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="block-quote style-4">
                                <div class="quote">
                                    <div class="icon style-circle">
                                        <i class="icon-quote"></i>
                                    </div>
                                    <p class="font-snowfall cite fs-30">
                                    {{$growpage->sec2_card_desc}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section><!-- /.Section award -->

                <!-- Main-content -->
        <div class="main-content page-portfolio-1" style="padding: 0px;" >
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 mb-40">
                            <div class="wg-tabs">
                                <ul class="overflow-x-auto menu-tab mb-65">
                                    <div class="tf-container w-1290">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="heading-section style-3 has-text text-center" style="margin: 0;">
                                                    <!-- <p class="sub-title">Closes Projects</p> -->
                                                    <p class="title tf-animate-3" style="color: #0D401C;" >
                                                        Our Products
                                                    </p>
                                                    <p class="text" style="color: #0D401C; margin: 0;">
                                                        Our most popular microgreens, known for their unbeatable flavor, freshness, and nutrition.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                                <div class="widget-content-tab">
                                    <div class="widget-content-inner container-loadmore active">
                                        <div class="grid-layout-3 grid-portfolio">
                                        @foreach($tray_product as $tray)
    <div class="wow fadeInUp product-card" data-wow-delay="0s">
        <div class="box-portfolio wow fadeInUp" data-wow-delay="0s">
            <div class="image">
                <img src="{{asset('storage/'.$tray->sec3_img1)}}"
                     data-src="{{asset('storage/'.$tray->sec3_img1)}}" 
                     alt="" class="lazyload" style="height:545px;width:410px;">
            </div>
            <div class="content">
                <p class="sub font-farmhouse text-upper">Microgreens - farm</p>
                <a href="#" class="title fs-23 font-worksans fw-6 hover-text-secondary">
                    {{ $tray->sec1_title }}
                </a>
                <p class="text font-nunito">
                    {{ Illuminate\Support\Str::limit($tray->sec1_desc, 200) }}
                </p>
                <div class="bot">
                    <a href="#" class="btn-read icon style-circle">
                        <i class="icon-arrow_right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="price wow fadeInUp" data-wow-delay="0s">
            <p>Selected Tray Price: <span class="selectedPrice">---</span></p>
        </div>

        <select name="weight" class="custom-dropdown wow fadeInUp animated" data-wow-delay="0.2s">
            <option value="">Choose Your 10 x 20 Tray</option>
            @foreach (json_decode($tray->sec5_tray_price, true) ?? [] as $item)
                <option value="{{ $item['tray'] }}" data-price="{{ $item['tray_price'] }}">
                    {{ $item['tray'] }}
                </option>
            @endforeach
        </select>

        <div class="quantity-controls wow fadeInUp" data-wow-delay="0s">
            <button type="button" class="decrease">-</button>
            <input type="text" value="1" readonly />
            <button type="button" class="increase">+</button>
        </div>

        <button class="add-to-cart-btn wow fadeInUp" data-wow-delay="0s"
            data-product-id="{{ $tray->id }}"
            data-product-name="{{ $tray->sec1_title }}"
            data-product-img="{{ asset('storage/'.$tray->sec3_img1) }}"
            data-product-price="">
            Add to Cart
        </button>
    </div>
@endforeach

                                        </div>
                                        <div class="flex justify-center">
                                             <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">
                                                 <span class="text-style text-anime-style-1"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: scale(1.5, 1.5); opacity: 0;">Load</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: scale(0.8, 0.8); opacity: 0;">More</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: scale(1.5, 1.5); opacity: 0;">Products</div></span>
                                                 <div class="icon">
                                                     <i class="icon-arrow_right"></i>
                                                 </div>
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
        <!-- /.Main-content -->

        </div><!-- /.Main-content -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".custom-dropdown").forEach(function (dropdown) {
            dropdown.addEventListener("change", function () {
                let selectedOption = this.options[this.selectedIndex]; // Get selected option
                let price = selectedOption.getAttribute("data-price") || "---"; // Get price or default
                
                let parentCard = this.closest("div.wow.fadeInUp"); // Find the closest parent card
                let priceElement = parentCard.querySelector("#selectedPrice"); // Get the price element inside that card
                
                if (priceElement) {
                    priceElement.textContent = price; // Update the price
                }
            });
        });
    });
</script>
<script>
 document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".product-card").forEach((productCard) => {
        let weightSelect = productCard.querySelector(".custom-dropdown");
        let priceDisplay = productCard.querySelector(".selectedPrice");
        let addToCartBtn = productCard.querySelector(".add-to-cart-btn");
        let quantityInput = productCard.querySelector(".quantity-controls input");
        let plusBtn = productCard.querySelector(".increase");
        let minusBtn = productCard.querySelector(".decrease");

        // ✅ Update Price Based on Selected Weight
        weightSelect.addEventListener("change", function () {
            let selectedOption = weightSelect.options[weightSelect.selectedIndex];
            let price = selectedOption.getAttribute("data-price") || "--";
            priceDisplay.textContent = price;
            addToCartBtn.setAttribute("data-product-price", price);
        });

        // ✅ Increase Quantity
        plusBtn.addEventListener("click", function () {
            let currentQuantity = parseInt(quantityInput.value) || 1;
            quantityInput.value = currentQuantity + 1;
        });

        // ✅ Decrease Quantity
        minusBtn.addEventListener("click", function () {
            let currentQuantity = parseInt(quantityInput.value) || 1;
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        });

        // ✅ Add to Cart Functionality
        addToCartBtn.addEventListener("click", function () {
            let productId = addToCartBtn.getAttribute("data-product-id");
            let productName = addToCartBtn.getAttribute("data-product-name");
            let productImg = addToCartBtn.getAttribute("data-product-img");
            let productPrice = addToCartBtn.getAttribute("data-product-price");
            let quantity = quantityInput.value;
            let weight = weightSelect.value;

            if (!weight) {
                alert("Please select a tray first.");
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
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                console.log("Product Added to Cart:", { productId, productName, quantity });
            })
            .catch(error => console.error("Error:", error));
        });
    });
});


</script>
@endsection