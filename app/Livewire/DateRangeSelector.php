<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Facades\Session;

class DateRangeSelector extends BaseComponent
{
    public $dateFilter;


    public function updatedStartDate()
    {
        Sessions::put('selectedStartDate', $this->startDate);
    }
    public function updatedEndDate()
    {
        Session::put('selectedDate', $this->endDate);
    }
    public function render()
    {
        Session::put('selectedDate', $this->dateFilter);
        return view('livewire.date-range-selector');
    }
}
