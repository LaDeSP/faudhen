@extends('layouts.template')

@section('pagetitle','Disciplinas')


@section('title','atualizar')
@section('halfContent')
	<form method="POST" action="{{ route('Disciplina.update',"index") }}" class="container">
		@csrf
		@method('PATCH')

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
			'placeholder' => 'nome do curso',
			'type' => 'text',
			'label' => 'nome do curso',
			'value' => "$disciplina->nome"
			])
		@endinput
		
		@input([
			'id' => 'codigo', 
			'nome' => 'codigo',
			'placeholder' => 'codigo da disciplina',
			'type' => 'number',
			'label' => "codigo da disciplina",
			'value' => "$disciplina->id",
			'readonly' => 'readonly'
			])
		@endinput

		@input([
			'id' => 'carga' , 
			'nome' => 'carga',
			'placeholder' => 'carga horaria da disciplina',
			'type' => 'number',
			'label' => "carga horaria",
			'value' => "$disciplina->carga_horaria"
			])
		@endinput
		
		@button(atualizar)
	

	</form>
@endsection
	



