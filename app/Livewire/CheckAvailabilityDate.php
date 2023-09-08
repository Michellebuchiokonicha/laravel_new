<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Facades\Session;

class DateRangeSelector extends BaseComponent
{
    public $dateFilter;


    
    public function render()
    {
        return view('livewire.check-availability-date');
    }
}

