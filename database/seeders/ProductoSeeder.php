<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::factory(50)->create()->each(function(Producto $producto){
            Image::factory(4)->create([
               'imageable_id' => $producto->id,
               'imageable_type' => Producto::class
            ]);
        });
    }
}   
