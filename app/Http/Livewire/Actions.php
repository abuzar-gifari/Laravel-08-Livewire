<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $sum;
    public function add($a,$b){
        $this->sum = $a + $b;
    }
    public function render()
    {
        return view('livewire.actions');
    }
}
