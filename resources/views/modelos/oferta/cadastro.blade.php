@extends('layouts.template')

@section('pagetitle','Cursos')


@section('title','cadastro')
@section('halfContent')
	<form method="POST" action="{{ route('Oferta.store') }}" class="container">
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
			'id' => 'ano' , 
			'nome' => 'ano',
			'placeholder' => 'ano da oferta',
			'type' => 'number',
			'label' => 'ano'
			])
		@endinput
		
		@select([
			'id' => 'semestre' , 
			'nome' => 'semestre',
			'label' => 'Semestre',
			'valores' => [
                '1' => 'primeiro',
                '2' => 'segundo'
                ]
			])
		@endselect

		@select([
			'id' => 'tipo' , 
			'nome' => 'tipo',
			'label' => 'tipo',
			'valores' => [
                false => 'regular',
                true => 'especial'
                ]
			])
		@endselect
        
        @input([
			'id' => 'inicio' , 
			'nome' => 'inicio',
			'placeholder' => 'inicio da oferta',
			'type' => 'date',
			'label' => 'data de inicio'
			])
        @endinput
        
        @input([
			'id' => 'termino' , 
			'nome' => 'termino',
			'placeholder' => 'termino da oferta',
			'type' => 'date',
			'label' => 'data de termino'
			])
		@endinput
		
		@button(cadastrar)
	

	</form>
@endsection
	



