@switch($anyadirIncome['type'])
    @case('input')
        <!-- Input button con redirección -->
        <input type="button" value="Añadir Income" onclick="window.location.href='{{ $anyadirIncome['enlace'] }}'" class="btn btn-primary"/>
        @break

    @case('button')
        <!-- Button con redirección -->
        <button type="button" onclick="window.location.href='{{ $anyadirIncome['enlace'] }}'" class="btn btn-primary">Añadir Income</button>
        @break

    @default
        <!-- A link -->
        <a href="{{ $anyadirIncome['enlace'] }}" class="bg-white">Añadir Income</a>
@endswitch