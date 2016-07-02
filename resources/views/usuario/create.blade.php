@extends('principales.admin')

@section('content')

<h3>Vamo a crear un form</h3>
	<div class="col-md-6 col-md-offset-3">
		{!!Form::open(['route'=>'normal.store', 'method'=>'POST'])!!}
			<div class="form-group">
				{!!Form::label('nombre','Nombre:')!!}
				{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('email','Correo:')!!}
				{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('password','Contraseña:')!!}
				{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contraseña'])!!}
			</div>
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	</div>
@endsection