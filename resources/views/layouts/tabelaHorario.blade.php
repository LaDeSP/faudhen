<table id="{{ $id  }}" class="table table-borderless text-center">
    <thead>
        <tr>
            <th>Manha</th>
            <th>Tarde</th>
            <th>Noite</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 5 ; $i++ )
            <tr>
                @for ($j = 1; $j <= 3 ; $j++ )
                    <td>{{ $i }}&ordm; aula
                        <input name="{{ $i.$j }}" id="{{ $i.$j }}" style="display: none;"/>
                    </td>
                    
                @endfor
            </tr>
        @endfor
    <tbody>
</table>