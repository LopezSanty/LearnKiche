@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>
                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $user->name }} </p>
                        <p><strong>Usuario:</strong> {{ $user->username }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
