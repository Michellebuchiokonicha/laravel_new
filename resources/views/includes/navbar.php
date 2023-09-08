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
    <header id="header" class="header transition-base fixed-top z-1030  ">
        <nav class="navbar navbar-expand-xl fw-medium pt-5 pb-5 fs-6">
            <div class="container justify-content-end">
                <a class="navbar-brand flex-grow-1" id="brandHeader" href="index-2.html">
                    <img src="assets/img/Landmark/landmark.png" srcset="./assets/img/Landmark/landmark.png 2x" class="logo" alt="">
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
                                <a class="nav-link dropdown-toggle-hover text-uppercase active" href="/" data-bs-display="static">
                                    <span>Home</span>
                                    <!-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> -->
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@rooms" href="/rooms" data-bs-display="static">
                                    <span>Rooms</span>
                                    <!-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> -->
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
                                <a class="nav-link dropdown-toggle-hover text-uppercase @@tours" href="/rooms" data-bs-display="static">
                                    <span>Services</span>
                                    <!-- <i class="hicon hicon-thin-arrow-down dropdown-toggle-icon"></i> -->
                                </a>
                               
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link text-uppercase @@gallery" href="/contact">About</a></li>
                            <li class="nav-item dropdown">
                            <div class="mt-2 mt-xl-0 order-0 order-xl-1">
                                <a href="/reservation" class="btn btn-primary">
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
    </html>
</body>