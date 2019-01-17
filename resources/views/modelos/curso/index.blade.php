@extends('layouts.template')

@section('pagetitle','Cursos')


@section('title3','Cursos')
@section('fullContent')
    <table class="table table-borderless">
        
        <thead>
            <tr>
                <th></th>
                <th class="text-center"><a class="btn-custom btn-c-sm " href="{{ route('Curso.create') }}">Cadastrar novo curso</a></th>	
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Código</th>
                <th>Nome</th>	
                <th>Semestres</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->qtd_semestre }}</td>
                    <td>
                        <a class="btn-custom btn-c-sm btn-c-primary" href="{{ route("Curso.edit","$curso->id") }}">editar</a>
                    </td>
                    <td>
                        <a class="btn-custom btn-c-sm btn-c-primary" href="{{ route("Curso.destroy","$curso->id") }}">deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
		



