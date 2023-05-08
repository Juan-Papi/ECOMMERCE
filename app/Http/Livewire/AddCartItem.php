<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItem extends Component
{
    public $cant = 1;
    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
