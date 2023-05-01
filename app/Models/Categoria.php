<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
  //asignacion masiva
    protected $fillable = ['nombre','slug','imagen','icono'];

   //relacion uno a muchos
    public function subcategorias(){
        return $this->hasmany(Subcategoria::class);
    }

    //muchos a muchos
    public function marcas(){
        return $this->belongsToMany(Marca::class);
    }

    //a travez de
    /**Primer parametro modelo con el que estamos relacionando
     * 2do parametro el modelo intermedio
     */
    public function productos(){
        return $this->hasManyThrough(Producto::class,Subcategoria::class);
    }

}
