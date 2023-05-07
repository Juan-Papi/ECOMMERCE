@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>Categorías</h1>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear categoría</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th>Icono</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->slug }}</td>
                        <td>{{ $categoria->icono }}</td>
                        <td>{{ $categoria->imagen }}</td>
                        <td>
                            <a href="{{ route('categorias.show', $categoria) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection