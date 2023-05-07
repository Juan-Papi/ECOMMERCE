@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $producto->nombre }}</h1>
            <p>{{ $producto->descripcion }}</p>
            <p>Precio: {{ $producto->precio }}</p>
            <p>Cantidad: {{ $producto->cantidad }}</p>
            <p>Estado: {{ $producto->estado }}</p>
            <p>Subcategoría: {{ $producto->subcategoria->nombre }}</p>
            <p>Marca: {{ $producto->marca->nombre }}</p>
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline-block;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
