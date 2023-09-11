<div>
    <div>

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
        
        @livewire('check-availability-date', ['colorCheck' => "check-date form-control bg-white bg-opacity-15 border-white border-opacity-20 shadow-sm cursor-pointer"])


        <section id="reservation" class="pt-10 pb-10">
            <div class="container">
                
           
                <div class="row g-0">
                    <div class="col-12 col-xl-9 pe-xl-8" data-cue="fadeIn">
                        
                        <!-- <div class="mb-6">
                            <div class="row g-2">
                                <div class="col-12 col-lg-9">
                                    
                                    <div class="mb-9">
                                        <div class="control-icon">
                                            <label class="hicon hicon-menu-calendar cursor-pointer" for="txtCheckDate"></label>
                                            <input wire:model="dateFilter" id="txtCheckDate" type="text" class="check-date form-control shadow-sm cursor-pointer" value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="row g-2">
                                        
                                            <div class="mb-5">
                                                <a href="/" class="btn btn-primary w-100 shadow-sm">
                                                    <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                                    <span>Check Rooms</span>
                                                </a>
                                            </div>
                                          
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="mb-8">
                            
                            <div class="card card-selected mb-5 shadow-sm">
                                <div class="card-body pb-2">
                                  
                                    <h3 class="card-title h4">
                                        <a href="single-room-1.html" target="_blank" class="text-dark link-hover-primary text-uppercase ff-sub ls-1">Mini King Suite</a>
                                    </h3>
                                    
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-4 col-md-6">
                                           
                                            <div class="pe-0 pe-md-5 mb-5">
                                                <a href="single-room-1.html">
                                                    <figure class="image-hover-scale image-hover-overlay rounded overflow-hidden mb-0">
                                                        <img src="assets/img/rooms/r22.jpg" srcset="./assets/img/rooms/r22@2x.jpg 2x" class="img-fluid w-100" alt="">
                                                        <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12 order-2 order-lg-2 order-md-3">
                                           
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
                                        <a class="btn btn-primary" href="/step-two">
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
  

    </div>
</div>