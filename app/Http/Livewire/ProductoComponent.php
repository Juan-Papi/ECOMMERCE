<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
class ProductoComponent extends Component
{   use WithPagination;

    public function render()
    {   
        
        $producfiltrado = Producto::whereHas('subcategoria', function(Builder $query){
            $query->where('edicionCo', true)
            ->where('tamaño',false);
        })->get();
    //---------------------------------------- 
        $productos = Producto::paginate(6);
    //----------------------------------------
        return view('livewire.producto-component',compact('productos'));
    }
}
