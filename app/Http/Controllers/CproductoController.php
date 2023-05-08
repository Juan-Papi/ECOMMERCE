<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class CproductoController extends Controller
{
    public function show(Producto $producto){
      return view('comproductos.show',compact('producto'));
    }
}
