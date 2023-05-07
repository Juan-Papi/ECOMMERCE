<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Producto;
class EdicioncoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //wherehas ->permite hacer consultas a las relaciones del modelo Producto!!
       $productos = Producto::whereHas('subcategoria', function(Builder $query){
            $query->where('edicionCo', true)
            ->where('tamaño',false);
        })->get();
       foreach($productos as $producto){
          $producto->edicioncos()->attach([
            1 => [
             'cantidad' => 10            
            ],
            2 => [
              'cantidad' => 15
            ],
            3 => [
             'cantidad' => 12
            ],
            4 => [
             'cantidad' => 13
            ]
          ]);
       }
    }   
}
