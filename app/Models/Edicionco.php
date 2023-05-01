<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicionco extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    //relacion de muchos a muchos
    public function productos(){
        return $this->belongsToMany(Producto::class);
    }

    //relacion de muchos a muchos
    public function tamaños(){
        return $this->belongsToMany(Tamaño::class);
    }
}
