<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\BaseComponent;
use Illuminate\Support\Facades\Session;

class Home extends BaseComponent
{
    public $dateFilter;
    

    public function updatedStartDate()
    {
        // Session::put('name', 'John DOe');
        // Session::(['selectedStartDate' , $this->startDate]);
    }

  
    public function render()
    {
        Session::put('selectedDate', $this->dateFilter);

        return view('livewire.home');
    }
}
