<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Facades\Session;

class DateRangeSelector extends Component
{
    public $startDate;
    public $endDate;

    public function updatedStartDate()
    {
        Sessions::put('selectedStartDate', $this->startDate);
    }
    public function updatedEndDate()
    {
        Session::put('selectedEndDate', $this->endDate);
    }
    public function render()
    {
        return view('livewire.date-range-selector');
    }
}
