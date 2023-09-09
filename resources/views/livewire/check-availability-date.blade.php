<div>
<section id="checkRooms" class="check-room">
<form wire:submit="save"> 
                <div class="container">
                    <h2 class="d-none">Check rooms</h2>
                    
                    <div class="row justify-content-center">
                        <div class="col-12 col-xxl-9 col-xl-10">
                            <div class="card card-check-room border-0">
                                <div class="card-body ps-3 pe-3 ps-sm-6 pe-sm-6 pb-3">
                                    <div class="row g-2">
                                        <div class="col-12 col-lg-9">
                                            <!-- Input date -->
                                            <div class="mb-3">
                                                <div class="control-icon" >
                                                    <label class="hicon hicon-menu-calendar  cursor-pointer" for="txtCheckDate"></label>
                                                    <input wire:model="dateFilter" id="txtCheckDate" type="text" class=" {{$colorCheck}}" placeholder=""
                                                    onChange="Livewire.emit('setDate', this.value)"
                                                     ><input wire:model="message" type='text'>
                                                     {{$message}}
                                                </div>
                                            </div>
                                            <!-- -------
                                            <div class="mb-9">
                                        <div class="control-icon">
                                            <label class="hicon hicon-menu-calendar cursor-pointer" for="txtCheckDate"></label>
                                            <input wire:model="dateFilter" id="txtCheckDate" type="text" class="check-date form-control shadow-sm cursor-pointer" value="Mar 19 2023 - Mar 21 2023" placeholder="" readonly>
                                        </div>
                                    </div>
                                    -------- -->
                                            <!-- /Input date -->
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="row g-2">
                                               
                                                <!-- <div class="col-12 col-lg-3"> -->
                                                    <!-- Button -->
                                                    <div class="mb-3">
                                                        <a href="/step-one" class="btn btn-primary w-100">
                                                            <i class="hicon hicon-mmb-my-booking mr-1"></i>
                                                            <span>Check Rooms {{$dateFilter}}</span>
                                                            {{$message}} yes{{$dateFilter}}na
                                                        </a>
                                                    </div>
                                                    <input type="submit"
                                                   
                                                    >
                                                    <!-- /Button -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </form>
            </section>
</div>
