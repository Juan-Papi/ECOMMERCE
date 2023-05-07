<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use Livewire\Component;
use Livewire\WithPagination;
class MarcaComponent extends Component
{ use WithPagination;
    public function render()
    { $marcas= Marca::paginate(6);
        return view('livewire.marca-component',compact('marcas'));

       // ->layout('layouts.marcas-ver',['marcas' => $marcas]);
    }
}
