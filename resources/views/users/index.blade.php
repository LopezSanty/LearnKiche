@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Estudiantes
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th >Nombre</th>
                                    <th colspan="3" style="text-align: center">&nbsp;Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($users as $user)
                                     <tr>
                                         <td>{{ $user->id }}</td>
                                         <td>{{ $user->name }}</td>
                                         <td width="10px">
                                             @can('users.show')
                                              <a href="{{ route('users.show', $user->id) }}"
                                                 class="btn btn-sm btn-outline-success">
                                                  Ver
                                              </a>
                                             @endcan
                                         </td>
                                         <td width="10px">
                                             @can('users.edit')
                                                 <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-sm btn-outline-info">
                                                     Editar
                                                 </a>
                                             @endcan
                                         </td>
                                         <td width="10px">
                                             @can('users.destroy')
                                             {!! Form::open([ 'route' => ['users.destroy', $user->id],
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
                        {{ $users -> render()  }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
