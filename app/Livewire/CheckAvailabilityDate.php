<?php

namespace App\Livewire;

use Livewire\Component;
use illuminate\Support\Facades\Session;

class CheckAvailabilityDate extends BaseComponent
{
    protected $listeners=['setDate'];
    public $indexes=[];
    public $current=0;
    public $colorCheck;
    public $dateFilter = '';

    public $message = 'Hello World!';

    public function setDate($data)
    {
        $this->dateFilter=$data;
    }

    public function save()
    {
        dd($this->dateFilter);
        // Session::put('date-is-updated', $this->date);
        // return view('updatedDate');
    }

    public function render()
    {
        // dd($this->dateFilter);
        Session::put('selectedDate', $this->dateFilter);
        // $filterdate = Session::get('date-is-updated');
        return view('livewire.check-availability-date');
    }
}

