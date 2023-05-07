@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>Editar subcategoría</h1>
        <hr>
        <form action="{{ route('subcategorias.update', $subcategoria->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $subcategoria->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="text" name="imagen" id="imagen" class="form-control" value="{{ $subcategoria->imagen }}" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ $subcategoria->slug }}" required>
            </div>
            <div class="form-group">
                <label for="edicionCo">Edición Co.:</label>
                <select name="edicionCo" id="edicionCo" class="form-control">
                    <option value="0" {{ $subcategoria->edicionCo == false ? 'selected' : '' }}>No</option>
                    <option value="1" {{ $subcategoria->edicionCo == true ? 'selected' : '' }}>Sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tamaño">Tamaño:</label>
                <select name="tamaño" id="tamaño" class="form-control">
                    <option value="0" {{ $subcategoria->tamaño == false ? 'selected' : '' }}>No</option>
                    <option value="1" {{ $subcategoria->tamaño == true ? 'selected' : '' }}>Sí</option>
                </select>
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoría:</label>
                <select name="categoria_id" id="categoria_id" class="form-control" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $subcategoria->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar subcategoría</button>
        </form>
    </div>
@endsection