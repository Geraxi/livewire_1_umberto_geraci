<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementByNumber($number){
        $this-> value +=$number;

    }

    public function addX($x)
    {
        $this->count += $x;
    }

    public function subtractX($x)
    {
        $this->count -= $x;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
