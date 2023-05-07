@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>Nueva categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
                <label for="icono" class="form-label">Icono</label>
                <input type="text" class="form-control" id="icono" name="icono">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Crear categoría</button>
        </form>
    </div>
@endsection
