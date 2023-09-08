<?php

namespace App\Livewire\Reservation;

use Livewire\Component;
use App\Livewire\BaseComponent;
use Illuminate\Support\Facades\Session;

class StepOne extends BaseComponent
{
    public $dateFilter;
    public function index()
    {
        Session::put('name', 'John Doe');
        $selectedStartDate = Session::get('selectedStartDate');
        $selectedEndDate = Session::get('selectedEndDate');
    }
    public function render()
    {
        Session::get('selectedDate', $this->dateFilter);
        dd('SelectedDate');
        return view('livewire.reservation.step-one');
    }
}
