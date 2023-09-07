<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<!-- Mirrored from bilury.bithemer.com/your-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 10:37:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation - Bilury - Luxury Hotel Bootstrap HTM Template</title>
    <meta name="description" content="Bilury - Luxury Hotel Bootstrap HTM Template. The Bilury is a luxury, modern and clean hotel template. It is suitable for building Hotels, Resorts, Hostel, Homestay, websites.">
    <meta name="keywords" content="bootstrap 5, hotel, homstay, resort, gulp, Luxury, website template, html5 template, site template, Bootstrap Template">
    <meta name="author" content="Bithemer">
    <link href="assets/img/logos/favicon.png" rel="shortcut icon">
    <link href="assets/css/bundle.min.css" rel="stylesheet">
</head>
<!-- Head -->
<!-- Set Body to full screen when Preloader is showing ('vh-100 vw-100 overflow-hidden'). -->
<!-- Set Body background color to 'bg-light' -->

<body class="vh-100 vw-100 overflow-hidden bg-light">
    <!-- Header -->
    <!-- Preloader -->
    <div class="position-fixed top-0 bottom-0 bg-white vw-100 z-1100 d-flex align-items-center justify-content-center" id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- /Preloader -->
    <!-- Header -->
    <header id="header" class="header transition-base fixed-top z-1030 shadow-sm bg-white" data-bs-theme="light">
        <nav class="navbar navbar-expand-xl fw-medium pt-5 pb-5 fs-6">
            <div class="container justify-content-end">
                <!-- Brand -->
                <a class="navbar-brand flex-grow-1" id="brandHeader" href="index-2.html">
                    <img src="assets/img/logos/logo.png" srcset="./assets/img/logos/logo@2x.png 2x" class="logo" alt="">
                    <h1 class="d-none">Bilury</h1>
                </a>
                <!-- /Brand -->
                <!-- offcanvas Navbar -->
                <div class="offcanvas offcanvas-navbar offcanvas-end border-start-0" tabindex="-1" id="offcanvasNavbar">
                    <!-- Offcanvas header -->
                    <div class="offcanvas-header border-bottom">
                        <h3 class="offcanvas-title text-uppercase ff-heading" id="bdSidebarOffcanvasLabel">Bilury Hotel</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- /Offcanvas header -->
                    <div class="offcanvas-body justify-content-end">
                        <!-- Navbar nav-->
                        <ul class="navbar-nav align-items-xl-center me-xl-3 mb-3 mb-xl-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@home" href="index-2.html" data-bs-display="static">
                                    <span>Home</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                    <li><a class="dropdown-item @@index" href="index-2.html">Home 1</a></li>
                                    <li><a class="dropdown-item @@home2" href="home-2.html">Home 2</a></li>
                                    <li><a class="dropdown-item @@home3" href="home-3.html">Home 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase active" href="rooms-1.html" data-bs-display="static">
                                    <span>Rooms & Suites</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                    <li><a class="dropdown-item active1" href="rooms-1.html">Rome 1</a></li>
                                    <li><a class="dropdown-item active2" href="rooms-2.html">Rome 2</a></li>
                                    <li><a class="dropdown-item active3" href="rooms-3.html">Rome 3</a></li>
                                    <li><a class="dropdown-item @@singleRooms1" href="single-room-1.html">Single Room 1</a></li>
                                    <li><a class="dropdown-item @@singleRooms2" href="single-room-2.html">Single Room 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@tours" href="tour-list.html" data-bs-display="static">
                                    <span>Tours</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                <ul class="dropdown-menu mt-xl-6" data-bs-popper="static">
                                    <li><a class="dropdown-item @@tourCategories" href="tour-categories.html">Tour categories</a></li>
                                    <li><a class="dropdown-item @@tourList" href="tour-list.html">Tour list</a>
                                    </li>
                                    <li><a class="dropdown-item @@singleTour" href="single-tour.html">Single tour</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link text-uppercase @@gallery" href="gallery.html">Gallery</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@pages" href="javascript:void(0);" data-bs-display="static">
                                    <span>Pages</span>
                                    <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i>
                                </a>
                                <div class="dropdown-menu mega-menu dropdown-menu-end mt-xl-6" data-bs-popper="static">
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
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#ocRightInfo">
                                    <i class="hicon hicon-bold hicon-instant"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /Navbar nav -->
                        <!-- Sub Links -->
                        <div class="d-flex flex-column flex-xl-row align-items-xl-center small">
                            <!-- Language & Currency -->
                            <div class="mt-5 mt-xl-0 order-1 order-xl-0">
                                <ul class="nav flex-row me-xl-7 mb-3 mb-xl-0">
                                    <li class="nav-item me-4">
                                        <a class="navbar-text d-flex align-items-center" data-bs-toggle="modal" href="#mdlLanguage">
                                            <img src="assets/img/flags/en.svg" height="14" alt="" class="me-1">
                                            <span>EN</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-text d-flex" data-bs-toggle="modal" href="#mdlCurrency">
                                            <span>USD</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Language & Currency -->
                            <!-- Reservation -->
                            <div class="mt-2 mt-xl-0 order-0 order-xl-1">
                                <a href="reservation.html" class="btn btn-primary">
                                    <i class="hicon hicon-24hour-room-service"></i>
                                    <span>Reservation</span>
                                </a>
                            </div>
                            <!-- /Reservation -->
                        </div>
                        <!-- /Sub Links -->
                    </div>
                </div>
                <!-- /offcanvas Navbar -->
                <!-- Account link -->
                <div class="ms-0 ms-xl-4">
                    <a href="#mdlLogin" data-bs-toggle="modal">
                        <img src="assets/img/avatars/na.png" srcset="./assets/img/avatars/na@2x.png 2x" class="rounded-circle bg-primary-50" width="36" height="36" alt="">
                    </a>
                </div>
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
                <a href="index-2.html">
                    <img class="logo-light" src="assets/img/logos/logo-light.png" srcset="./assets/img/logos/logo-light@2x.png 2x" alt="Bilury Hotel" title="Bilury Hotel">
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
                    <li><a class="text-body link-hover-primary d-inline-block mb-2" href="about.html">Bilury's Story</a></li>
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
                                <img src="assets/img/flags/en.svg" height="16" alt="" class="me-2">
                                <span class="me-1">English</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/fr.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Français</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/es.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Español</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/de.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Deutsch</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/it.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Italiano</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/nl.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Nederlands</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/pt.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Português</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/ru.svg" height="16" alt="" class="me-2">
                                <span class="me-1">Русский</span>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-lg-4">
                            <a class="nav-link text-body link-hover-primary d-flex align-items-center ps-0 ps-0" href="#">
                                <img src="assets/img/flags/cn.svg" height="16" alt="" class="me-2">
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
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlLoginTitle">Login to Bilury</h4>
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
                    <h4 class="modal-title text-uppercase ls-1 ff-sub" id="mdlRegisterTitle">Register for Bilury</h4>
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
    <!-- Header -->
    <main>
        <!-- Page title -->
        <section id="pageTitle" class="pt-22">
            <div class="container">
                <div class="row g-0 align-items-end">
                    <div class="col-12 col-xl-6">
                        <h1 class="mb-8 display-5 text-uppercase ff-heading fw-semibold">Reservation</h1>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="pb-8 ps-xl-8">
                            <div class="position-relative m-4">
                                <div class="progress bg-dark-subtle" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                    <div class="progress-bar" style="width: 33.333333%"></div>
                                </div>
                                <a href="reservation.html" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-square btn-primary rounded-circle">1</a>
                                <a href="javascript:void(0);" class="position-absolute top-0 start-33 translate-middle btn btn-sm btn-square btn-primary rounded-circle">2</a>
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
        <section id="reservation" class="pt-10 pb-14">
            <div class="container">
                <div class="row g-0 g-lg-8" data-cue="fadeIn">
                    <div class="col-12 col-xl-6 col-lg-5 pb-8 pb-lg-0">
                        <!-- Booking details -->
                        <div class="card bg-white shadow-sm h-100 card-selected" data-aos-delay="300" data-aos="fade-up">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="h4 mb-0 text-uppercase ff-sub ls-1">1. Booking details</h2>
                                    <a href="reservation.html" class="fw-semibold text-secondary link-hover-primary d-inline-block">
                                        <i class="hicon hicon-edit"></i>
                                        <span>Edit</span>
                                    </a>
                                </div>
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
                                            <span>Imperial Suite Balcony</span>
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
                            </div>
                        </div>
                        <!-- /Booking details -->
                    </div>
                    <div class="col-12 col-xl-6 col-lg-7">
                        <!-- Your Information -->
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <form class="needs-validation h-100" method="post" action="https://bilury.bithemer.com/payment.html" novalidate="">
                                    <!-- Heading -->
                                    <h2 class="h4 mb-0 text-uppercase ff-sub ls-1">2. Your information</h2>
                                    <hr>
                                    <!-- /Heading -->
                                    <!-- Information -->
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourFullname">Full Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control shadow-sm" id="txtYourFullname" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourEmail">Email<span class="text-danger">*</span></label>
                                                <input type="email" class="form-control shadow-sm" id="txtYourEmail" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="selYourCountry">Country<span class="text-danger">*</span></label>
                                                <select class="form-select dselect shadow-sm" id="selYourCountry" data-dselect-search="true" required="">
                                                    <option value=""> Select </option>
                                                    <option value="AF"> Afghanistan (+93) </option>
                                                    <option value="AX"> Åland Islands (+358) </option>
                                                    <option value="AL"> Albania (+355) </option>
                                                    <option value="DZ"> Algeria (+213) </option>
                                                    <option value="AS"> American Samoa (+1) </option>
                                                    <option value="AD"> Andorra (+376) </option>
                                                    <option value="AO"> Angola (+244) </option>
                                                    <option value="AI"> Anguilla (+1) </option>
                                                    <option value="AG"> Antigua and Barbuda (+1) </option>
                                                    <option value="AR"> Argentina (+54) </option>
                                                    <option value="AM"> Armenia (+374) </option>
                                                    <option value="AW"> Aruba (+297) </option>
                                                    <option value="AU"> Australia (+61) </option>
                                                    <option value="AT"> Austria (+43) </option>
                                                    <option value="AZ"> Azerbaijan (+994) </option>
                                                    <option value="BS"> Bahamas (+1) </option>
                                                    <option value="BH"> Bahrain (+973) </option>
                                                    <option value="BD"> Bangladesh (+880) </option>
                                                    <option value="BB"> Barbados (+1) </option>
                                                    <option value="BY"> Belarus (+375) </option>
                                                    <option value="BE"> Belgium (+32) </option>
                                                    <option value="BZ"> Belize (+501) </option>
                                                    <option value="BJ"> Benin (+229) </option>
                                                    <option value="BM"> Bermuda (+1) </option>
                                                    <option value="BT"> Bhutan (+975) </option>
                                                    <option value="BO"> Bolivia (+591) </option>
                                                    <option value="BQ"> Bonaire (+599) </option>
                                                    <option value="BA"> Bosnia and Herzegovina (+387) </option>
                                                    <option value="BW"> Botswana (+267) </option>
                                                    <option value="BR"> Brazil (+55) </option>
                                                    <option value="IO"> British Indian Ocean Territory (+246) </option>
                                                    <option value="VG"> British Virgin Islands (+1) </option>
                                                    <option value="BN"> Brunei (+673) </option>
                                                    <option value="BG"> Bulgaria (+359) </option>
                                                    <option value="BF"> Burkina Faso (+226) </option>
                                                    <option value="BI"> Burundi (+257) </option>
                                                    <option value="KH"> Cambodia (+855) </option>
                                                    <option value="CM"> Cameroon (+237) </option>
                                                    <option value="CA"> Canada (+1) </option>
                                                    <option value="CV"> Cape Verde (+238) </option>
                                                    <option value="KY"> Cayman Islands (+1) </option>
                                                    <option value="CF"> Central African Republic (+236) </option>
                                                    <option value="TD"> Chad (+235) </option>
                                                    <option value="CL"> Chile (+56) </option>
                                                    <option value="CN"> China (+86) </option>
                                                    <option value="CX"> Christmas Island (+61) </option>
                                                    <option value="CC"> Cocos Islands (+61) </option>
                                                    <option value="CO"> Colombia (+57) </option>
                                                    <option value="KM"> Comoros (+269) </option>
                                                    <option value="CD"> Congo-Brazzaville (+243) </option>
                                                    <option value="CK"> Cook Islands (+682) </option>
                                                    <option value="CR"> Costa Rica (+506) </option>
                                                    <option value="CI"> Côte d'Ivoire (+225) </option>
                                                    <option value="HR"> Croatia (+385) </option>
                                                    <option value="CW"> Curaçao (+599) </option>
                                                    <option value="CY"> Cyprus (+357) </option>
                                                    <option value="CZ"> Czech Republic (+420) </option>
                                                    <option value="DK"> Denmark (+45) </option>
                                                    <option value="DJ"> Djibouti (+253) </option>
                                                    <option value="DM"> Dominica (+1) </option>
                                                    <option value="DO"> Dominican Republic (+1) </option>
                                                    <option value="EC"> Ecuador (+593) </option>
                                                    <option value="EG"> Egypt (+20) </option>
                                                    <option value="SV"> El Salvador (+503) </option>
                                                    <option value="GQ"> Equatorial Guinea (+240) </option>
                                                    <option value="ER"> Eritrea (+291) </option>
                                                    <option value="EE"> Estonia (+372) </option>
                                                    <option value="ET"> Ethiopia (+251) </option>
                                                    <option value="FK"> Falkland Islands (+500) </option>
                                                    <option value="FO"> Faroe Islands (+298) </option>
                                                    <option value="FJ"> Fiji (+679) </option>
                                                    <option value="FI"> Finland (+358) </option>
                                                    <option value="FR"> France (+33) </option>
                                                    <option value="GF"> French Guiana (+594) </option>
                                                    <option value="PF"> French Polynesia (+689) </option>
                                                    <option value="GA"> Gabon (+241) </option>
                                                    <option value="GM"> Gambia (+220) </option>
                                                    <option value="GE"> Georgia (+995) </option>
                                                    <option value="DE"> Germany (+49) </option>
                                                    <option value="GH"> Ghana (+233) </option>
                                                    <option value="GI"> Gibraltar (+350) </option>
                                                    <option value="GR"> Greece (+30) </option>
                                                    <option value="GL"> Greenland (+299) </option>
                                                    <option value="GD"> Grenada (+1) </option>
                                                    <option value="GP"> Guadeloupe (+590) </option>
                                                    <option value="GU"> Guam (+1) </option>
                                                    <option value="GT"> Guatemala (+502) </option>
                                                    <option value="GG"> Guernsey (+44) </option>
                                                    <option value="GN"> Guinea (+224) </option>
                                                    <option value="GW"> Guinea-Bissau (+245) </option>
                                                    <option value="GY"> Guyana (+592) </option>
                                                    <option value="HT"> Haiti (+509) </option>
                                                    <option value="HN"> Honduras (+504) </option>
                                                    <option value="HK"> Hong Kong (+852) </option>
                                                    <option value="HU"> Hungary (+36) </option>
                                                    <option value="IS"> Iceland (+354) </option>
                                                    <option value="IN"> India (+91) </option>
                                                    <option value="ID"> Indonesia (+62) </option>
                                                    <option value="IQ"> Iraq (+964) </option>
                                                    <option value="IE"> Ireland (+353) </option>
                                                    <option value="IM"> Isle of Man (+44) </option>
                                                    <option value="IL"> Israel (+972) </option>
                                                    <option value="IT"> Italy (+39) </option>
                                                    <option value="JM"> Jamaica (+1) </option>
                                                    <option value="JP"> Japan (+81) </option>
                                                    <option value="JE"> Jersey (+44) </option>
                                                    <option value="JO"> Jordan (+962) </option>
                                                    <option value="KZ"> Kazakhstan (+7) </option>
                                                    <option value="KE"> Kenya (+254) </option>
                                                    <option value="KI"> Kiribati (+686) </option>
                                                    <option value="XK"> Kosovo (+383) </option>
                                                    <option value="KW"> Kuwait (+965) </option>
                                                    <option value="KG"> Kyrgyz Republic (+996) </option>
                                                    <option value="LA"> Laos (+856) </option>
                                                    <option value="SS"> Laos (+211) </option>
                                                    <option value="LV"> Latvia (+371) </option>
                                                    <option value="LB"> Lebanon (+961) </option>
                                                    <option value="LS"> Lesotho (+266) </option>
                                                    <option value="LR"> Liberia (+231) </option>
                                                    <option value="LY"> Libya (+218) </option>
                                                    <option value="LI"> Liechtenstein (+423) </option>
                                                    <option value="LT"> Lithuania (+370) </option>
                                                    <option value="LU"> Luxembourg (+352) </option>
                                                    <option value="MO"> Macao (+853) </option>
                                                    <option value="MG"> Madagascar (+261) </option>
                                                    <option value="MW"> Malawi (+265) </option>
                                                    <option value="MY"> Malaysia (+60) </option>
                                                    <option value="MV"> Maldives (+960) </option>
                                                    <option value="ML"> Mali (+223) </option>
                                                    <option value="MT"> Malta (+356) </option>
                                                    <option value="MH"> Marshall Islands (+692) </option>
                                                    <option value="MQ"> Martinique (+596) </option>
                                                    <option value="MR"> Mauritania (+222) </option>
                                                    <option value="MU"> Mauritius (+230) </option>
                                                    <option value="YT"> Mayotte (+262) </option>
                                                    <option value="MX"> Mexico (+52) </option>
                                                    <option value="FM"> Micronesia (+691) </option>
                                                    <option value="MD"> Moldova (+373) </option>
                                                    <option value="MC"> Monaco (+377) </option>
                                                    <option value="MN"> Mongolia (+976) </option>
                                                    <option value="ME"> Montenegro (+382) </option>
                                                    <option value="MS"> Montserrat (+1) </option>
                                                    <option value="MA"> Morocco (+212) </option>
                                                    <option value="MZ"> Mozambique (+258) </option>
                                                    <option value="MM"> Myanmar (+95) </option>
                                                    <option value="NA"> Namibia (+264) </option>
                                                    <option value="NR"> Nauru (+674) </option>
                                                    <option value="NP"> Nepal (+977) </option>
                                                    <option value="NL"> Netherlands (+31) </option>
                                                    <option value="NC"> New Caledonia (+687) </option>
                                                    <option value="NZ"> New Zealand (+64) </option>
                                                    <option value="NI"> Nicaragua (+505) </option>
                                                    <option value="NE"> Niger (+227) </option>
                                                    <option value="NG"> Nigeria (+234) </option>
                                                    <option value="NU"> Niue (+683) </option>
                                                    <option value="NF"> Norfolk Island (+672) </option>
                                                    <option value="MK"> North Macedonia (+389) </option>
                                                    <option value="MP"> Northern Mariana Islands (+1) </option>
                                                    <option value="NO"> Norway (+47) </option>
                                                    <option value="OM"> Oman (+968) </option>
                                                    <option value="PK"> Pakistan (+92) </option>
                                                    <option value="PW"> Palau (+680) </option>
                                                    <option value="PS"> Palestine (+970) </option>
                                                    <option value="PA"> Panama (+507) </option>
                                                    <option value="PG"> Papua New Guinea (+675) </option>
                                                    <option value="PY"> Paraguay (+595) </option>
                                                    <option value="PE"> Peru (+51) </option>
                                                    <option value="PH"> Philippines (+63) </option>
                                                    <option value="PL"> Poland (+48) </option>
                                                    <option value="PT"> Portugal (+351) </option>
                                                    <option value="PR"> Puerto Rico (+1) </option>
                                                    <option value="QA"> Qatar (+974) </option>
                                                    <option value="CG"> Republic of the Congo (+242) </option>
                                                    <option value="RE"> Réunion (+262) </option>
                                                    <option value="RO"> Romania (+40) </option>
                                                    <option value="RU"> Russia (+7) </option>
                                                    <option value="RW"> Rwanda (+250) </option>
                                                    <option value="BL"> Saint Barthélemy (+590) </option>
                                                    <option value="SH"> Saint Helena (+290) </option>
                                                    <option value="KN"> Saint Kitts and Nevis (+1) </option>
                                                    <option value="LC"> Saint Lucia (+1) </option>
                                                    <option value="MF"> Saint Martin (+590) </option>
                                                    <option value="PM"> Saint Pierre and Miquelon (+508) </option>
                                                    <option value="VC"> Saint Vincent and the Grenadines (+1) </option>
                                                    <option value="WS"> Samoa (+685) </option>
                                                    <option value="SM"> San Marino (+378) </option>
                                                    <option value="ST"> São Tomé and Príncipe (+239) </option>
                                                    <option value="SA"> Saudi Arabia (+966) </option>
                                                    <option value="SN"> Senegal (+221) </option>
                                                    <option value="RS"> Serbia (+381) </option>
                                                    <option value="SC"> Seychelles (+248) </option>
                                                    <option value="SL"> Sierra Leone (+232) </option>
                                                    <option value="SG"> Singapore (+65) </option>
                                                    <option value="SX"> Sint Maarten (+1) </option>
                                                    <option value="SK"> Slovakia (+421) </option>
                                                    <option value="SI"> Slovenia (+386) </option>
                                                    <option value="SB"> Solomon Islands (+677) </option>
                                                    <option value="SO"> Somalia (+252) </option>
                                                    <option value="ZA"> South Africa (+27) </option>
                                                    <option value="KR"> South Korea (+82) </option>
                                                    <option value="ES"> Spain (+34) </option>
                                                    <option value="LK"> Sri Lanka (+94) </option>
                                                    <option value="SD"> Sudan (+249) </option>
                                                    <option value="SR"> Suriname (+597) </option>
                                                    <option value="SJ"> Svalbard and Jan Mayen (+47) </option>
                                                    <option value="SZ"> Swaziland (+268) </option>
                                                    <option value="SE"> Sweden (+46) </option>
                                                    <option value="CH"> Switzerland (+41) </option>
                                                    <option value="TW"> Taiwan (+886) </option>
                                                    <option value="TJ"> Tajikistan (+992) </option>
                                                    <option value="TZ"> Tanzania (+255) </option>
                                                    <option value="TH"> Thailand (+66) </option>
                                                    <option value="TL"> Timor-Leste (+670) </option>
                                                    <option value="TG"> Togo (+228) </option>
                                                    <option value="TK"> Tokelau (+690) </option>
                                                    <option value="TO"> Tonga (+676) </option>
                                                    <option value="TT"> Trinidad and Tobago (+1) </option>
                                                    <option value="TN"> Tunisia (+216) </option>
                                                    <option value="TR"> Turkey (+90) </option>
                                                    <option value="TM"> Turkmenistan (+993) </option>
                                                    <option value="TC"> Turks and Caicos Islands (+1) </option>
                                                    <option value="TV"> Tuvalu (+688) </option>
                                                    <option value="UG"> Uganda (+256) </option>
                                                    <option value="UA"> Ukraine (+380) </option>
                                                    <option value="AE"> United Arab Emirates (+971) </option>
                                                    <option value="GB"> United Kingdom (+44) </option>
                                                    <option value="US"> United States (+1) </option>
                                                    <option value="UY"> Uruguay (+598) </option>
                                                    <option value="VI"> US Virgin Islands (+1) </option>
                                                    <option value="UZ"> Uzbekistan (+998) </option>
                                                    <option value="VU"> Vanuatu (+678) </option>
                                                    <option value="VE"> Venezuela (+58) </option>
                                                    <option value="VN"> Vietnam (+84) </option>
                                                    <option value="WF"> Wallis and Futuna (+681) </option>
                                                    <option value="EH"> Western Sahara (+212) </option>
                                                    <option value="YE"> Yemen (+967) </option>
                                                    <option value="ZM"> Zambia (+260) </option>
                                                    <option value="ZW"> Zimbabwe (+263) </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourPhone">Phone<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control shadow-sm" id="txtYourPhone" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <label class="form-label" for="txtYourAddress">Address<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control shadow-sm" id="txtYourAddress" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <label class="form-label">Request (Option)</label>
                                                <textarea rows="5" class="form-control shadow-sm" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- Next - Back Step -->
                                            <!-- <div>
                                                <button type="submit"  class="btn btn-primary">
                                                    <span>Next step</span>
                                                    <i class="hicon hicon-flights-one-ways"></i>
                                                </button>
                                            </div> -->
                                            <div class="text-end pt-2 pb-2">
                                        <a class="btn btn-primary" href="/payment">
                                            <span>Next step</span>
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                            <!-- /Next - Back Step -->
                                        </div>
                                    </div>
                                    <!-- Information -->
                                </form>
                            </div>
                        </div>
                        <!-- Your Information -->
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
                                <img class="img-fluid" src="assets/img/logos/l1.png" srcset="./assets/img/logos/l1@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l2.png" srcset="./assets/img/logos/l2@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l3.png" srcset="./assets/img/logos/l3@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l4.png" srcset="./assets/img/logos/l4@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l5.png" srcset="./assets/img/logos/l5@2x.png 2x" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-4">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="assets/img/logos/l6.png" srcset="./assets/img/logos/l6@2x.png 2x" alt="">
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
                                    <img class="img-fluid" src="assets/img/logos/footer-light.png" srcset="./assets/img/logos/footer-light@2x.png 2x" alt="">
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
                                            <a class="nav-link text-body link-hover-primary ps-0 pe-0" href="about.html">Bilury's Story</a>
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
                        <p>© 2023 Bilury Hotel. All rights reserved.</p>
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
    <!-- Footer -->
    <!-- Scripts -->
    <script src="assets/js/bundle.min.js"></script>
    <!-- Scripts -->
</body>


<!-- Mirrored from bilury.bithemer.com/your-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 10:37:48 GMT -->
</html>