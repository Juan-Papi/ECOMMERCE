<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamaño extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','producto_id'];

    //relacion uno a muchos inversa
    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    //relacion de muchos a muchos
    public function edicioncos(){
        return $this->belongsToMany(Edicionco::class);
    }
}
