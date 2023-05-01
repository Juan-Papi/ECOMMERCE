<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    //guarded define los campos que queremos desabilitar por asignacion masiva
    protected $guarded =['id','created_at','updated_at'];

    //relacion uno a muchos
    public function productos(){
        return $this->hasmany(Producto::class);
    }

    //relacion uno a muchos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
