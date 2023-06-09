<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //muchos a muchos
    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }
    //uno a muchos
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
