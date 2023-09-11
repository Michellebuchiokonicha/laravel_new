<div>
    @livewireScripts  
  
    <div>
        <!-- Hero carousel -->
        <section id="heroVideo" class="hero-video">
           
            <!-- Video -->
            <div class="video-wrapper bg-overlay bg-overlay-700 ratio ratio-16x9 text-body text-center" style='' data-bs-theme="dark">
            <img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-100" alt="">
                <!-- <video class="object-fit-cover" poster="assets/img/background/bg7.jpeg" src="assets/media/video_landmark.mp4" autoplay loop playsinline muted></video> -->
                <div class="bg-content">
                    <div class="video-caption position-absolute z-1 top-50 start-50 translate-middle w-100">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-11 col-xl-7 col-lg-9">
                              
                                <h4 class="display-4 fw-semibold ff-heading text-uppercase">Landmark Hotel</h4>
                                    <p class="fs-4">Landmark Hotel is an amazing environment for eveßi corpora, no numquam corrumpit prodesset pri.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Video -->
            <!-- Check rooms -->
            {{Session::get('selectedDate')}}
            @livewire('check-availability-date', ['colorCheck' => "check-date form-control bg-white text-white  bg-opacity-15 border-white border-opacity-20 shadow-sm cursor-pointer"])
            <!-- /Check rooms -->
        </section>
        <!-- /Hero carousel -->
        <!-- About -->
        <section id="about" class="pt-14 pb-14">
            <div class="container">
                <div class="row align-items-start align-items-md-stretch" data-cues="fadeIn">
                    <div class="col-12 col-lg-6 order-1 order-lg-0 spaceG">
                        <div class='row align-items-start align-items-md-stretch mb-6'>
                        <div class='col-4 col-lg-6' >
                        <img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-10" alt="">
                        </div>
                        <div class='col-4 col-lg-6' ><img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-10" alt=""></div>
                        </div>
                        <div class='row align-items-start align-items-md-stretch'>
                        <div class='col-4 col-lg-6' ><img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-10" alt=""></div>
                        <div class='col-4 col-lg-6' ><img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-10" alt=""></div>

                        </div>
                                              <!-- Map -->
                        <!-- <img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-100" alt=""> -->

                        <!-- <iframe src="https://snazzymaps.com/embed/385606" class="border-0 w-100 d-block rounded shadow-sm overflow-hidden" style="height:400px"></iframe> -->
                        <!-- /Map -->
                    </div>
                    <div class="col-12 col-lg-6 order-0 order-lg-1">
                        <!-- Description -->
                        <div class="bg-white h-100 d-flex align-items-center">
                            <div class="p-lg-5 mb-8">
                                <span class="mb-2 fw-medium text-secondary ff-sub text-uppercase ls-1 d-block">Welcome to</span>
                                <h2 class="text-uppercase ff-heading">Landmark Hotel</h2>
                                <p class="mb-6">Landmark Hotel is a great place to begin working. It comes with an amazing location and style</p>
                                <a href="about.html" class="scroll-to btn btn-primary">
                                    <span>Read More</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                        <!-- /Description -->
                    </div>
                </div>
            </div>
        </section>
        
        <!-- /About -->
        <!-- Rooms -->
        <section id="rooms" class="pt-14 pb-14 bg-body" data-bs-theme="dark">
            <div class="container">
                <!-- Description -->
                <div class="mb-10 text-center" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading">Check out our Rooms</h2>
                    <h4 class="h5 fw-normal text-body-secondary">Landmark Rooms are cool and fine and affordable for all to use and dwelll on pri cu errem purto summo.</h4>
                </div>
                <!-- /Description -->
                <!-- Rooms List -->
                <div class="room-classic-slider" data-cue="fadeIn">
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card border-0">
                            <a href="/roooms" class="d-block card-img-top">
                                <figure class="image-hover-overlay image-hover-scale mb-0">
                                    <img src="assets/img/rooms/r11.jpg" srcset="./assets/img/rooms/r11@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body bg-primary-50" data-bs-theme="light">
                                <div class="mb-3">
                                    <strong class="fw-semibold fs-5"><sup>#</sup>95000.00</strong>
                                    <span class="small fw-medium">/ Night</span>
                                </div>
                                <h3 class="card-title mb-4 h4 text-uppercase ff-sub ls-1">Mini King Suite</h3>
                                <p class="card-text">Area: 25 m²/323 ft², 1 King Bed / 2 Single Beds, Breakfast Included</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="/rooms" class="card-link fw-medium p-0">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                    <a href="/step-one" class="btn btn-primary">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card border-0">
                            <a href="/rooms" class="d-block card-img-top">
                                <figure class="image-hover-overlay image-hover-scale mb-0">
                                    <img src="assets/img/rooms/r12.jpg" srcset="./assets/img/rooms/r12@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body bg-primary-50" data-bs-theme="light">
                                <div class="mb-3">
                                    <strong class="fw-semibold fs-5"><sup></sup>105000.00</strong>
                                    <span class="small fw-medium">/ Night</span>
                                </div>
                                <h3 class="card-title mb-4 h4 text-uppercase ff-sub ls-1">Classic Partial View</h3>
                                <p class="card-text">Area: 35 m²/323 ft², 1 King Bed / 2 Single Beds, Breakfast Included.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="/rooms" class="card-link fw-medium p-0">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                    <a href="/step-one" class="btn btn-primary">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card border-0">
                            <a href="/rooms" class="d-block card-img-top">
                                <figure class="image-hover-overlay image-hover-scale mb-0">
                                    <img src="assets/img/rooms/r13.jpg" srcset="./assets/img/rooms/r13@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body bg-primary-50" data-bs-theme="light">
                                <div class="mb-3">
                                    <strong class="fw-semibold fs-5"><sup>#</sup>95000.00</strong>
                                    <span class="small fw-medium">/ Night</span>
                                </div>
                                <h3 class="card-title mb-4 h4 text-uppercase ff-sub ls-1">Classic City View</h3>
                                <p class="card-text">Area: 25 m²/323 ft², 1 King Bed / 2 Single Beds, Breakfast Included. </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="/rooms" class="card-link fw-medium p-0">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                    <a href="/step-one" class="btn btn-primary">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card border-0">
                            <a href="/rooms" class="d-block card-img-top">
                                <figure class="image-hover-overlay image-hover-scale mb-0">
                                    <img src="assets/img/rooms/r14.jpg" srcset="./assets/img/rooms/r14@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body bg-primary-50" data-bs-theme="light">
                                <div class="mb-3">
                                    <strong class="fw-semibold fs-5"><sup>#</sup>105000.00</strong>
                                    <span class="small fw-medium">/ Night</span>
                                </div>
                                <h3 class="card-title mb-4 h4 text-uppercase ff-sub ls-1">Executive Suite</h3>
                                <p class="card-text">Area: 28 m²/323 ft², 1 King Bed / 2 Single Beds, Breakfast Included.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="/rooms" class="card-link fw-medium p-0">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                    <a href="/step-one" class="btn btn-primary">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                    <!-- Room item -->
                    <div class="mb-5">
                        <div class="card border-0">
                            <a href="/rooms" class="d-block card-img-top">
                                <figure class="image-hover-overlay image-hover-scale mb-0">
                                    <img src="assets/img/rooms/r15.jpg" srcset="./assets/img/rooms/r15@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body bg-primary-50" data-bs-theme="light">
                                <div class="mb-3">
                                    <strong class="fw-semibold fs-5"><sup>#</sup>105.00</strong>
                                    <span class="small fw-medium">/ Night</span>
                                </div>
                                <h3 class="card-title mb-4 h4 text-uppercase ff-sub ls-1">Baeach Room</h3>
                                <p class="card-text">Area: 28 m²/323 ft², 1 King Bed / 2 Single Beds, Breakfast Included.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="/rooms" class="card-link fw-medium p-0">
                                        <span>Details</span>
                                        <i class="hicon hicon-flights-one-ways"></i>
                                    </a>
                                    <a href="/step-one" class="btn btn-primary">
                                        <i class="hicon hicon-menu-calendar"></i>
                                        <span>Book now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Room item -->
                </div>
                <!-- /Rooms List -->
            </div>
        </section>
        <!-- /Rooms -->
        <!-- Facilities -->
        
        <!-- /Facilities -->
        <!-- Services -->
        <section id="extra-services" class="pt-14 pb-14 bg-primary-50">
            <div class="container">
                <!-- Heading -->
                <div class="mb-8" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading">Blog</h2>
                    <p class="fs-5 fw-normal text-body-secondary">Eos clita partem utroque veri integre qui, duo dolore tacimates..</p>
                </div>
                <!-- /Heading -->
                <!-- Service list -->
                <div class="service-slider" data-cue="fadeIn">
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="restaurant.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s4-1.jpg" srcset="./assets/img/services/s4-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Restaurant & bar</h3>
                                <p class="card-text">Vis ei tation iisque suscipit, vim id tota dolores hendrerit.</p>
                                <a href="restaurant.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="meetings-events.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s3-1.jpg" srcset="./assets/img/services/s3-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Meetings & events</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, tota vis constituto neglegentur.</p>
                                <a href="meetings-events.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="tour-categories.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s2-1.jpg" srcset="./assets/img/services/s2-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Booking Tours</h3>
                                <p class="card-text">Pri ad deserunt percipi ullam corper, mel dicam constitu.</p>
                                <a href="tour-categories.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="airport-transfers.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s1-1.jpg" srcset="./assets/img/services/s1-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Airport Transfers</h3>
                                <p class="card-text">Ne labitur persecu ius, in tale laoreet mentit pri, laoreet.</p>
                                <a href="airport-transfers.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                </div>
                <!-- /Service list -->
            </div>
        </section>
        <!-- /Services -->
        <!-- Video -->
        <section id="video" class="image-wrapper bg-image bg-overlay bg-overlay-700 text-body pt-20 pb-18 text-center " data-image-src="./assets/img/background/bg2.jpg" data-bs-theme="dark">
            <div class="bg-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-7 col-lg-9" data-cues="fadeIn">
                            <div class="mb-6">
                                <a class="btn-video-play media-glightbox" href="assets/media/v1.mp4"><span></span></a>
                            </div>
                            <h2 class="text-uppercase ff-heading">Landmark Hotel Video</h2>
                            <p class="fs-5 fw-normal"> Eos clita partem utroque ut, veri integre qui ut, id duo dolore tacimates. Modo detracto scribentur id vis. Virtute appellantur mea eu, eos an dicant posidonium efficiendi. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Video -->
        <!-- Testimonials -->
        <section id="testimonials" class="pt-14 pb-14">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Heading -->
                        <div class="mb-10 text-center" data-cue="fadeIn">
                            <h2 class="text-uppercase ff-heading">What our clients say</h2>
                            <p class="fs-5 fw-normal text-body-secondary">Pro sonet consul maiorum ad. Delenit omittantur ne cum gloriatur.</p>
                        </div>
                        <!-- /Heading -->
                    </div>
                    <div class="col-12">
                        <!-- Testimonials list -->
                        <div class="testimonial-slider tns-nav-dark text-center" data-cue="fadeIn">
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a1.jpg" srcset="./assets/img/avatars/a1@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>An harum accommodare ullamcorper, laoreet repudiare consetetur percipitur mel disputationi cum ex. Aliquid delicatissimi.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> John Doe <cite title="Source Title">(Italy)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a2.jpg" srcset="./assets/img/avatars/a2@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Saperet voluptatibus signiferumque no eam, laoreet eos pertinax dissentiet in. Fabulas voluptua mea te. Te per integre splendide.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Emily Smith <cite title="Source Title">(France)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a3.jpg" srcset="./assets/img/avatars/a3@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Ne quem tale tincidunt has, in veritus dissentiunt eum. No minim libris reformidans cum, aliquid id eum sale admodum.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Alex Mark <cite title="Source Title">(USA)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a4.jpg" srcset="./assets/img/avatars/a4@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Et tale erat pri, ea usu possim ancillae electram, dissentiunt ex dolorum admodum persecuti est. Convenire efficiendi consulatu. </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Ariol Deep <cite title="Source Title">(China)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                            <div class="mb-3">
                                <!-- Testimonial item -->
                                <figure>
                                    <img src="assets/img/avatars/a5.jpg" srcset="./assets/img/avatars/a5@2x.jpg 2x" class="img-fluid rounded-circle shadow-sm mb-6" width="80" alt="">
                                    <div class="mb-2"><span class="star-rate-view star-rate-size-sm"><span class="star-value rate-45"></span></span></div>
                                    <blockquote class="blockquote fst-italic mb-6">
                                        <p>Ei nec choro doctus, an esse postea mel, tamquam intellegam mei no. Vis pertinax ne incorrupte, ne his repudiare suscipiantur.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-body-secondary"> Emma Ross <cite title="Source Title">(Australia)</cite>
                                    </figcaption>
                                </figure>
                                <!-- /Testimonial item -->
                            </div>
                        </div>
                        <!-- /Testimonials list -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonials -->
        <!-- News & events -->
        <section id="extra-services" class="pt-14 pb-14 bg-primary-50">
            <div class="container">
                <!-- Heading -->
                <div class="mb-8" data-cue="fadeIn">
                    <h2 class="text-uppercase ff-heading"> Services</h2>
                    <p class="fs-5 fw-normal text-body-secondary">Eos clita partem utroque veri integre qui, duo dolore tacimates..</p>
                </div>
                <!-- /Heading -->
                <!-- Service list -->
                <div class="service-slider" data-cue="fadeIn">
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="restaurant.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s4-1.jpg" srcset="./assets/img/services/s4-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Restaurant & bar</h3>
                                <p class="card-text">Vis ei tation iisque suscipit, vim id tota dolores hendrerit.</p>
                                <a href="restaurant.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="meetings-events.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s3-1.jpg" srcset="./assets/img/services/s3-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Meetings & events</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, tota vis constituto neglegentur.</p>
                                <a href="meetings-events.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="tour-categories.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s2-1.jpg" srcset="./assets/img/services/s2-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Booking Tours</h3>
                                <p class="card-text">Pri ad deserunt percipi ullam corper, mel dicam constitu.</p>
                                <a href="tour-categories.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                    <!-- Service item -->
                    <div class="mb-4">
                        <div class="card border-0 shadow-sm">
                            <a href="airport-transfers.html" class="d-block card-img-top">
                                <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                                    <img src="assets/img/services/s1-1.jpg" srcset="./assets/img/services/s1-1@2x.jpg 2x" class="img-fluid w-100" alt="">
                                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                </figure>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title h6 text-uppercase ff-sub ls-1">Airport Transfers</h3>
                                <p class="card-text">Ne labitur persecu ius, in tale laoreet mentit pri, laoreet.</p>
                                <a href="airport-transfers.html" class="card-link fw-medium"> Read more <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Service item -->
                </div>
                <!-- /Service list -->
            </div>
        </section>
        <!-- /News & events -->
        <!-- Quick booking -->
        <section id="booking" class="image-wrapper bg-image bg-overlay bg-image bg-overlay-800 pt-14 pb-14" data-image-src="assets/img/background/bg1.jpg">
            <div class="bg-content">
                <div class="container">
                    <div class="row justify-content-between" data-cues="fadeIn">
                        <div class="col-12 col-xl-5 col-lg-6">
                            <div class="pb-2 text-body position-relative" data-bs-theme="dark">
                                <!-- Heading -->
                                <div class="mb-8">
                                    <h2 class="text-uppercase ff-heading">Book room</h2>
                                    <p class="fs-5 fw-normal"> Meis iriure id eos, an his wisi labitur. Decore expetenda sed at. Alienum inimicus torquatos mea ad principes. </p>
                                </div>
                                <!-- /Heading -->
                                <!-- Contact Info -->
                                <div class="mb-8">
                                    <div class="d-flex align-items-start mb-4">
                                        <div class="fs-4 pe-5 lh-sm">
                                            <i class="hicon hicon-email-envelope"></i>
                                        </div>
                                        <div>
                                            <span class="d-block">Email</span>
                                            <h3 class="h5 fw-medium">Booking@example.com</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div class="fs-4 pe-5 lh-sm">
                                            <i class="hicon hicon-telephone"></i>
                                        </div>
                                        <div>
                                            <span class="d-block">Phone</span>
                                            <h3 class="h5 fw-medium">+33 (0) 1 89 78 67 56</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Contact Info -->
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-5">
                            <div class="card border-0 bg-primary-50 shadow-sm" data-bs-theme="light">
                                <div class="card-body">
                            <form class="needs-validation" method="post" novalidate="" action="/step-one">
                                        <!-- Heading -->
                                        <h3 class="text-dark text-uppercase h4 ff-sub ls-1">Reservation</h3>
                                        <!-- /Heading -->
                                        <!-- Input date -->
                                <div class="col-12 col-lg-9">
                                    <!-- Input date -->
                                    <div class="mb-5">
                                        <div class="control-icon">
                                            <label class="hicon hicon-menu-calendar cursor-pointer" for="txtCheckDate"></label>
                                            <input id="txtCheckDate" type="text" class="check-date form-control shadow-sm cursor-pointer" value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <!-- /Input date -->
                                </div>
                                        <!-- /Input date -->
                                      
                                        <!-- Button -->
                                        <div class="col-12 col-lg-3">
                                    <div class="row g-2">
                                      
                                            <!-- Button -->
                                            <div class="mb-5">
                                                <a href="/step-one" class="btn btn-primary w-100 shadow-sm">
                                                    <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                                    <span>Check Rooms</span>
                                                </a>
                                            </div>
                                            <!-- /Button -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                                        <!-- /Button -->
                                        <!-- Extra links -->
                                        <ul class="nav flex-column small mb-0">
                                            <li class="nav-item"><a class="nav-link text-body link-hover-primary pt-1 pb-1 ps-0 pe-0" href="#">▪ Best Rate Guarantee</a></li>
                                            <li class="nav-item"><a class="nav-link text-body link-hover-primary pt-1 pb-1 ps-0 pe-0" href="#">▪ Submit a question</a></li>
                                        </ul>
                                        <!-- /Extra links -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Quick booking -->
    </main>   
        
    </div>
    @livewireScripts   
</div>
