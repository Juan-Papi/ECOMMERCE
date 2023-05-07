@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="my-3">
                        <a href="{{ route('marcas.create') }}" class="btn btn-primary">
                            Crear marca
                        </a>
                    </div>
                    
                    <div class="card-header">Lista de marcas</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marcas as $marca)
                                    <tr>
                                        <td>{{ $marca->id }}</td>
                                        <td>{{ $marca->nombre }}</td>
                                        <td>
                                            <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('marcas.edit', $marca->id) }}">Editar</a>
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
        </div>
    </div>
@endsection
