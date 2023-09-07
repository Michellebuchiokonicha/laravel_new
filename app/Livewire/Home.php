<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\BaseComponent;

class Home extends BaseComponent
{
    public $startDate;
    public $endDate;

    public function updatedStartDate()
    {
        session(['selectedStartDate' => $this->startDate]);
    }

    public function updatedEndDate()
    {
        session(['selectedEndDate' => $this->endDate]);
    }
    public function render()
    {
        return view('livewire.home');
    }
}
