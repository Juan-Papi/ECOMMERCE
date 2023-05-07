<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {  
        $subcategorias = Subcategoria::all();
        $marcas = Marca::all();
        return view('productos.create',compact('subcategorias'),compact('marcas'));
    }

    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->slug = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->estado = $request->estado;
        $producto->subcategoria_id = $request->subcategoria_id;
        $producto->marca_id = $request->marca_id;
        $producto->save();

        return redirect()->route('productos.ver');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $subcategorias = Subcategoria::all();
        $marcas = Marca::all();
        return view('productos.edit', compact('producto'),compact('subcategorias'),compact('marcas'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->nombre = $request->nombre;
        $producto->slug = $request->slug;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->estado = $request->estado;
        $producto->subcategoria_id = $request->subcategoria_id;
        $producto->marca_id = $request->marca_id;
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
    
}
