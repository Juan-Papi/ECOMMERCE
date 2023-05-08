<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;
class CategoriaComponent extends Component
{ use WithPagination;
    public function render()
    {
        $categorias = Categoria::paginate(6);
        return view('livewire.categoria-component',compact('categorias'));
    }
}
