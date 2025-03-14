<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $value=0;
    public $count = 1;

    public function increment($number)
    {
        $this->count++;
    }

    public function decrement($number)
    {
        $this->count--;
    }

    public function incrementByNumber($number){
        $this-> value +=$number;

    }

    public function decrementByNumber($number){
        $this-> value +=$number;

    }

    

    
}
