<?php

namespace Database\Factories;

use App\Models\Subcategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $nombre = $this->faker->sentence(2);//referencia a 2 palabras
      
       $subcategoria = Subcategoria::all()->random();
       $categoria = $subcategoria->Categoria;

       $marca = $categoria->marcas->random();

    if($subcategoria->edicionCo){
        $cantidad = null;
    }else{
        $cantidad = 15;
    }



        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $this->faker->text(),
            'precio' => $this->faker->randomElement([ 4.99 , 9.99 ,19.99 , 29.99 , 49.99, 99.99]),
            'cantidad' => $cantidad,
            'estado' => 2,
            'subcategoria_id' => $subcategoria->id,
            'marca_id' => $marca->id
        ];
    }
}
