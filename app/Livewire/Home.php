<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\BaseComponent;
use Illuminate\Support\Facades\Session;

class Home extends BaseComponent
{
    public $dateFilter;
    public $inputValue;
    public $mimi = 'uuu';
    public $selectedDate;
    

    public function updatedDate()
    {
        //  Session::put('name', 'John DOe');
        //  return view('updatedDate');
        // Session::(['selectedStartDate' , $this->startDate]);
    }
    public function redirectToOtherPage()
{
    // Save the selected date in a session or database if needed
    // Then, redirect to the other page
    session(['selectedDate' => $this->selectedDate]);
    return redirect()->route('stepOne');
}

  
    public function render()
    {
        // Session::put('name', 'John DOe');
        // Session::get('selectedDate', $this->dateFilter);

        return view('livewire.home');
    }
}
