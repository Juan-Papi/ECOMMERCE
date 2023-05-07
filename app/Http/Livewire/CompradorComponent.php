<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
class CompradorComponent extends Component
{
    public function render()
    { $categorias = Categoria::all();
        return view('livewire.comprador-component')
        ->layout('layouts.plantilla-comprador',compact('categorias'));
    }
}
