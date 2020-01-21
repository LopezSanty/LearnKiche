@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registro de Maestros</div>
                    <div class="card-body">
                        {!! Form::model($teacher, ['route' => ['teachers.update', $teacher->id],
                          'method'=>'PUT' ]) !!}
                        @include('teachers.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
