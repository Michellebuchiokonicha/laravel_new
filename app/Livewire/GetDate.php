<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class GetDate extends Component
{
    protected $listeners=['setDate'];
    public $indexes=[];
    public $current=0;
    public $colorCheck;
    public $dateFilter = '';
    public function render()
    {
        Session::get('selectedDate');

        return view('livewire.get-date');
    }
}