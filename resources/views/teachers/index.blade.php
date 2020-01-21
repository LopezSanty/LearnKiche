@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Maestros
                        @can('teachers.create')
                            <a href="{{ route('teachers.create') }}" class="btn btn-sm btn-primary float-right">
                                Crear
                            </a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Grado asignado</th>
                                    <th colspan="3" style="text-align: center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->nombre }}</td>
                                    <td>{{ $teacher->apellido }}</td>
                                    <td>{{ $teacher->grado }}</td>
                                    <td>
                                        @can('teachers.show')
                                            <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-sm btn-outline-success">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('teachers.edit')
                                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-outline-info">
                                                Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('teachers.destroy')
                                            {!! Form::open([ 'route' => ['teachers.destroy', $teacher->id],
                                             'method'=>'DELETE']) !!}
                                            <button class="btn btn-outline-danger btn-sm" >
                                                Eliminar
                                            </button>
                                            {!! Form::close() !!}
                                        @endcan
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
