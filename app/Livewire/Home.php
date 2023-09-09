<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\BaseComponent;
use Illuminate\Support\Facades\Session;

class Home extends BaseComponent
{
    public $dateFilter;
    

    public function updatedDate()
    {
         Session::put('name', 'John DOe');
         return view('updatedDate');
        // Session::(['selectedStartDate' , $this->startDate]);
    }

  
    public function render()
    {
        // Session::put('name', 'John DOe');
        Session::get('selectedDate', $this->dateFilter);

        return view('livewire.home');
    }
}
