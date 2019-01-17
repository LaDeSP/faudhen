@extends('layouts.template')

@section('pagetitle','Disciplinas')


@section('title','cadastro')
@section('halfContent')
	<form method="POST" action="{{ route('Disciplina.store') }}" class="container">
		@csrf

		@if ($errors->any())
		<div>
			<ul>
			@foreach ($errors->all() as $error)
				<li class="text-danger">{{ $error }}</li>
			@endforeach
			</ul>
		</div>
		
		@endif
		@input([
			'id' => 'nome' , 
			'nome' => 'nome',
			'placeholder' => 'nome da disciplina',
			'type' => 'text',
			'label' => 'nome da disciplina'
			])
		@endinput
		
		@input([
			'id' => 'codigo' , 
			'nome' => 'codigo',
			'placeholder' => 'codigo da disciplina',
			'type' => 'number',
			'label' => 'codigo da disciplina'
			])
		@endinput

		@input([
			'id' => 'carga' , 
			'nome' => 'carga',
			'placeholder' => 'carga horaria da disciplina',
			'type' => 'number',
			'label' => 'carga horaria'
			])
		@endinput
		
		@button(cadastrar)
	

	</form>
@endsection
	



