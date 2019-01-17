@extends('layouts.template')

@section('pagetitle','salas')


@section('title3','salas')
@section('fullContent')
    <table class="table table-borderless">
        
        <tr>
            <th></th>
            <th class="text-center"><a class="btn-custom btn-c-sm" href="{{ route('Sala.create') }}">Cadastrar nova sala</a></th>	
            <th></th>
        </tr>
        <tr>
            
        </tr>
        
        @foreach ($salas as $sala)
            <tr>
                <td>{{ 'Unidade '.$sala->unidade}}</td>
                <td>{{ $sala->nome}}</td>
                <td>{{ $sala->vagas}}</td>
            </tr>
        @endforeach
        
    </table>
@endsection
		



