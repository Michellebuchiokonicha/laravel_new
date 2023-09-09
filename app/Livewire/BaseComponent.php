<?php

namespace App\Livewire;

use Livewire\Component;

class BaseComponent extends Component
{
    // public $message = 'yes yes';
    public function render()
    {
        return view('livewire.base-component');
    }
}
