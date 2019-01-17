@extends('layouts.template')

@section('pagetitle','Disciplinas')


@section('title','cadastro')
@section('halfContent')
	<form method="POST" action="{{ route('Sala.store') }}" class="container">
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
			'id' => 'unidade' , 
			'nome' => 'unidade',
			'placeholder' => 'unidade da sala',
			'type' => 'text',
			'label' => 'unidade',
			'value' => ''
			])
		@endinput
		
		@input([
			'id' => 'bloco' , 
			'nome' => 'bloco',
			'placeholder' => 'bloco',
			'type' => 'text',
			'label' => 'bloco',
			'value' => ''
			])
		@endinput

		@input([
			'id' => 'numero' , 
			'nome' => 'numero',
			'placeholder' => 'numero',
			'type' => 'nuber',
			'label' => 'numero',
			'value' => ''
			])
        @endinput
        
        @input([
			'id' => 'vagas' , 
			'nome' => 'vagas',
			'placeholder' => 'vagas',
			'type' => 'number',
			'label' => 'vagas',
			'value' => ''
			])
		@endinput
		
		@button(cadastrar)
	

	</form>
@endsection
	



