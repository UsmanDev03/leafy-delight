@extends('include.main')
@section('content')

        <!-- Page-title -->
        <div class="page-title page-blog-full-w  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="{{asset('images/leafy/Single-Recipes.jpg')}}" alt="">
            </div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                    Discover fresh ideas with our latest microgreen recipes!
                                </p>
                                <h1 class="title">
                                    special recipes
                                </h1>
                                <div class="icon-img">
                                    <img src="{{asset('images/item/line-throw-title.png')}}" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="#"> Recipes</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Recipes Name</a>
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
        <div class="main-content page-blog-single">
            <div class="blog-single">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="content">
                                <h3 class="title-name fw-bold">
                                    {{$recipe->sec1_title}}
                                </h3>
                                <div class="entry-meta">
                                    <ul class="meta-list">
                                        <li class="entry author">
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                <a class="" href="#">
                                                    By Hardson
                                                </a>
                                            </p>
                                        </li>
                                        <li class="entry date">
                                            <i class="fa-solid fs-14 fa-calendar"></i>
                                            <p class="">
                                                <a href="#">
                                                {{$recipe->sec1_date}}
                                                </a>
                                            </p>
                                        </li>
                                        <li class="entry tags">
                                            <i class="fa-solid fa-tag"></i>
                                            <p>
                                                <a href="#">Agriculture</a>,
                                                <a href="#">Farm</a>
                                            </p>
                                        </li>
                                        <li class="entry comment">
                                            <i class="fa-solid fa-comment"></i>
                                            <p>
                                                <a href="#">0 Comments</a>
                                            </p>
                                        </li>
                                        <li class="entry view">
                                            <i class="fa-solid fa-eye"></i>
                                            <p>
                                                <a href="#">350 View</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-image">
                                    <img class="lazyload" src="{{asset($recipe->sec1_img)}}"
                                        data-src="{{asset($recipe->sec1_img)}}" alt="">
                                </div>

                                <div class="block-quote style-3 wow fadeInUp" data-wow-delay="0s">
                                    <div class="has-border">
                                        <div class="quote">
                                            <div class="icon style-circle">
                                                <i class="icon-quote"></i>
                                            </div>
                                            <p class="font-snowfall cite">
                                            {{$recipe->sec2_card_desc}}                                            </p>
                                        </div>
                                        <div class="bot">
                                            <div class="entry-author">
                                                <p>
                                                    <a href="#" class="hover-text-secondary">
                                                    {{$recipe->sec2_card_name}} 
                                                    </a>
                                                
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <p class="title title-1 fw-bold font-worksans">
                                {{$recipe->sec3_title}} 
                                </p>
                                <p class="text text-3">
                                {!!$recipe->sec3_desc!!}         
                            </p>
                                
                                <div class="blog-bot">
                                    
                                    <div class="share">
                                        <div class="icon">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </div>
                                        <p class="fw-5 font-worksans mr-23">
                                            Share:
                                        </p>
                                        <ul class="social-list style-2">
                                            <li class="item">
                                                <a href="#">
                                                    <i class="icon-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <a href="#">
                                                    <i class="icon-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <a href="#">
                                                    <i class="fa-brands fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <a href="#">
                                                    <i class="fa-brands fa-telegram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="comment-wrap">
                                    <h2 class="fw-bold font-worksans wow fadeInUp" data-wow-delay="0s">
                                        Comments
                                    </h2>
                                    <div class="author-wrap">
                                        <div class="author">
                                            <div class="image-avt">
                                                <img src="{{asset('images/widget/author-comment.jpg')}}" alt="">
                                            </div>
                                            <div class="entry">
                                                <a href="#"
                                                    class="entry-name font-worksans fw-6 text-upper hover-text-secondary">Christine
                                                    Rose</a>
                                                <p class=" font-nunito">
                                                    July 29, 2024 at 7:35 am
                                                </p>
                                            </div>
                                        </div>
                                        <a href="#post-comment-wrap"
                                            class="tf-btn btn-reply style-2 type-2 font-nunito">
                                            <i class="fa-solid fa-reply"></i>
                                            Reply
                                        </a>
                                    </div>
                                    <p class="comment font-nunito">
                                        Turn everyday meals into culinary masterpieces with our delicious microgreen recipes!
                                    </p>
                                </div>
                                <div class="post-comment-wrap" id="post-comment-wrap">
                                    <h2 class="fw-bold font-worksans wow fadeInUp" data-wow-delay="0s">
                                        Leave a Comment About Recipe
                                    </h2>
                                    <p class="sub-title font-nunito">
                                        Your email address will not be published. Required fields are marked *
                                    </p>
                                    <form action="#" class="form-post-comment">
                                        <div class="cols ">
                                            <fieldset>
                                                <input type="text" placeholder="Name*" required>
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" placeholder="Email*" required>
                                            </fieldset>
                                        </div>
                                        <div class="cols field-text">
                                            <textarea name="message" id="message" placeholder="Message..."
                                                required></textarea>
                                        </div>
                                        <div class="flex justify-center">
                                            <button type="submit" class="tf-btn">
                                                <span class="text-style">
                                                    Post Comment
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
                        <div class="col-lg-4">
                            <div class="tf-sidebar">
                                <div class="wg-author-farm mb-40">
                                    <div class="image-avt wow zoomIn">
                                        <img src="{{asset('images/widget/author.jpg')}}" alt="">
                                    </div>
                                    <a href="#" class="text-upper font-worksans name hover-text-secondary">Person Name</a>
                                    <p class="duty font-nunito">
                                        Recepices posted
                                    </p>
                                    <p class="text font-nunito">
                                        PErson Intero Here
                                    </p>
                                    <ul class="social-list style-3 style-2">
                                        <li class="item">
                                            <a href="#">
                                                <i class="icon-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="icon-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa-brands fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="#">
                                                <i class="fa-brands fa-telegram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-item sb-search">
                                    <h5 class="sb-title">
                                        Search
                                    </h5>
                                    <div class="sb-content">
                                        <form action="#" class="form-search style-1">
                                            <fieldset>
                                                <input type="text" placeholder="Write content..." required>
                                            </fieldset>
                                            <button type="submit" class="btn-search">
                                                <i class="icon-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <div class="sidebar-item sb-category">
                                    <h5 class="sb-title">
                                        INGREDIENTS
                                    </h5>
                                    <div class="sb-content">
                                        <ul class="category-list">
                                            <li class="item">
                                                <a href="#">INGREDIENTS 1</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">INGREDIENTS 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">INGREDIENTS 3</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">INGREDIENTS 4</a>
                                            </li>
                                            <li class="item">
                                                <a href="#">INGREDIENTS 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item sb-latest-new">
                                    <h5 class="sb-title">
                                        News Recipes
                                    </h5>
                                    <div class="sb-content">
                                        <ul class="latest-list">
                                            @foreach($lastthree as $three)

                                            <li class="item img-hover">
                                                <div class="image hover-item">
                                                    <img src="{{asset($three->sec1_img)}}" style="height:80px;width:100px;" alt="">
                                                </div>
                                                <div class="content">
                                                    <p class="date">{{ \Carbon\Carbon::parse($three->sec1_date)->format('d F Y') }}</p>
                                                    <a class="name-post " href="{{route('recipe-detail',$three->slug)}}">
                                                   {{ Illuminate\Support\Str::limit($three->sec1_title, 50) }}
                                                    </a>
                                                </div>
                                            </li>
                                           
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Main-content -->

@endsection