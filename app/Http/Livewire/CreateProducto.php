<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subcategoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Builder;

class CreateProducto extends Component
{   
    public $nombre;
    public $descripcion;
    public $precio;
    public $cantidad;
    public $estado;
    public $subcategoria_id;
    public $marca_id;
  
   public function save(){
        Producto::create([
         'nombre' =>$this->nombre,
         'slug' =>$this->nombre,
         'descripcion' =>$this->descripcion,
         'precio' =>$this->precio,
         'cantidad' =>$this->cantidad,
         'estado' => $this->estado,
         'subcategoria_id' => $this->subcategoria_id,
         'marca_id' =>$this->marca_id,

        ]);
    
     }
    public function render()
    { 
        
       //---------------------------------------
        $subcategorias = Subcategoria::all();
        $marcas = Marca::all();    
        return view('livewire.create-producto',compact('subcategorias'),compact('marcas'));
    }
  

}
