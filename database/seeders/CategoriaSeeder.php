<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
               'nombre'=>'Ficcion',
               'slug'=>Str::slug('Ficcion'),
               'icono'=>'<i class="fa-regular fa-user-astronaut"></i>'
            ],
            [
                'nombre'=>'Infantil y juvenil',
                'slug'=>Str::slug('Infantil y juvenil'),
                'icono'=>'<i class="fa-solid fa-child"></i>'
            ],
             [
                'nombre'=>'Autoayuda',
                'slug'=>Str::slug('Autoayuda'),
                'icono'=> '<i class="fa-solid fa-hands-holding-child"></i>'
             ],
             [
                'nombre'=>'Negocios y finanzas',
                'slug'=> Str::slug('Negocios y finanzas'),
                'icono'=> '<i class="fa-light fa-user-tie-hair"></i>'
             ],
             [
                'nombre'=>'Salud y bienestar',
                'slug'=> Str::slug('Salud y bienestar'),
                'icono'=>'<i class="fa-solid fa-user-doctor"></i>'
             ],
        ];  
        foreach($categorias as $categoria){
           $catego = Categoria::factory(1)->create($categoria)->first();
           $marcas = Marca::factory(6)->create();
           
           foreach($marcas as $marca){
              $marca->categorias()->attach($catego->id);
           }
        }
    }
}
