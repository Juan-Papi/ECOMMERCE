<?php

namespace App\Http\Livewire;

use App\Models\Subcategoria;
use Livewire\Component;
use Livewire\WithPagination;
class SubcategoriaComponent extends Component
{   use WithPagination;
    public function render()
    { 
        $subcategorias = Subcategoria::paginate(6);
        return view('livewire.subcategoria-component',compact('subcategorias'));
    }
}
