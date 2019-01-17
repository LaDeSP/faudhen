@extends('layouts.template')

@section('pagetitle','disciplinas')


@section('title3','disciplinas')
@section('fullContent')
    <table class="table table-borderless">
        <thead>
            <tr>
                <th></th>
                <th class="text-center"><a class="btn-custom btn-c-sm" href="{{ route('Disciplina.create') }}">Cadastrar nova disciplina</a></th>	
                <th></th>
            </tr>
            <tr>
                <th>Código</th>
                <th>Nome</th>	
                <th>Carga horaria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina->id }}</td>
                    <td>{{ $disciplina->nome }}</td>
                    <td>{{ $disciplina->carga_horaria }}</td>
                    <td>
                        <a class="btn-custom btn-c-sm btn-c-primary" href="{{ route("Disciplina.edit","$disciplina->id") }}">editar</a>
                    </td>
                    <td>
                        <a class="btn-custom btn-c-sm btn-c-primary" href="{{ route("Disciplina.destroy","$disciplina->id") }}">deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
		



