<div class="form-group">
    {{ Form::label('nombre', 'Nombres: ') }}
    {{ Form::text('nombre', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('apellido', 'Apellidos: ') }}
    {{ Form::text('apellido', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('grado', 'Grado que imparte: ') }}
    {{ Form::select('grado', ['primero primaria' => '1ro Primaria',
                              'segundo primaria' => '2do Primaria',
                              'tercero primaria' => '3ro Primaria',
                              'cuarto primaria' => '4to Primaria',
                              'quinto primaria' => '5to Primaria',
                              'sexto primaria' => '6to Primaria'
                              ], null, ['placeholder' => 'Selecciona el grado ...', 'class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_nacimiento', 'Fecha de nacimiento: ') }}
    {{ Form::date('fecha_nacimiento', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('direccion', 'Direccion: ') }}
    {{ Form::text('direccion', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('telefono', 'Telefono/Celular: ') }}
    {{ Form::text('telefono', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-success']) }}
</div>
