<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Leafy Delight | Admin</title>

<!-- General CSS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/fontawesome/css/all.min.css') }}">
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/jquery-selectric/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/summernote/summernote-bs4.css') }}">
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('assets/admin/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/admin-style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/admin-components.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('style')
</head>
<body class="layout-4">
<!-- Page Loader
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div> -->
@if(Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif

    @if(Session::has('error'))
        <script>
            toastr.error("{{ Session::get('error') }}");
        </script>
    @endif
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Notifications
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div> -->
                    <!-- <div class="dropdown-list-content dropdown-list-icons">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-icon bg-primary text-white">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="dropdown-item-desc"> Template update is available now!
                                <div class="time text-primary">2 Min Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                <div class="time">10 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-success text-white">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-danger text-white">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Low disk space. Let's clean it!
                                <div class="time">17 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Welcome to CodiePie template!
                                <div class="time">Yesterday</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                    </div>
                    </div>
                </li> -->
                <li class="dropdown">
    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('images/default-avatar.png') }}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="{{ route('profile') }}" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>

            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{route('dashboard')}}">
                   
                    </a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">AA</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="active"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
                    
                  

                    <li class="menu-header">CMS PAGES</li>
                    <li class="dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-check-dollar"></i> <span>CMS PAGES</span></a>
                        <ul class="dropdown-menu">
                        <li class=""><a class="nav-link" href="{{route('home.update')}}">Home</a></li>
                        <li class=""><a class="nav-link" href="{{route('about.update')}}">About</a></li>
                        <li class=""><a class="nav-link" href="{{route('contact.update')}}">Contact</a></li>
                        <li class=""><a class="nav-link" href="{{route('faq.update')}}">Faqs</a></li>
                        <li class=""><a class="nav-link" href="{{route('growpage.update')}}">Grow With Us</a></li>
                        <li class=""><a class="nav-link" href="{{route('recipe.update')}}">Recipes</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">CMS CRUDS</li>
                    <li class="dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-money-check-dollar"></i> <span>CMS CRUDS</span></a>
                        <ul class="dropdown-menu">
                        <li class=""><a class="nav-link" href="{{route('products.create')}}">Add Product</a></li>
                        <li class=""><a class="nav-link" href="{{route('products.index')}}">All Product</a></li> 
                        <li class=""><a class="nav-link" href="{{route('recipes.add')}}">Add Recipe</a></li>
                        <li class=""><a class="nav-link" href="{{route('recipes.list')}}">All Recipes</a></li>
                        </ul>
                    </li>
                   

                    <li class="menu-header">Setting</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-gear"></i> <span>General Setting</span></a>
                        <ul class="dropdown-menu">
                        <li class=""><a class="nav-link" href="{{route('settings.index')}}">Genral Settings</a></li> 
                        </ul>
                    </li>
                    <li class="menu-header">Messages</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-gear"></i> <span>Responses</span></a>
                        <ul class="dropdown-menu">
                      
                        </ul>
                    </li>


                    <li class="menu-header">Logout</li>
                    <li>
    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out"></i><span>Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
                </ul>
            </aside>
        </div>
        @include('flash::message')
        @yield('content')

        <footer class="main-footer">
            <div class="footer-left">
                 © 2025 ALL RIGHTS RESERVED
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>
@flasher_render
<!-- General JS Scripts -->
<script src="{{ asset('assets/admin/bundles/lib.vendor.bundle.js') }}"></script>
<!-- <script src="js/CodiePie.js"></script> -->

<!-- JS Libraies -->
<script src="{{ asset('assets/admin/modules/chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/admin/js/index.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/admin/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('assets/admin/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/admin/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<script src="{{ asset('assets/admin/modules/summernote/summernote-bs4.js') }}"></script>

<!-- Page Specific JS File -->
<!-- <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script> -->
<script src="{{ asset('assets/admin/js/features-post-create.js') }}"></script>
<script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom.js') }}"></script>
<script>
  @if(Session::has('message'))
  toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": false,
	"progressBar": true,
	"positionClass": "toast-top-right",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "5000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
<script>
    function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('imagePreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@yield('script')
</body>
</html>