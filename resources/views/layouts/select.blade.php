<div class="form-group row">
    <label for="{{ $nome }}" class="col-sm-4 col-form-label text-md-left">{{ $label }}</label>
    <div class=" col-md-8">
        <select id="{{ $id }}" name="{{ $nome }}" class="std-style form-control">
            <option value="">selecione</option> 
            @isset($tamanho)
                @for ($i = 1; $i <= $tamanho; $i++)
                <option value="{{ $i }}" >{{ $i }}</option>
                @endfor
            @else
                @isset($valores)
                    @foreach ($valores as $value => $option)
                    <option value="{{ $value }}" >{{ $option }}</option>
                    @endforeach
                @endisset
            @endisset
        </select>
    </div>
</div>