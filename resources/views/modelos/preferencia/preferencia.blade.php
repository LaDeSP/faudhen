@extends('layouts.template')

@section('pagetitle','Preferencia')
@section('title','Cadastrar preferencia')


@section('fullContent')


<button data-toggle="collapse" data-target="#seg" class=" btn-custom btn-c-sm col text-center">Segunda</button>
<button data-toggle="collapse" data-target="#ter" class=" btn-custom btn-c-sm col text-center">terça</button>
<button data-toggle="collapse" data-target="#qua" class=" btn-custom btn-c-sm col text-center">Quarta</button>
<button data-toggle="collapse" data-target="#qui" class=" btn-custom btn-c-sm col text-center">Quinta</button>
<button data-toggle="collapse" data-target="#sex" class=" btn-custom btn-c-sm col text-center">Sexta</button>

<form action="{{ route('Preferencia.atualizar') }}"  method="POST" class="container-fluid">
    @method('PUT')
    @csrf
    
    <input name="user_id" value="{{ 1 }}" hidden>

    <div id="day">
        <div id="seg" class="collapse show" data-parent="#day">
            @component('layouts.tabelaHorario' , ['id' => '1'] )
            @endcomponent
        </div>
        <div id="ter" class="collapse" data-parent="#day">
            @component('layouts.tabelaHorario' , ['id' => '2'] )
            @endcomponent
        </div>
        <div id="qua" class="collapse" data-parent="#day">
            @component('layouts.tabelaHorario' , ['id' => '3'] )
            @endcomponent
        </div>
        <div id="qui" class="collapse" data-parent="#day">
            @component('layouts.tabelaHorario' , ['id' => '4'] )
            @endcomponent
        </div>
        <div id="sex" class="collapse" data-parent="#day">
            @component('layouts.tabelaHorario' , ['id' => '5'] )
            @endcomponent
        </div>
    </div>

</form>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection