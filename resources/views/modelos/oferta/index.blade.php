@extends('layouts.template')

@section('pagetitle','ofertas')


@section('title3','ofertas')
@section('fullContent')
    <table class="table table-borderless">
        <thead>
            <tr>
                <th></th>
                <th class="text-center"><a class="btn-custom btn-c-sm" href="{{ route('Oferta.create') }}">Cadastrar nova Oferta</a></th>	
                <th></th>
            </tr>
            <tr>
                <th>Ano</th>
                <th>Semestre</th>	
                <th>Tipo</th>
                <th>Duração</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($ofertas as $oferta)
                <tr>
                    <td>{{ $oferta->ano}}</td>
                    <td>{{ $oferta->semestre }}</td>
                    <td>{{ $oferta->tipo }}</td>
                    <td>De {{ \Carbon\Carbon::parse($oferta->data_inicio)->format('d/m/Y') }} a {{ \Carbon\Carbon::parse($oferta->data_termino)->format('d/m/Y') }}</td>
                    <td>Cadastrar disciplinas oferecidas</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
		



