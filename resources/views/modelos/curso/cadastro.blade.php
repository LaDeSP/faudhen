@extends('layouts.template')

@section('pagetitle','Cursos')


@section('title','cadastro')
@section('halfContent')
	<form method="POST" action="{{ route('Curso.store') }}" class="container">
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
			'placeholder' => 'nome do curso',
			'type' => 'text',
			'label' => 'nome do curso'
			])
		@endinput
		
		@input([
			'id' => 'codigo' , 
			'nome' => 'codigo',
			'placeholder' => 'codigo do curso',
			'type' => 'number',
			'label' => 'codigo do curso'
			])
		@endinput

		@select([
			'id' => 'semestres' , 
			'nome' => 'semestres',
			'label' => 'Semestres',
			'tamanho' => 10
			])
		@endselect
		
		@button(cadastrar)
	

	</form>
@endsection
	



