<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:marcas,nombre',
        ]);

        Marca::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('marcas.index')->with('success', 'Marca creada exitosamente.');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:marcas,nombre,'.$id,
        ]);

        $marca = Marca::findOrFail($id);
        $marca->nombre = $request->nombre;
        $marca->save();

        return redirect()->route('marcas.index')->with('success', 'Marca actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect()->route('marcas.index')->with('success', 'Marca eliminada exitosamente.');
    }
}
