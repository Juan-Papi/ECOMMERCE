@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>Editar categoría</h1>
        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria->nombre }}">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $categoria->slug }}">
            </div>
            <div class="mb-3">
                <label for="icono" class="form-label">Icono</label>
                <input type="text" class="form-control" id="icono" name="icono" value="{{ $categoria->icono }}">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $categoria->imagen }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
@endsection