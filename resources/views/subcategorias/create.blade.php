@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>Nueva subcategoría</h1>
        <form action="{{ route('subcategorias.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="text" name="imagen" id="imagen" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="edicionCo">Edición Co.:</label>
                <select name="edicionCo" id="edicionCo" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tamaño">Tamaño:</label>
                <select name="tamaño" id="tamaño" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoría:</label>
                <select name="categoria_id" id="categoria_id" class="form-control" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear subcategoría</button>
        </form>
    </div>
@endsection