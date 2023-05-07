@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h2 class="mb-3">Editar Libro</h2>
        <form method="POST" action="{{ route('productos.update', $producto->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
            </div>
           
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $producto->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="{{ \App\Models\Producto::BORRADOR }}" {{ $producto->estado == \App\Models\Producto::BORRADOR ? 'selected' : '' }}>Borrador</option>
                    <option value="{{ \App\Models\Producto::PUBLICADO }}" {{ $producto->estado == \App\Models\Producto::PUBLICADO ? 'selected' : '' }}>Publicado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="subcategoria_id">Subcategoría</label>
                <select class="form-control" id="subcategoria_id" name="subcategoria_id" required>
                    @foreach($subcategorias as $subcategoria)
                        <option value="{{ $subcategoria->id }}" {{ $producto->subcategoria_id == $subcategoria->id ? 'selected' : '' }}>{{ $subcategoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="marca_id">Marca</label>
                <select class="form-control" id="marca_id" name="marca_id" required>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ $producto->marca_id == $marca->id ? 'selected' : '' }}>{{ $marca->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
