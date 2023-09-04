<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<!-- Mirrored from Landmark.bithemer.com/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 10:37:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Landmark Hotel</title>
    <meta name="description" content="Landmark - Luxury Hotel Bootstrap HTM Template. The Landmark Hotel is a luxury, modern and clean hotel template. It is suitable for building Hotels, Resorts, Hostel, Homestay, websites.">
    <meta name="keywords" content="bootstrap 5, hotel, homstay, resort, gulp, Luxury, website template, html5 template, site template, Bootstrap Template">
    <meta name="author" content="Bithemer">
    <link href="assets/img/Landmark/landmark.ico" rel="shortcut icon">
    <link href="assets/css/bundle.min.css" rel="stylesheet">
</head>
<!-- /Head -->
<!-- Set Body to full screen when Preloader is showing. -->

<body class="vh-100 vw-100 overflow-hidden">
    <!-- Header -->
    <!-- Preloader -->
    <div class="position-fixed top-0 bottom-0 bg-white vw-100 z-1100 d-flex align-items-center justify-content-center" id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden"></span>
        </div>
    </div>
    <!-- /Preloader -->
    <!-- Header -->
    <header id="header" class="header transition-base fixed-top z-1030  " data-bs-theme="dark">
        <nav class="navbar navbar-expand-xl fw-medium pt-5 pb-5 fs-6">
            <div class="container justify-content-end">
                <!-- Brand -->
                <a class="navbar-brand flex-grow-1" id="brandHeader" href="index-2.html">
                    <img src="assets/img/logos/logo-light.png" srcset="./assets/img/Landmark/landmarkhotel_white_logo.png 2x" class="logo" alt="">
                    <h1 class="d-none">Landmark Africa</h1>
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
                                <a class="nav-link dropdown-toggle-hover text-uppercase active" href="index-2.html" data-bs-display="static">
                                    <span>Home</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@rooms" href="/laravel_new/public/rooms" data-bs-display="static">
                                    <span>Rooms</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                <!-- <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                    <li><a class="dropdown-item @@rooms1" href="rooms-1.html">Rome 1</a></li>
                                    <li><a class="dropdown-item @@rooms2" href="rooms-2.html">Rome 2</a></li>
                                    <li><a class="dropdown-item @@rooms3" href="rooms-3.html">Rome 3</a></li>
                                    <li><a class="dropdown-item @@singleRooms1" href="single-room-1.html">Single Room 1</a></li>
                                    <li><a class="dropdown-item @@singleRooms2" href="single-room-2.html">Single Room 2</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@tours" href="tour-list.html" data-bs-display="static">
                                    <span>Services</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                    <li><a class="dropdown-item @@tourCategories" href="tour-categories.html">Services</a></li>
                                    <li><a class="dropdown-item @@tourList" href="tour-list.html">Service list</a>
                                    </li>
                                    <li><a class="dropdown-item @@singleTour" href="/laravel_new/public/contact">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link text-uppercase @@gallery" href="/laravel_new/public/contact">About</a></li>
                            <li class="nav-item dropdown">
                            <div class="mt-2 mt-xl-0 order-0 order-xl-1">
                                <a href="/laravel_new/public/reservation" class="btn btn-primary">
                                    <i class="hicon hicon-24hour-room-service"></i>
                                    <span>Reservation</span>
                                </a>
                            </div>
                                <!-- <div class="dropdown-menu mega-menu dropdown-menu-end mt-xl-6" data-bs-popper="static">
                                    <div class="d-xl-flex flex-nowrap p-0 p-xl-3">
                                        <ul class="list-unstyled row">
                                            <li class="col-12 col-xl-4">
                                                <span class="mega-menu-title fw-semibold">Extra Services</span>
                                                <ul class="list-unstyled ms-4 ms-xl-0">
                                                    <li><a class="mega-menu-item @@tourBooking" href="tour-list.html">Tour booking</a></li>
                                                    <li><a class="mega-menu-item @@meetingsEvents" href="meetings-events.html">Meetings & events</a></li>
                                                    <li><a class="mega-menu-item @@restaurant" href="restaurant.html">Restaurant & bar</a></li>
                                                    <li><a class="mega-menu-item @@spaWellness" href="spa-wellness.html">Spa & wellness</a></li>
                                                    <li><a class="mega-menu-item @@airportPickup" href="airport-pickup.html">Airport pickup</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-12 col-xl-4">
                                                <span class="mega-menu-title fw-semibold">My Account</span>
                                                <ul class="list-unstyled ms-4 ms-xl-0">
                                                    <li><a class="mega-menu-item @@dashboard" href="dashboard.html">Dashboard</a></li>
                                                    <li><a class="mega-menu-item @@booking" href="booking.html">Booking</a></li>
                                                    <li><a class="mega-menu-item @@profile" href="profile.html">Profile</a></li>
                                                    <li><a class="mega-menu-item @@register" href="register.html">Register</a></li>
                                                    <li><a class="mega-menu-item @@login" href="login.html">Login</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-12 col-xl-4">
                                                <span class="mega-menu-title fw-semibold">Other pages</span>
                                                <ul class="list-unstyled ms-4 ms-xl-0">
                                                    <li><a class="mega-menu-item @@about" href="about.html">About</a></li>
                                                    <li><a class="mega-menu-item @@news" href="news.html">News</a>
                                                    </li>
                                                    <li><a class="mega-menu-item @@contact" href="contact.html">Contact</a></li>
                                                    <li><a class="mega-menu-item @@comingSoon" href="coming-soon.html">Coming soon</a></li>
                                                    <li><a class="mega-menu-item @@404" href="404.html">404</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#ocRightInfo">
                                    <i class="hicon hicon-bold hicon-instant"></i>
                                </a>
                            </li> -->
                        </ul>
                        <!-- /Navbar nav -->
                        <!-- Sub Links -->
                       
                        <!-- /Sub Links -->
                    </div>
                </div>
                <!-- /offcanvas Navbar -->
                <!-- Account link -->
                <!-- <div class="ms-0 ms-xl-4">
                    <a href="#mdlLogin" data-bs-toggle="modal">
                        <img src="assets/img/avatars/na.png" srcset="./assets/img/avatars/na@2x.png 2x" class="rounded-circle bg-primary-50" width="36" height="36" alt="">
                    </a>
                </div> -->
                <!-- /Account link -->
                <!-- Nav toggler -->
                <!-- <button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
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
                <a href="index-2.html">
                    <img class="logo-light" src="assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" alt="Landmark Hotel" title="Landmark Hotel">
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
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="about.html">About Landmark</a></li>
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
 
                       
    <!-- /Language modal -->
    <!-- Currency modal -->
    <!-- /Currency modal -->
    <!-- Modal Login -->
    <div class="modal fade" id="mdlLogin" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdlLoginTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlLoginTitle">Login to Landmark Hotel</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" novalidate="" action="https://bilury.bithemer.com/dashboard.html">
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
                    <form class="needs-validation" method="post" novalidate="" action="https://bilury.bithemer.com/new-password.html">
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
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlRegisterTitle">Register for Landmark Hotel</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" novalidate="" action="https://bilury.bithemer.com/login.html">
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
    <main>
        <!-- Page title -->
        <section id="pageTitle" class="pt-24">
            <div class="container">
                <div class="row g-0 align-items-end">
                    <div class="col-12 col-xl-6">
                        <h1 class="mb-8 display-5 text-uppercase ff-heading fw-semibold">Reservation</h1>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="pb-8 ps-xl-8">
                            <div class="position-relative m-4">
                                <div class="progress bg-dark-subtle" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                    <div class="progress-bar" style="width: 0%"></div>
                                </div>
                                <a href="javascript:void(0);" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-square btn-primary rounded-circle">1</a>
                                <a href="javascript:void(0);" class="position-absolute top-0 start-33 translate-middle btn btn-sm btn-square btn-secondary rounded-circle">2</a>
                                <a href="javascript:void(0);" class="position-absolute top-0 start-66 translate-middle btn btn-sm btn-square btn-secondary rounded-circle">3</a>
                                <a href="javascript:void(0);" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-square btn-secondary rounded-circle">4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Page title -->
        <!-- Reservation -->
        <section id="reservation" class="pt-10 pb-10">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn">
                        <!-- Check date -->
                        <div class="mb-6">
                            <div class="row g-2">
                                <div class="col-12 col-lg-5">
                                    <!-- Input date -->
                                    <div class="mb-3">
                                        <div class="control-icon">
                                            <label class="hicon hicon-menu-calendar cursor-pointer" for="txtCheckDate"></label>
                                            <input id="txtCheckDate" type="text" class="check-date form-control shadow-sm cursor-pointer" value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <!-- /Input date -->
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="row g-2">
                                        <div class="col-12 col-lg-7">
                                            <!-- Input number of guests -->
                                            <div class="mb-3">
                                                <div class="control-icon">
                                                    <label class="hicon hicon-travelers cursor-pointer" for="btnCheckGuest"></label>
                                                    <div class="dropdown" data-total-guest="">
                                                        <button class="form-select w-100 text-start shadow-sm" id="btnCheckGuest" data-bs-auto-close="outside" type="button" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="text-nowrap">
                                                                <span data-total-adults=""></span>, <span data-total-children=""></span>
                                                            </span>
                                                        </button>
                                                        <ul class="dropdown-menu animate slideIn p-4">
                                                            <li>
                                                                <div class="mb-3">
                                                                    <label for="txtCheckAdults" class="form-label">Adults</label>
                                                                    <div class="input-group shadow-sm">
                                                                        <button class="btn btn-outline-light" type="button" data-minus-adults="">
                                                                            <i class="hicon hicon-minus-thin small"></i>
                                                                        </button>
                                                                        <input type="text" class="form-control text-center" placeholder="Adults" value="1" aria-label="Adults" id="txtCheckAdults" data-adults-max="10" data-input-adults="">
                                                                        <button class="btn btn-outline-light" type="button" data-plus-adults="">
                                                                            <i class="hicon hicon-plus-thin small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="mb-3">
                                                                    <label for="txtCheckChildren" class="form-label">Children</label>
                                                                    <div class="input-group shadow-sm">
                                                                        <button class="btn btn-outline-light" type="button" data-minus-children="">
                                                                            <i class="hicon hicon-minus-thin small"></i>
                                                                        </button>
                                                                        <input type="text" class="form-control text-center" placeholder="Children" value="0" aria-label="Children" id="txtCheckChildren" data-children-max="20" data-input-children="">
                                                                        <button class="btn btn-outline-light" type="button" data-plus-children="">
                                                                            <i class="hicon hicon-plus-thin small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Input number of guests -->
                                        </div>
                                        <div class="col-12 col-lg-5">
                                            <!-- Button -->
                                            <div class="mb-3">
                                                <a href="reservation.html" class="btn btn-primary w-100 shadow-sm">
                                                    <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                                    <span>Check Rooms</span>
                                                </a>
                                            </div>
                                            <!-- /Button -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Check date -->
                        <div class="mb-8">
                            <!-- Room -->
                            <div class="card card-selected mb-5 shadow-sm">
                                <div class="card-body pb-2">
                                    <!-- Room name -->
                                    <h3 class="card-title h4">
                                        <a href="single-room-1.html" target="_blank" class="text-dark link-hover-primary text-uppercase ff-sub ls-1">Mini King Suite</a>
                                    </h3>
                                    <!-- /Room name -->
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-4 col-md-6">
                                            <!-- Room image -->
                                            <div class="pe-0 pe-md-5 mb-5">
                                                <a href="single-room-1.html">
                                                    <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                        <img src="assets/img/rooms/r22.jpg" srcset="./assets/img/rooms/r22@2x.jpg 2x" class="img-fluid w-100" alt="">
                                                        <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- /Room image -->
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                            <!-- Room info -->
                                            <div class="small">
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Featured Amenities</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6"> 1 King Bed/2 Single Beds </div>
                                                        <div class="col-12 col-md-6"> Area: 30 m²/323 ft² </div>
                                                        <div class="col-12 col-md-6"> 2 Adults - 1 Children </div>
                                                        <div class="col-12 col-md-6"> No Smoking </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Price includes</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Free Cancellation</span>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Breakfast Included</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mt-3">
                                                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkExtraBed2">
                                                        <label class="form-check-label" for="chkExtraBed2">Extra bed (<sup>$</sup>15.00)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Room info -->
                                        </div>
                                        <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                            <!-- Room price -->
                                            <div class="mb-5">
                                                <div class="mb-1">
                                                    <strong class="fw-semibold fs-4"><sup>$</sup>95.00</strong><small>/night</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <strong class="fw-semibold text-secondary small me-3"><del><sup>$</sup>110.00</del></strong>
                                                    <span class="badge bg-danger">-16%</span>
                                                </div>
                                            </div>
                                            <!-- /Room price -->
                                            <!-- Select/Remove-->
                                            <div class="mb-5">
                                                <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm" data-dselect-position="end">
                                                    <option>Quantity</option>
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <a class="btn btn-sm btn-outline-light bg-light d-block shadow-sm" href="javascript:;">
                                                    <i class="hicon hicon-80 hicon-line-close"></i>
                                                    <span>Remove</span>
                                                </a>
                                            </div>
                                            <!-- /Select/Remove-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Room -->
                            <!-- Room -->
                            <div class="card card-selected mb-5 shadow-sm">
                                <div class="card-body pb-2">
                                    <!-- Room name -->
                                    <h3 class="card-title h4">
                                        <a href="single-room-1.html" target="_blank" class="text-dark link-hover-primary text-uppercase ff-sub ls-1">Beach House</a>
                                    </h3>
                                    <!-- /Room name -->
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-4 col-md-6">
                                            <!-- Room image -->
                                            <div class="pe-0 pe-md-5 mb-5">
                                                <a href="single-room-1.html" target="_blank">
                                                    <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                        <img src="assets/img/rooms/r23.jpg" srcset="./assets/img/rooms/r23@2x.jpg 2x" class="img-fluid w-100" alt="">
                                                        <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- /Room image -->
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                            <!-- Room info -->
                                            <div class="small">
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Featured Amenities</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6"> 1 King Bed/3 Single Beds </div>
                                                        <div class="col-12 col-md-6"> Area: 28 m²/323 ft² </div>
                                                        <div class="col-12 col-md-6"> 2 Adults - 2 Children </div>
                                                        <div class="col-12 col-md-6"> No Smoking </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Price includes</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Free Cancellation</span>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Breakfast Included</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mt-3">
                                                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkExtraBed1" checked>
                                                        <label class="form-check-label" for="chkExtraBed1">Extra bed (<sup>$</sup>15.00)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Room info -->
                                        </div>
                                        <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                            <!-- Room price -->
                                            <div class="mb-5">
                                                <div class="mb-1">
                                                    <strong class="fw-semibold fs-4"><sup>#</sup>105000.00</strong><small>/night</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <strong class="fw-semibold text-secondary small me-3"><del><sup>$</sup>120.00</del></strong>
                                                    <span class="badge bg-danger">-15%</span>
                                                </div>
                                            </div>
                                            <!-- /Room price -->
                                            <!-- Select/Remove-->
                                            <div class="mb-5">
                                                <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm" data-dselect-position="end">
                                                    <option>Quantity</option>
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <a class="btn btn-sm btn-outline-light bg-light d-block shadow-sm" href="javascript:;">
                                                    <i class="hicon hicon-80 hicon-line-close"></i>
                                                    <span>Remove</span>
                                                </a>
                                            </div>
                                            <!-- /Select/Remove-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Room -->
                            <!-- Room -->
                            <div class="card mb-5 shadow-sm">
                                <div class="card-body pb-2">
                                    <!-- Room name -->
                                    <h3 class="card-title h4">
                                        <a href="single-room-1.html" target="_blank" class="text-dark link-hover-primary text-uppercase ff-sub ls-1">Deluxe Room</a>
                                    </h3>
                                    <!-- /Room name -->
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-4 col-md-6">
                                            <!-- Room image -->
                                            <div class="pe-0 pe-md-5 mb-5">
                                                <a href="single-room-1.html" target="_blank">
                                                    <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                        <img src="assets/img/rooms/r24.jpg" srcset="./assets/img/rooms/r24@2x.jpg 2x" class="img-fluid w-100" alt="">
                                                        <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- /Room image -->
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                            <!-- Room info -->
                                            <div class="small">
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Featured Amenities</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6"> 1 King Bed/3 Single Beds </div>
                                                        <div class="col-12 col-md-6"> Area: 32 m²/323 ft² </div>
                                                        <div class="col-12 col-md-6"> 2 Adults - 2 Children </div>
                                                        <div class="col-12 col-md-6"> No Smoking </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Price includes</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Free Cancellation</span>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Breakfast Included</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mt-3">
                                                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkExtraBed3">
                                                        <label class="form-check-label" for="chkExtraBed3">Extra bed (<sup>$</sup>15.00)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Room info -->
                                        </div>
                                        <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                            <!-- Room price -->
                                            <div class="mb-5">
                                                <div class="mb-1">
                                                    <strong class="fw-semibold fs-4"><sup>#</sup>89000.00</strong><small>/night</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <strong class="fw-semibold text-secondary small me-3"><del><sup>$</sup>105.00</del></strong>
                                                    <span class="badge bg-danger">-12%</span>
                                                </div>
                                            </div>
                                            <!-- /Room price -->
                                            <!-- Select/Remove-->
                                            <div class="mb-5">
                                                <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm" data-dselect-position="end">
                                                    <option>Quantity</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <a class="btn btn-sm btn-secondary d-block shadow-sm" href="javascript:;">
                                                    <i class="hicon hicon-80 hicon-check-valid-state"></i>
                                                    <span>Select</span>
                                                </a>
                                            </div>
                                            <!-- /Select/Remove-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Room -->
                            <!-- Room -->
                            <div class="card mb-5 shadow-sm">
                                <div class="card-body pb-2">
                                    <!-- Room name -->
                                    <h3 class="card-title h4">
                                        <a href="single-room-1.html" target="_blank" class="text-dark link-hover-primary text-uppercase ff-sub ls-1">Family Suite</a>
                                    </h3>
                                    <!-- /Room name -->
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-4 col-md-6">
                                            <!-- Room image -->
                                            <div class="pe-0 pe-md-5 mb-5">
                                                <a href="single-room-1.html" target="_blank">
                                                    <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                        <img src="assets/img/rooms/r25.jpg" srcset="./assets/img/rooms/r25@2x.jpg 2x" class="img-fluid w-100" alt="">
                                                        <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- /Room image -->
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                            <!-- Room info -->
                                            <div class="small">
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Featured Amenities</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6"> 1 King Bed/3 Single Beds </div>
                                                        <div class="col-12 col-md-6"> Area: 35 m²/323 ft² </div>
                                                        <div class="col-12 col-md-6"> 2 Adults - 2 Children </div>
                                                        <div class="col-12 col-md-6"> No Smoking </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <h4 class="mb-1 h6 fw-semibold">Price includes</h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Free Cancellation</span>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <span class="text-success fw-medium">Breakfast Included</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mt-3">
                                                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="chkExtraBed4">
                                                        <label class="form-check-label" for="chkExtraBed4">Extra bed (<sup>$</sup>15.00)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Room info -->
                                        </div>
                                        <div class="col-12 col-lg-2 col-md-6 order-3 order-lg-3 order-md-2">
                                            <!-- Room price -->
                                            <div class="mb-5">
                                                <div class="mb-1">
                                                    <strong class="fw-semibold fs-4"><sup>$</sup>99.00</strong><small>/night</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <strong class="fw-semibold text-secondary small me-3"><del><sup>$</sup>110.00</del></strong>
                                                    <span class="badge bg-danger">-14%</span>
                                                </div>
                                            </div>
                                            <!-- /Room price -->
                                            <!-- Select/Remove-->
                                            <div class="mb-5">
                                                <select class="form-select dselect mb-3 shadow-sm" data-dselect-size="sm" data-dselect-position="end">
                                                    <option>Quantity</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <a class="btn btn-sm btn-secondary d-block shadow-sm" href="javascript:;">
                                                    <i class="hicon hicon-80 hicon-check-valid-state"></i>
                                                    <span>Select</span>
                                                </a>
                                            </div>
                                            <!-- /Select/Remove-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Room -->
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <!-- Booking details -->
                        <div class="sticky-top sticky-top-120 mb-10" data-cue="fadeIn">
                            <div class="card shadow-sm" data-aos-delay="300" data-aos="fade-up">
                                <div class="card-body small">
                                    <h2 class="h4 text-uppercase ff-sub ls-1">Booking details</h2>
                                    <hr>
                                    <!-- Book Date -->
                                    <div>
                                        <div>
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Check-In: <strong>19 Jul 2022</strong></span>
                                        </div>
                                        <div>
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Check-Out: <strong>20 Jul 2022</strong></span>
                                        </div>
                                        <em>(Duration of stay: <strong>1 Night</strong>)</em>
                                        <div class="mt-3">
                                            <span>
                                                <i class="hicon hicon-adults-line"></i><span>Adults: </span><strong>1</strong>
                                            </span>
                                            <span>-</span>
                                            <span>
                                                <i class="hicon hicon-child-line"></i><span>Children: </span><strong>0</strong>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Book Date -->
                                    <hr>
                                    <!-- Room list -->
                                    <div>
                                        <!-- Room Item -->
                                        <div class="mb-3">
                                            <h3 class="h6 mb-0 d-flex align-items-center">
                                                <span>Classic Partial View</span>
                                                <a href="#" class="text-danger fs-6 ms-2"><i class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
                                            </h3>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Quantity <strong>1</strong>: </span>
                                                <strong class="fw-semibold fs-6"><sup>$</sup>169.00</strong>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Extra bed: </span>
                                                <strong class="fw-semibold fs-6"><sup>$</sup>15.00</strong>
                                            </div>
                                        </div>
                                        <!-- Room Item -->
                                        <!-- Room Item -->
                                        <div class="mb-3">
                                            <h3 class="h6 mb-0 d-flex align-items-center">
                                                <span>Deluxe Double or Twin</span>
                                                <a href="#" class="text-danger fs-6 ms-2"><i class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
                                            </h3>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Quantity <strong>2</strong>: </span>
                                                <strong class="fw-semibold fs-6"><sup>$</sup>269.00</strong>
                                            </div>
                                        </div>
                                        <!-- Room Item -->
                                    </div>
                                    <!-- Room list -->
                                    <hr>
                                    <!-- Total Amount-->
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="h4 mb-0">Total Amount:</h3>
                                            <strong class="fw-bold fs-4"><sup>$</sup>699.00</strong>
                                        </div>
                                        <p><em>*All taxes and fees included</em></p>
                                    </div>
                                    <!-- Total Amount-->
                                    <hr>
                                    <!-- Next step -->
                                    <div class="text-end pt-2 pb-2">
                                        <a class="btn btn-primary" href="your-info.html">
                                            <span>Next step</span>
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                    <!-- Next step -->
                                </div>
                            </div>
                        </div>
                        <!-- /Booking details -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Reservation -->
    </main>
    <!-- Footer -->
    <footer id="footer" class="bg-body text-body-tertiary pt-14 pb-12" data-bs-theme="dark">
        <div class="container">
            <!-- Brands system -->
            <div class="border-bottom mb-9 pb-5">
                <div class="row" data-cues="fadeIn">
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l1.png" srcset="./assets/img/landmark/landmarkhotel_logo.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l2.png" srcset="./assets/img/landmark/landmarkhotel_logo.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l3.png" srcset="./assets/img/landmark/landmarkhotel_logo.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l4.png" srcset="./assets/img/landmark/landmarkhotel_logo.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l5.png" srcset="./assets/img/landmark/landmarkhotel_logo.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l6.png" srcset="./assets/img/landmark/landmarkhotel_logo.png 2x" alt="">
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
                            <a href="index-2.html" class="d-inline-block">
                                <figure>
                                    <img class="img-fluid" src="assets/img/logos/footer-light.png" srcset="./assets/img/landmark/landmarkhotel_white_logo.png 2x" alt="">
                                </figure>
                            </a>
                            <p>
                                <em>Sed diam constituam ei, qui erat probo dissentiet ex. Id vim libris volutpat, pri cu errem timeam cotidieque, purto summo has te. An quis eligendi atomorum duo, latine veritus vituperata vim no. Duo errem latine scribentur an.</em>
                                <a href="about.html" class="text-body link-hover-primary">[+]</a>
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
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="about.html">About Landmark</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="team.html">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="news.html">News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="contact.html">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="dashboard.html">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="rooms-1.html">Rooms & Suites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="spa-wellness.html">Spa & Wellness</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="restaurant.html">Restaurant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="tours-list.html">Booking tours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="airpost-pickup.html">Airpost pickup</a>
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
                                                    <img src="assets/img/icons/i1.svg" class="img-fluid" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <figure>
                                                    <img src="assets/img/icons/i2.svg" class="img-fluid" alt="">
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


<!-- Mirrored from landmark.bithemer.com/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 10:37:45 GMT -->
</html>