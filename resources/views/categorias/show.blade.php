@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>{{ $categoria->nombre }}</h1>
        <p>ID: {{ $categoria->id }}</p>
        <p>Slug: {{ $categoria->slug }}</p>
        <p>Icono: {{ $categoria->icono }}</p>
        <p>Imagen: {{ $categoria->imagen }}</p>
        <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection