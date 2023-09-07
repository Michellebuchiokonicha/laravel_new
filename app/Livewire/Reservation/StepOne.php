<?php

namespace App\Livewire\Reservation;

use Livewire\Component;
use App\Livewire\BaseComponent;

class StepOne extends BaseComponent
{
    public function index()
    {
        $selectedStartDate = Session::get('selectedStartDate');
        $selectedEndDate = Session::get('selectedEndDate');
    }
    public function render()
    {
        return view('livewire.reservation.step-one');
    }
}
