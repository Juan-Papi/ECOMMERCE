<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Marca;
use Livewire\WithPagination;

class Navigation extends Component
{
    use WithPagination;
    public $perPage = 6;

    public function render()
    {
        //$marcas= Marca::all();
        $marcas= Marca::paginate($this->perPage);
        return view('livewire.navigation',['marcas' => $marcas]);
    }
}
