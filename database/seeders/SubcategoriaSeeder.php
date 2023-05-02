<?php

namespace Database\Seeders;

use App\Models\Subcategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $subcategorias = [
        //FICCION
          [
            'categoria_id' => 1,
            'nombre' => 'Stephen King',
            'slug' => Str::slug('Stephen King'),
            'edicionCo' => true 
          ],
          [
            'categoria_id' => 1,
            'nombre' => 'Dan Brown',
            'slug' => Str::slug('Dan Brown')     
          ],
          [
            'categoria_id' => 1,
            'nombre' => 'Gabriel Garcia Marquez',
            'slug' => Str::slug('Gabriel Garcia Marquez')     
          ],
          [
            'categoria_id' => 1,
            'nombre' => 'Haruki Murakami',
            'slug' => Str::slug('Haruki Murakami')     
          ],
        //  Infantil y juvenil
        [
            'categoria_id' => 2 ,
            'nombre' => 'Rick Riordan',
            'slug' => Str::slug('Rick Riordan')     
          ],
          [
            'categoria_id' => 2,
            'nombre' => 'Lois Lowry',
            'slug' => Str::slug('Lois Lowry')     
          ],
          [
            'categoria_id' => 2,
            'nombre' => 'Jeff Kinney',
            'slug' => Str::slug('Jeff Kinney')     
          ],
          [
            'categoria_id' => 2,
            'nombre' => 'John Green',
            'slug' => Str::slug('John Green')     
          ],
       //Autoayuda
           [
            'categoria_id' => 3 ,
            'nombre' => 'Dale Carnegie',
            'slug' => Str::slug('Dale Carnegie')     
          ],
          [
            'categoria_id' => 3,
            'nombre' => 'Sthephen Covey',
            'slug' => Str::slug('Sthephen Covey')     
          ],
          [
            'categoria_id' => 3,
            'nombre' => 'Tony Robbins',
            'slug' => Str::slug('Tony Robbins')     
          ],
          [
            'categoria_id' => 3,
            'nombre' => 'Wayne Dyer',
            'slug' => Str::slug('Wayne Dyer')     
          ],
          //Negocios y finanzas
          [
            'categoria_id' => 4 ,
            'nombre' => 'Dale Carnegie',
            'slug' => Str::slug('Dale Carnegie')     
          ],
          [
            'categoria_id' => 4,
            'nombre' => 'Robert Kiyosaki',
            'slug' => Str::slug('Robert Kiyosaki')     
          ],
          [
            'categoria_id' => 4,
            'nombre' => 'Daniel kahneman',
            'slug' => Str::slug('Daniel kahneman')     
          ],
          [
            'categoria_id' => 4,
            'nombre' => 'Michael Lewis',
            'slug' => Str::slug('Michael Lewis')     
          ],
          //Salud y bienestar
          [
            'categoria_id' => 5 ,
            'nombre' => 'Deepak Chopra',
            'slug' => Str::slug('Deepak Chopra')     
          ],
          [
            'categoria_id' => 5,
            'nombre' => 'Andrew Weil',
            'slug' => Str::slug('Andrew Weil')     
          ],
          [
            'categoria_id' => 5,
            'nombre' => 'Dr.Mark Hyman',
            'slug' => Str::slug('Dr.Mark Hyman')     
          ],
          [
            'categoria_id' => 5,
            'nombre' => 'Dr.Jordan B. Peterson',
            'slug' => Str::slug('Dr.Jordan B. Peterson')     
          ],
       ];
       foreach($subcategorias as $subcategoria){
        Subcategoria::factory(1)->create($subcategoria);
     }
    } 
}
