<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Facades\Session;

class CheckAvailabilityDate extends BaseComponent
{
    public $textlight;
    public $dateFilter;

    public function render()
    {
        return view('livewire.check-availability-date');
    }
}

