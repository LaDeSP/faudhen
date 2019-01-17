@extends('layouts.template')

@section('pagetitle','Cursos')


@section('title','atualizar')
@section('halfContent')
	<form method="POST" action="{{ route('Curso.update',"index") }}" class="container">
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
			'value' => "$curso->nome"
			])
		@endinput
		
		@input([
			'id' => 'codigo' , 
			'nome' => 'codigo',
			'placeholder' => 'codigo do curso',
			'type' => 'number',
			'label' => "codigo do curso",
			'value' => "$curso->id",
			'readonly' => 'readonly'
			])
		@endinput

		@select([
			'id' => 'semestres' , 
			'nome' => 'semestres',
			'label' => 'Semestres',
			'tamanho' => 10
			])
		@endselect
		
		@button(atualizar)
	

	</form>
@endsection
	



