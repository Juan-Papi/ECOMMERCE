<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;



    //cuando tiene muchos campos(atributos)
    //los sgts no se asignan masivamente    
    protected $guarded =['id','created_at','updated_at'];

    //uno a muchos
    public function tamaños(){
        return $this->hasMany(Tamaño::class);
    }
    
    //uno a muchos inversa
    public function marca(){
       return $this->belongsTo(Marca::class);
    }

    //uno a muchos inversa
    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }

    //relacion muchos a muchos
    public function edicioncos(){
        return $this->belongsToMany(Edicionco::class);
    }

    //relacion uno a muchos polimorficas
    public function images(){
        return $this->morphMany(Image::class,"imageable");
    }
}
