@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1>Subcategorías</h1>
        <a href="{{ route('subcategorias.create') }}" class="btn btn-primary mb-3">Nueva subcategoría</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Slug</th>
                    <th>Edición Co.</th>
                    <th>Tamaño</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategorias as $subcategoria)
                    <tr>
                        <td>{{ $subcategoria->id }}</td>
                        <td>{{ $subcategoria->nombre }}</td>
                        <td>{{ $subcategoria->imagen }}</td>
                        <td>{{ $subcategoria->slug }}</td>
                        <td>{{ $subcategoria->edicionCo ? 'Sí' : 'No' }}</
                            <td>{{ $subcategoria->tamaño ? 'Sí' : 'No' }}</td>
                            <td>{{ $subcategoria->categoria->nombre }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('subcategorias.edit', $subcategoria) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <form action="{{ route('subcategorias.destroy', $subcategoria) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection