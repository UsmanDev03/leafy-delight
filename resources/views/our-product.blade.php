@extends('include.main')
@section('content')

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
                                    <!-- <i class="icon-arrow_down"></i> -->
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
                                <a class="item-menu-mobile" href="faq.html">FAQ’S
                                   
                                </a>
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
        <div class="page-title page-shop-detail  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="images/leafy/bg-prsducts01.jpg" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content center" id="product-banner">
                                <p class="sub-title">
                                    Buy Health Foods At Our Store
                                </p>
                                <h1 class="title">
                                    Our products
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="images/item/grass-6.png" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content page-shop-product pt-0">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tf-sidebar">
                         
                              
                            
                        <div class="sidebar-item">
                        <h5 class="sb-title">Filter by Price</h5>
                        <div class="sb-content sb-filter-price">
                            <div class="range-slider">
                                <div id="range-two-val"></div>
                                <div class="bottom">
                                    <div class="price-wrap">
                                        <span class="text font-nunito">Price:</span>
                                        <div class="value">
                                            <div id="skip-value-lower">10</div>
                                            <span class="line"></span>
                                            <div id="skip-value-upper"></div>
                                        </div>
                                    </div>
                                    <a href="#" id="applyFilter" class="tf-btn-read btn-filter font-worksans fw-5 hover-text-4">Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    



                        

                            <div class="sidebar-item sb-category">
                                <h5 class="sb-title">Weight</h5>
                                <div class="sb-content" id="padding-filter">
                                    <ul class="category-list">
                                        <li class="item">
                                            <label class="animated-checkbox">
                                                <input type="checkbox" onclick="filterByWeight('100')">
                                                <span class="checkmark"></span>
                                                <a class="list-padding-top">100g</a>
                                            </label>
                                        </li>
                                        <li class="item">
                                            <label class="animated-checkbox">
                                                <input type="checkbox" onclick="filterByWeight('80')">
                                                <span class="checkmark"></span>
                                                <a>80g</a>
                                            </label>
                                        </li>
                                        <li class="item">
                                            <label class="animated-checkbox">
                                                <input type="checkbox" onclick="filterByWeight('75')">
                                                <span class="checkmark"></span>
                                                <a class="list-padding">75g</a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sidebar-item sb-latest-new">
                                <h5 class="sb-title">
                                    Popular Products
                                </h5>
                                <div class="sb-content sb-popular-product">
                                    <ul class="latest-list style-2">
                                    @foreach($latesproducts as $latesproduct)
                                        <li class="item img-hover">
                                            <div class="image hover-item">
                                                <img src="{{asset('storage/'.$latesproduct->sec3_img1)}}" id="product-popular" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="{{route('product-detail',$latesproduct->slug)}}" class="name font-worksans fw-5 hover-text-4">
                                                    {{$latesproduct->sec1_title}}
                                                </a>
                                                <div class="pricing-star">
                                                @foreach (json_decode($latesproduct->sec4_weight_price, true) ?? [] as $item)

                                                <span class=" price font-worksans fw-6">${{ $item['price'] }}</span>
                                                @endforeach
                                                    <div class="wg-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                      
                                      @endforeach
                                    </ul>
                                </div>
                            </div>

                          
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tf-shop-control" id="tf-shop-control">
                            
                            <div class="control-right">
                                <div class="tf-control-sorting">
                                    <div class="tf-dropdown-sort">
                                        <div class="tf-btn style-2" data-bs-toggle="dropdown">
                                            <span class="text-sort-value">Default sorting</span>
                                            <i class="icon-arrow_down"></i>
                                        </div>
                                        <div class="dropdown-menu ">
                                            <div class="select-item ">
                                                <span class="text-value-item">
                                                    New Post
                                                </span>
                                            </div>
                                            <div class="select-item">
                                                <span class="text-value-item">
                                                    Regular Post
                                                </span>
                                            </div>
                                            <div class="select-item active">
                                                <span class="text-value-item">
                                                    Lastest Posts
                                                </span>
                                            </div>
                                            <div class="select-item ">
                                                <span class="text-value-item">
                                                    All Post
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Products Container -->
                    <div id="product-list"></div>
                        <div class="wg-shop-content ">
                            <div class="grid-layout-3 gap-30-20" id="images-content">
                                @foreach($ourproducts as $ourproduct)
                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">

                                    <div class="image">
                                        <img src="{{asset('storage/'.$ourproduct->sec3_img1)}}" data-src="{{asset('storage/'.$ourproduct->sec3_img1)}}" alt=""
                                            class="lazyload images-sizing" >
                                    </div>
                                    <a href="#" class="name-product font-worksans hover-text-4">
                                       {{$ourproduct->sec1_title}}
                                    </a>
                                    <div class="pricing-star">
                                        <div class="price-wrap">
                                        @if($ourproduct->discount_price)          
                                                <span class=" price-1">${{$ourproduct->discount_price}}</span>
                                                @else
                                                {{$ourproduct->discount_price}}
                                                @endif
                                        @foreach (json_decode($ourproduct->sec4_weight_price, true) ?? [] as $item)
                                        <span class=" price-2">${{ $item['price'] }}</span>
                                        @endforeach
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
                                        <a href="./Product-single.html" class="icon shoping">

                                            <div class="tt-text">

                                                <p>
                                                    Add to card
                                                </p>
                                            </div>
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                        @php
                                            $sec4_weight_price = json_decode($ourproduct->sec4_weight_price, true);
                                            $price = is_array($sec4_weight_price) ? ($sec4_weight_price[0]['price'] ?? 0) : 0;
                                        @endphp

                                        <button class="add-to-wishlist icon white-list"
                                            data-id="{{ $ourproduct->id }}" 
                                            data-name="{{ $ourproduct->sec1_title }}"
                                            data-img="{{ asset('storage/' . $ourproduct->sec3_img1) }}"
                                            data-price="{{ $price }}">

                                            
                                            <div class="tt-text">
                                                <p>Add to Wishlist</p>
                                            </div>
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                        <a  class="icon view-product" href="{{route('product-detail',$ourproduct->slug)}}" onclick="showFullScreenSlider(this)" >
                                            <div class="tt-text">

                                                <p>
                                                    Quick View
                                                </p>
                                            </div>
                                         
                                            <i class="fa-solid fa-eye">
                                            </i>
                                        </a>
                                        
                                    </div>
                                </div>
                                @endforeach
                                

                              
                            
                            </div>
                        </div>
                        {{ $ourproducts->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>

            

        </div><!-- /.Main-content -->

        <!-- Section our expertise -->
        <section class="s-our-expertise" style="padding-top: 0px; padding-bottom: 30px;" >
            <div class="heading-section text-center has-text has-img-item  mt-0" id="bg-product-recipecs" > 
                <p class="sub-title">Some of Best Recipes
                </p>
                <p class="title text-anime-style-1 overflow-hidden">Fresh Flavors, <br>
                    Endless Creations</p>
                <p class=" text">
                    Serving the best microgreen recipes to elevate your meals with fresh, vibrant flavors.
                </p>
                <div class="img-item">
                    <img class="tf-animate-1" src="images/item/leaves-2.png" alt="" />
                </div>
                <div class="image">

                    <img src="images/leafy/products-recipes.jpg" id="bg-recepices" alt="" />
                </div>
                <div class="img-item item-2">
                    <img src="images/item/page-title-top.png" alt="" />
                </div>
            </div>
            <div class="s-slider">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container slider-provide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-provide img-hover">
                                            <div class="has-border ">

                                                <div class="image hover-item ">
                                                    <img src="images/leafy/recipe-2 (1).jpg"
                                                        data-src="images/leafy/recipe-2 (1).jpg" alt=""
                                                        class="lazyload">
                                                </div>
                                                <a href="#"
                                                    class="title text-upper font-worksans hover-text-secondary">
                                                    Microgreens Caprese Salad
                                                </a>
                                                <span class="break-line"></span>
                                                <p class="text" id="text-width">
                                                    Combine all ingredients in a large bowl. Drizzle with extra-virgin olive oil and lemon juice and toss.
                                                </p>
                                                <a href="./recipes-single-image.html" class="tf-btn-read">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-provide img-hover">
                                            <div class="has-border ">

                                                <div class="image hover-item">
                                                    <img src="images/leafy/recipe-3 (1).jpg"
                                                        data-src="images/leafy/recipe-3 (1).jpg" alt=""
                                                        class="lazyload">
                                                </div>
                                                <a href="#"
                                                    class="title text-upper font-worksans hover-text-secondary">
                                                    Microgreens Caprese Salad
                                                </a>
                                                <span class="break-line"></span>
                                                <p class="text" id="text-width">
                                                    Combine all ingredients in a large bowl. Drizzle with extra-virgin olive oil and lemon juice and toss.
                                                </p>
                                                <a href="./recipes-single-image.html" class="tf-btn-read">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-provide img-hover">
                                            <div class="has-border ">
                                                <div class="image hover-item">
                                                    <img src="images/leafy/recipe-4 (1).jpg"
                                                        data-src="images/leafy/recipe-4 (1).jpg" alt=""
                                                        class="lazyload">
                                                </div>
                                                <a href="#"
                                                    class="title text-upper font-worksans hover-text-secondary">
                                                    Italian Chopped Salad
                                                </a>
                                                <span class="break-line"></span>
                                                <p class="text " id="text-width">
                                                    Combine all ingredients in a large bowl. Drizzle with extra-virgin olive oil and lemon juice and toss.
                                                    
                                                </p>
                                                <a href="./recipes-single-image.html" class="tf-btn-read">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <a href="./recipes.html" class="tf-btn btn-loadMore mt-50 scale-40">
                                    <span class="text-style text-anime-style-1">Discover More Recipes</span>
                                    <div class="icon">
                                        <i class="icon-arrow_right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination style-1 pagination-slider-provide"></div>
                <div class=" btn-slider-provide style-2 btn-next">
                    <img src="icons/slide-next-2.svg" alt="">
                </div>
                <div class=" btn-slider-provide style-2 btn-prev">
                    <img src="icons/slide-prev-2.svg" alt="">
                </div>
            </div>
        </section>
        <!-- /.Section our expertise -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $(".add-to-wishlist").click(function() {
        let productId = $(this).data('id');
        let productName = $(this).data('name');
        let productImg = $(this).data('img');
        let productPrice = $(this).data('price');
        //alert(productPrice);
        //alert(productName);
        $.ajax({
            url: "{{ route('wishlist.add') }}",
            type: "POST",
            data: {
                product_id: productId,
                product_name: productName,
                product_Img: productImg,
                product_price: productPrice,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.status === 'success') {
                    alert(response.message);
                } else if (response.status === 'exists') {
                    alert('This item is already in your wishlist.');
                }
            },
            error: function(xhr) {
                alert("Error: " + xhr.responseText);
            }
        });
    });
});
</script>
<script>
    function filterByWeight(weight) {
        $.ajax({
            url: "{{ route('filter.by.weight') }}",
            method: "GET",
            data: { weight: weight },
            beforeSend: function () {
                $('#images-content').html('<p>Loading products...</p>');
            },
            success: function (response) {
        console.log("AJAX Response:", response);

        // Convert Object to Array
        let productsArray = Object.values(response.products);

        if (productsArray.length > 0) {
            let productsHTML = '';
            productsArray.forEach(function(product) {
                let priceHTML = ''; 
                if (product.sec4_weight_price) {
                    try {
                        let prices = JSON.parse(product.sec4_weight_price); // JSON parse
                        prices.forEach(item => {
                            priceHTML += `<span class="price">${item.price}</span>`; // Append each price
                        });
                    } catch (error) {
                        console.error("Error parsing sec4_weight_price:", error);
                    }
                }
                if(product.discount_price)
                {
                    let dis = `<b>$</b><span class="price-1">${product.discount_price}</span>`
                }else{
                    dis =  `<span class="price-1">${product.discount_price}</span>`
                }
                let productHTML = `
                    <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">
                        <div class="image">
                            <img src="/storage/${product.sec3_img1}" alt="" class="lazyload images-sizing">
                        </div>
                        <a href="#" class="name-product font-worksans hover-text-4">
                            ${product.sec1_title}
                        </a>
                        <div class="pricing-star">
                            <div class="price-wrap">
                            
                                ${dis}
                                <b>$</b><span class="price-2">${priceHTML}</span>
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
                            <a href="./Product-single.html" class="icon shoping">
                                <div class="tt-text">
                                    <p>Add to cart</p>
                                </div>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                            <button class="add-to-wishlist icon white-list"
                                data-id="${product.id}" 
                                data-name="${product.sec1_title}"
                                data-img="/storage/${product.sec3_img1}"
                                data-price="${priceHTML}">
                                <div class="tt-text">
                                    <p>Add to Wishlist</p>
                                </div>
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <a class="icon view-product" href="/product-detail/${product.slug}" onclick="showFullScreenSlider(this)">
                                <div class="tt-text">
                                    <p>Quick View</p>
                                </div>
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </div>
                    </div>
                `;
                productsHTML += productHTML;
            });

            $('#images-content').html(productsHTML);
        } else {
            $('#images-content').html('<p>No products found for this weight.</p>');
        }
    }
    ,
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                alert("Error fetching products. Please check console for details.");
            }
        });
    }



</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   $(document).ready(function () {
    $("#applyFilter").on("click", function (e) {
        e.preventDefault();

        let minPrice = $("#skip-value-lower").text().replace(/\D/g, '');
        let maxPrice = $("#skip-value-upper").text().replace(/\D/g, '');
        

        console.log("Min Price:", minPrice);
        console.log("Max Price:", maxPrice);

        $.ajax({
            url: "/filter-products",
            method: "GET",
            data: { min_price: minPrice, max_price: maxPrice },
            dataType: "json",
            success: function (response) {
                console.log("AJAX Response:", response);

                let productsArray = Object.values(response.products);

                if (productsArray.length > 0) {
                    let productsHTML = '';
                    productsArray.forEach(function(product) {
                        let priceHTML = ''; 
                        if (product.sec4_weight_price) {
                            try {
                                let prices = JSON.parse(product.sec4_weight_price);
                                prices.forEach(item => {
                                    priceHTML += `<span class="price">${item.price}</span>`;
                                });
                            } catch (error) {
                                console.error("Error parsing sec4_weight_price:", error);
                            }
                        }
                        if(product.discount_price)
                {
                    let dis = `<b>$</b><span class="price-1">${product.discount_price}</span>`
                }else{
                    dis =  `<span class="price-1">${product.discount_price}</span>`
                }
                        let productHTML = `
                            <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">
                                <div class="image">
                                    <img src="/storage/${product.sec3_img1}" alt="" class="lazyload images-sizing">
                                </div>
                                <a href="#" class="name-product font-worksans hover-text-4">
                                    ${product.sec1_title}
                                </a>
                                <div class="pricing-star">
                                    <div class="price-wrap">
                                    

                                      ${dis}
                                        <b>$</b><span class="price-2">${priceHTML}</span>
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
                                    <a href="./Product-single.html" class="icon shoping">
                                        <div class="tt-text">
                                            <p>Add to cart</p>
                                        </div>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <button class="add-to-wishlist icon white-list"
                                        data-id="${product.id}" 
                                        data-name="${product.sec1_title}"
                                        data-img="/storage/${product.sec3_img1}"
                                        data-price="${product.sec1_price}">
                                        <div class="tt-text">
                                            <p>Add to Wishlist</p>
                                        </div>
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                    <a class="icon view-product" href="/product-detail/${product.slug}" onclick="showFullScreenSlider(this)">
                                        <div class="tt-text">
                                            <p>Quick View</p>
                                        </div>
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        `;
                        productsHTML += productHTML;
                    });

                    $('#images-content').html(productsHTML);
                } else {
                    $('#images-content').html('<p>No products found for this weight.</p>');
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                alert("Error fetching products. Please check console for details.");
            }
        });
    });
});

</script>

@endsection