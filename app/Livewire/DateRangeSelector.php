<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Facades\Session;

class DateRangeSelector extends BaseComponent
{
    public $dateFilter;

    public function render()
    {
        Session::put('selectedDate', $this->dateFilter);
        return view('livewire.date-range-selector');
    }
}
