<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use Livewire\Component;

class AdministradorComponent extends Component
{
    public function render()
    {
        $marcas= Marca::paginate();
        return view('livewire.administrador-component',['marcas' => $marcas]);
    }
}
