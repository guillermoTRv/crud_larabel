@extends('principales.admin')

<?php $message=Session::get('message')  ?>
@if($message == 'store')
	El usuario fue registrado exitosamente
@endif

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
					
			<table class="table">
						<thead>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Operaciones</th>
						</thead>
						@foreach($users as $user)
						<thead>
							<th>{{$user->name}}</th>
							<th>{{$user->email}}</th>
							<th></th>
						</thead>
						@endforeach
			</table>

		</div>
	</div>		
	
@stop