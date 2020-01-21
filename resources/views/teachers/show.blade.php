@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Datos del maestro</div>
                    <div class="card-body">
                        <p><strong>Nombres: </strong> {{ $teacher->nombre }} </p>
                        <p><strong>Apellido: </strong> {{ $teacher->apellido }} </p>
                        <p><strong>Grado que imparte: </strong> {{ $teacher->grado }} </p>
                        <p><strong>Fecha de nacimiento: </strong> {{ $teacher->fecha_nacimiento }} </p>
                        <p><strong>Direccion: </strong> {{ $teacher->direccion }} </p>
                        <p><strong>Teléfono/Celular: </strong> {{ $teacher->direccion }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
