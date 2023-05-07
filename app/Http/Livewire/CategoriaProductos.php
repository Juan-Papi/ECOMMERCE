<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaProductos extends Component
{   public $categoria;//con el mismo nombre del que lo manda
    public function render()
    {   //$categorias = Categoria::all();
      /*  return view('livewire.categoria-productos',compact('categorias'))
        ->layout('layouts.main');*/
      
        return view('livewire.categoria-productos')
        ->layout('layouts.main');
    }
}
