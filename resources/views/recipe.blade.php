@extends('include.main')
@section('content')

        <!-- Page-title -->
        <div class="page-title page-our-farmers ">
            <div class="rellax" data-rellax-speed="5">
                <img src="{{asset($recipe->ban_img)}}" alt="">
            </div>
            <div class="content-wrap">

                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                   {{$recipe->ban_subttitle}}
                                </p>
                                <h1 class="title">
                                {{$recipe->ban_title}}
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.html">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    
                                    <a href="javascript:void(0)">Recipes</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="images/item/grass-5.png" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content page-our-farmers pt-0 pb-0">

            <!-- Section we are -->
            <section class="s-we-are">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="we-are-wrap img-hover" id="Padding-set-cont">
                                <div class="image hover-item wow zoomIn ">
                                    <img src="./images/leafy/Recipes0-sub2.jpg"
                                        data-src="./images/leafy/Recipes0-sub2.jpg" alt="" class="lazyload">
                                </div>
                                <div class="content">
                                    <a href="#" class="hover-text-primary title font-worksans">

                                    {{$recipe->sec1_card1_title}}
                                    </a>
                                    <p class="text">
                                    {{$recipe->sec1_card1_desc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="we-are-wrap img-hover" id="Padding-set-cont">
                                <div class="image hover-item wow zoomIn">
                                    <img src="images/leafy/Recipes1-sub1.jpg" data-src="images/leafy/Recipes1-sub1.jpg" alt=""
                                        class="lazyload">
                                </div>
                                <div class="content">

                                    <a href="#" class="hover-text-primary title font-worksans">
                                    {{$recipe->sec1_card2_title}}
                                    </a>
                                    <p class="text">
                                    {{$recipe->sec1_card2_desc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="images/item/yellow-bottom.png" alt="">
                </div>
            </section><!-- /.Section we are -->

            <!-- Section meet farmer -->
            <section class="s-meet-farm">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section text-center has-text mb-81">
                                <p class="sub-title">{{$recipe->sec3_subtitle}} </p>
                                <p class="title text-anime-style-2">
                                {{$recipe->sec3_title}}
     
                                 </p>
                                <p class="text">
                                {{$recipe->sec3_desc}}
                                </p>
                                <div class="img-item">
                                    <img class="tf-animate-1" src="images/item/leaves-2.png" alt="" />
                                </div>
                            </div>
                        </div>
                        @foreach($recipes as $rec)
                        <div class="col-lg-4 mb-20">
                            <div class="box-farmer img-hover pb-30 wow fadeInUp animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                <div class="image hover-item">
                                    <img src="{{asset($rec->sec1_img)}}" data-src="{{asset($rec->sec1_img)}}" alt="" class=" ls-is-cached lazyloaded">
                                </div>
                                <div class="content">
                                    <div class="author-wrap">
                                        <div class="has-border">
                                            <a href="#" class="name fw-7 fs-23 hover-text-4 font-worksans" contenteditable="false" style="cursor: pointer;">
                                            {{$rec->sec1_title}}
                                            </a>
                                        </div>
                                    </div>
                                    <p class="text font-nunito">
                                    {{ Illuminate\Support\Str::limit($rec->sec3_desc, 100) }}


                                    </p>
                                    <div class="wg-social style-2">
                                        <a href="{{route('recipe-detail',$rec->slug)}}" class="tf-btn-read text-white hover-text-secondary" contenteditable="false" style="cursor: pointer;">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <div class="say-hi">
                                    <div class="img-item">
                                        <img src="images/item/say-hi.png" alt="">
                                        <p class="font-worksans fw-6 fs-24">Let's cook!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                        <div class="d-flex justify-content-center">
                                {{ $recipes->links('pagination::bootstrap-5') }}
                            </div>
                        
                    </div>
                </div>
            </section>
            <!-- /.Section meet farmer -->

        </div><!-- /.Main-content -->



@endsection