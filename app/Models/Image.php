<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url','imageable_id','imageable_type'];

    public function imageable(){
        //se indica que se trabajara con relacion polimorfica
        return $this->morphTo();
    }
}
