@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Productos</h1>
            <hr>
            <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">Crear Libro</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Subcategoría</th>
                        <th>Marca</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->estado }}</td>
                        <td>{{ $producto->subcategoria->nombre }}</td>
                        <td>{{ $producto->marca->nombre }}</td>
                        <td>
                            <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-secondary">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline-block;">
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
    </div>
</div>
@endsection
