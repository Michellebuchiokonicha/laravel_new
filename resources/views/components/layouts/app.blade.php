<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />   


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- <title>{{ $title ?? 'Page Title' }}</title> -->
        <title>Landmark Hotel </title>
    
        <link href="assets/img/Landmark/landmark.ico" rel="shortcut icon">
    <link href="assets/css/bundle.min.css" rel="stylesheet">
    
    </head>
    <body class="vh-100 vw-100 overflow-hidden bg-light">
    <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />

<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
    <!-- Header -->
    <!-- Preloader -->
    <div class="position-fixed top-0 bottom-0 bg-white vw-100 z-1100 d-flex align-items-center justify-content-center" id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
   <!-- Header -->
   <header id="header" class="header transition-base fixed-top z-1030 shadow-sm bg-white" data-bs-theme="light">
        <nav class="navbar navbar-expand-xl fw-medium pt-5 pb-5 fs-6">
            <div class="container justify-content-end">
                <!-- Brand -->
                <a class="navbar-brand flex-grow-1" id="brandHeader" href="./">
                    <img src="https://www.landmarkhotel.ng/assets/img/landmarkhotel_logo.png"width='200' srcset="https://www.landmarkhotel.ng/assets/img/landmarkhotel_logo.png 2x" class="logo" alt="">
                    <h1 class="d-none">Landmark</h1>
                </a>
                <!-- /Brand -->
                <!-- offcanvas Navbar -->
                <div class="offcanvas offcanvas-navbar offcanvas-end border-start-0" tabindex="-1" id="offcanvasNavbar">
                    <!-- Offcanvas header -->
                    <div class="offcanvas-header border-bottom">
                        <h3 class="offcanvas-title text-uppercase ff-heading" id="bdSidebarOffcanvasLabel">Landmark Hotel</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- /Offcanvas header -->
                    <div class="offcanvas-body justify-content-end">
                        <!-- Navbar nav-->
                        <ul class="navbar-nav align-items-xl-center me-xl-3 mb-3 mb-xl-0">
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase active" href="/" data-bs-display="static">
                                    <span>Home</span>
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@rooms" href="/step-one" data-bs-display="static">
                                    <span>Rooms</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@tours" href="/rooms" data-bs-display="static">
                                    <span>Services</span>
                                  
                                </a>
                               
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link text-uppercase @@gallery" href="/contact">About</a></li>
                            <li class="nav-item dropdown">
                            <div class="mt-2 mt-xl-0 order-0 order-xl-1">
                                <a href="/step-one" class="btn btn-primary">
                                    <i class="hicon hicon-24hour-room-service"></i>
                                    <span>Reservation</span>
                                </a>
                            </div>                   
                                </div>
                            </li>
                            
                            
                        </ul>
                        <!-- /Navbar nav -->
                        <!-- Sub Links -->
                       
                        <!-- /Sub Links -->
                    </div>
                </div>
                <!-- /offcanvas Navbar -->
                <!-- Account link -->
              
                <!-- /Account link -->
                <!-- Nav toggler -->
                <button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- /Nav toggler -->
            </div>
        </nav>
    </header>
    <!-- /Header -->
    <!-- Right slider info -->
    <div class="offcanvas offcanvas-end border-start-0 text-body-tertiary" tabindex="-1" id="ocRightInfo" aria-labelledby="ocRightInfo" data-bs-theme="dark">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Brand -->
            <div class="mb-10">
                <a href="./index.html">
                    <img class="logo-light" src="./assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" alt="Landmark Hotel" title="Landmark Hotel">
                </a>
            </div>
            <!-- /Brand -->
            <!-- Contact Info -->
            <div class="mb-10">
                <h6 class="text-uppercase ls-1 ff-sub">Contact Info</h6>
                <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-flights-pin"></i>
                    </span>
                    <span class="flex-grow-1">610 Placer Loquen, Paris, France.</span>
                </div>
                <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-telephone"></i>
                    </span>
                    <span>+33 (0) 1 89 78 67 56</span>
                </div>
                <div class="d-flex mb-5">
                    <span class="me-3 flex-shrink-0">
                        <i class="hicon hicon-email-envelope"></i>
                    </span>
                    <span>Booking@example.com</span>
                </div>
            </div>
            <!-- /Contact Info -->
            <!-- Learn more -->
            <div class="mb-10">
                <h6 class="text-uppercase ls-1 ff-sub">Learn more</h6>
                <ul class="list-unstyled">
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="./about.html">Landmark's Story</a></li>
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="#">Terms of Use</a></li>
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- /Learn more -->
            <!-- Follow Us -->
            <div>
                <h6 class="text-uppercase ls-1 ff-sub">Follow Us</h6>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                <path d="M10 9l5 3l-5 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-pinterest" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 20l4 -9"></path>
                                <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-body link-hover-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tripadvisor" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                                <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                                <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                                <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Follow Us -->
        </div>
    </div>
    <!-- /Right slider info -->
    <!-- Language modal -->
    <div class="modal fade" id="mdlLanguage" tabindex="-1" aria-labelledby="h3Language" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-4 text-uppercase ls-1 ff-sub" id="h3Language">Select language</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav small row mb-0">
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/en.svg" height="16" alt="" class="me-2">
                                <span class="me-1">English</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/fr.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Français</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/es.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Español</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/de.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Deutsch</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/it.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Italiano</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/nl.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Nederlands</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/pt.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Português</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/ru.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Русский</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="./assets/img/flags/cn.svg" height="16" alt="" class="me-2">
                                <span class="me-1">日本語</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Language modal -->
    <!-- Currency modal -->
    <div class="modal fade" id="mdlCurrency" tabindex="-1" aria-labelledby="h3Currency" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-4 text-uppercase ls-1 ff-sub" id="h3Currency">Select currency</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav small row mb-0">
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>USD</strong> (United States Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>EUR</strong> (Euro)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>GBP</strong> (Pound Sterling)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>AUD</strong> (Australian Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>NZD</strong> (New Zealand Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>CAD</strong> (Canadian Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>AUD</strong> (Australian Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>JPY</strong> (Japanese Yen)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>CNY</strong> (Chinese Yuan)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>VND</strong> (Vietnam Dong)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>SGD</strong> (Singapore Dollar)</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-6">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <span class="me-1"><strong>THB</strong> (Thai Baht)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Currency modal -->
    <!-- Modal Login -->
    <div class="modal fade" id="mdlLogin" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlLoginTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlLoginTitle">Login to Landmark</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" novalidate="" action="/">
                        <!-- Login Facebook/Google -->
                        <div class="row g-4 mb-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-center shadow-sm w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 1000 1000" width="20" height="20">
                                        <path fill="#3b579d" d="M500 1000A500 500 0 0 1 500 0a500 500 0 0 1 0 1000z" />
                                        <path fill="#fff" d="M630 1000V613h130l20-151H630v-97c0-43 12-73 75-73h80V157c-14-2-62-6-117-6-115 0-194 70-194 200v111H344v151h130v387h156z" />
                                    </svg>
                                    <span class="ms-3">Facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-center shadow-sm w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 534 544" width="20" height="20">
                                        <path fill="#4285f4" d="M534 278c0-18-2-37-5-55H272v105h147c-6 34-26 64-54 83v68h87c52-48 82-118 82-201z" />
                                        <path fill="#34a853" d="M272 544c74 0 135-24 181-65l-88-68c-25 16-56 26-93 26-71 0-131-48-153-113H29v70c46 92 140 150 243 150z" />
                                        <path fill="#fbbc04" d="M119 324c-11-33-11-70 0-104v-70H29c-39 77-39 168 0 244l90-70z" />
                                        <path fill="#ea4335" d="M272 108c39-1 76 14 105 41l77-78a272 272 0 0 0-425 79l90 70c22-64 82-112 153-112z" />
                                    </svg>
                                    <span class="ms-3">Google</span>
                                </button>
                            </div>
                        </div>
                        <!-- /Login Facebook/Google -->
                        <hr>
                        <!-- Login Email -->
                        <div class="mb-5">
                            <label for="txtEmail2" class="form-label">Email<span class="text-danger">*</span></label>
                            <input class="form-control shadow-sm" type="text" id="txtEmail2" name="username2" value="" placeholder="" required="">
                            <div class="invalid-feedback"> Please enter username. </div>
                        </div>
                        <div class="mb-5">
                            <label for="txtPassword2" class="form-label">Password<span class="text-danger">*</span></label>
                            <input class="form-control shadow-sm" id="txtPassword2" name="password2" placeholder="" value="" type="password" required="">
                            <div class="invalid-feedback"> Please enter password. </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkRemember2">
                                        <label class="form-check-label" for="chkRemember2"><span class="text-body">Remember me</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-5 text-end">
                                    <a href="#mdlForgotPassword" data-bs-toggle="modal">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary w-50" id="btnSubmit2">
                                <i class="hicon hicon-aps-lock"></i>
                                <span>Login</span>
                            </button>
                        </div>
                        <hr>
                        <div> New here? <a href="#mdlRegister" data-bs-toggle="modal">Create an account</a>
                        </div>
                        <!-- /Login Email -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Login -->
    <!-- Modal Forgot Password -->
    <div class="modal fade" id="mdlForgotPassword" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlForgotPasswordTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlForgotPasswordTitle">Forgot Password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" novalidate="" action="./new-password.html">
                        <div class="mb-5">
                            <label for="txtEmail4" class="form-label">Email<span class="text-danger">*</span></label>
                            <input class="form-control shadow-sm" type="text" id="txtEmail4" name="username4" value="" placeholder="" required="">
                            <div class="invalid-feedback"> Please enter Email. </div>
                        </div>
                        <p><strong class="fw-medium">Note:</strong> A link will be sent to your mail, you need to click on it to create a new password.</p>
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary w-50" id="btnSubmit4">
                                <i class="hicon hicon-email-envelope"></i>
                                <span>Send link</span>
                            </button>
                        </div>
                        <div> Remember Password? <a href="#mdlLogin" data-bs-toggle="modal">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Forgot Password -->
    <!-- Modal Register -->
    <div class="modal fade" id="mdlRegister" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlRegisterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlRegisterTitle">Register for Landmark</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" novalidate="" action="./login.html">
                        <!-- Login Facebook/Google -->
                        <div class="row g-4 mb-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-center shadow-sm w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 1000 1000" width="20" height="20">
                                        <path fill="#3b579d" d="M500 1000A500 500 0 0 1 500 0a500 500 0 0 1 0 1000z" />
                                        <path fill="#fff" d="M630 1000V613h130l20-151H630v-97c0-43 12-73 75-73h80V157c-14-2-62-6-117-6-115 0-194 70-194 200v111H344v151h130v387h156z" />
                                    </svg>
                                    <span class="ms-3">Facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-light d-flex align-items-center justify-content-center shadow-sm w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 534 544" width="20" height="20">
                                        <path fill="#4285f4" d="M534 278c0-18-2-37-5-55H272v105h147c-6 34-26 64-54 83v68h87c52-48 82-118 82-201z" />
                                        <path fill="#34a853" d="M272 544c74 0 135-24 181-65l-88-68c-25 16-56 26-93 26-71 0-131-48-153-113H29v70c46 92 140 150 243 150z" />
                                        <path fill="#fbbc04" d="M119 324c-11-33-11-70 0-104v-70H29c-39 77-39 168 0 244l90-70z" />
                                        <path fill="#ea4335" d="M272 108c39-1 76 14 105 41l77-78a272 272 0 0 0-425 79l90 70c22-64 82-112 153-112z" />
                                    </svg>
                                    <span class="ms-3">Google</span>
                                </button>
                            </div>
                        </div>
                        <!-- /Login Facebook/Google -->
                        <hr>
                        <!-- Register -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <label for="txtEmail3" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input class="form-control shadow-sm" id="txtEmail3" name="email3" value="" placeholder="" required="">
                                    <div class="invalid-feedback"> Please enter Email. </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-5">
                                    <label for="txtPassword3" class="form-label">Password<span class="text-danger">*</span></label>
                                    <input class="form-control shadow-sm" id="txtPassword3" name="password3" placeholder="" value="" type="password" required="">
                                    <div class="invalid-feedback"> Please enter password. </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-5">
                                    <label for="txtRetypePassword3" class="form-label">Retype password<span class="text-danger">*</span></label>
                                    <input class="form-control shadow-sm" id="txtRetypePassword3" name="retypepassword3" placeholder="" value="" type="password" required="">
                                    <div class="invalid-feedback"> Please enter password. </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mb-6">
                            <input class="form-check-input shadow-sm" type="checkbox" value="" id="chckAgree3" required="">
                            <label class="form-check-label" for="chckAgree3"> I agree to <a href="#" class="hover">terms and policy<span class="text-danger">*</span></a>. </label>
                        </div>
                        <div class="mb-5">
                            <button class="btn btn-primary w-50" id="btnSubmit3">
                                <i class="hicon hicon-profiles"></i>
                                <span>Register</span>
                            </button>
                        </div>
                        <hr>
                        <div> Already have an account? <a href="#mdlLogin" data-bs-toggle="modal">Login</a>
                        </div>
                        <!-- /Register -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Register -->
    <!-- /Header -->
        {{ $slot }}

    <!-- Footer -->
    <footer id="footer" class="bg-body text-body-tertiary pt-14 pb-12" data-bs-theme="dark">
        <div class="container">
            <!-- Brands system -->
            <div class="border-bottom mb-9 pb-5">
                <div class="row" data-cues="fadeIn">
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="./assets/img/logos/l1.png" srcset="./assets/img/logos/l1@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="./assets/img/logos/l2.png" srcset="./assets/img/logos/l2@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="./assets/img/logos/l3.png" srcset="./assets/img/logos/l3@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="./assets/img/logos/l4.png" srcset="./assets/img/logos/l4@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="./assets/img/logos/l5.png" srcset="./assets/img/logos/l5@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="./assets/img/logos/l6.png" srcset="./assets/img/logos/l6@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Brands system -->
            <!-- Footer top -->
            <div class="border-bottom">
                <div class="row" data-cues="fadeIn">
                    <div class="col-12 col-xl-3 col-lg-12 col-md-6">
                        <!-- Brand -->
                        <div class="mb-8">
                            <a href="./index.html" class="d-inline-block">
                                <figure>
                                    <img class="img-fluid" src="./assets/img/logos/footer-light.png" srcset="./assets/img/logos/footer-light@2x.png 2x" alt="">
                                </figure>
                            </a>
                            <p>
                                <em>Sed diam constituam ei, qui erat probo dissentiet ex. Id vim libris volutpat, pri cu errem timeam cotidieque, purto summo has te. An quis eligendi atomorum duo, latine veritus vituperata vim no. Duo errem latine scribentur an.</em>
                                <a href="./about.html" class="text-body link-hover-primary">[+]</a>
                            </p>
                        </div>
                        <!-- /Brand -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Contact Info -->
                        <div class="mb-8">
                            <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Contact Info</h5>
                            <div class="pt-2">
                                <p>
                                    <span>610 Placer Loquen, Paris, France.</span>
                                </p>
                                <p>
                                    <span>+33 321-654-9876 (Ext: 123).</span>
                                </p>
                                <p>
                                    <a href="#" class="text-body link-hover-primary">Booking@example.com</a>
                                </p>
                                <p>
                                    <a href="#" class="text-body link-hover-primary">www.example.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- /Contact Info -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Quick Links -->
                        <div class="mb-8">
                            <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Quick Links</h5>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./about.html">Landmark's Story</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./team.html">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./news.html">News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./contact.html">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./dashboard.html">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./rooms-1.html">Rooms & Suites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./spa-wellness.html">Spa & Wellness</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./restaurant.html">Restaurant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./tours-list.html">Booking tours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="./airpost-pickup.html">Airpost pickup</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Quick Links -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <div class="mb-8">
                            <!-- Mobile App -->
                            <div class="mb-6">
                                <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Get the app</h5>
                                <div class="pt-4">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <figure>
                                                    <img src="./assets/img/icons/i1.svg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <figure>
                                                    <img src="./assets/img/icons/i2.svg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Mobile App -->
                            <!-- Social -->
                            <div class="mb-6">
                                <h5 class="h6 mb-3 text-uppercase ff-sub ls-1">Connect social</h5>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body link-hover-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body link-hover-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body link-hover-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                                <path d="M10 9l5 3l-5 3z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body link-hover-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-pinterest" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8 20l4 -9"></path>
                                                <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body link-hover-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tripadvisor" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                                <path d="M17.5 13.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0"></path>
                                                <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
                                                <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
                                                <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
                                                <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Social -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer top -->
            <!-- Footer Bottom -->
            <div class="mt-9">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>© 2023 Landmark Hotel. All rights reserved.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-start text-md-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-body link-hover-primary" href="#">Privacy Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body link-hover-primary" href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Bottom -->
        </div>
    </footer>
    <!-- Scroll top -->
    <a href="#" class="scroll-top active"><i class="hicon hicon-thin-arrow-up"></i></a>
    <!-- /Scroll top -->
    <!-- /Footer -->
    <!-- Scripts -->
    <script src="assets/js/bundle.min.js"></script>
    <!-- /Scripts -->
    </body>
</html>
