<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Producto;
class TamañoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = Producto::whereHas('subcategoria', function(Builder $query){
            $query->where('edicionCo', true)
            ->where('tamaño',true);
        })->get();

        $tamaños = ['MEDIANO','GRANDE', 'MUY GRANDE'];//array
        foreach($productos as $producto){

             foreach($tamaños as $tamaño){

                $producto->tamaños()->create([
                   'nombre' => $tamaño
                ]);
             }
           
        }
    }
}
