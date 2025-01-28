{{-- primera forma
<div>
    @switch($anyadirIncome['type'])
        @case('input')
            <input type="button" value="Añadir Income" onclick="window.location.href='{{ $anyadirIncome['enlace'] }}'" class="btn btn-primary"/>
            @break

        @case('button')
            <button type="button" onclick="window.location.href='{{ $anyadirIncome['enlace'] }}'" class="btn btn-primary">Añadir Income</button>
            @break

        @default
            <a href="{{ $anyadirIncome['enlace'] }}" class="bg-white">Añadir Income</a>
    @endswitch
</div> --}}


<div>
    @if($attributes->has('href'))
        <a {{$attributes->has('class')?$attributes:$attributes->merge(['class'=>'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'])}}>
            {{ $slot }}
        </a>    
    @elseif($attributes->has('name'))
        <button type="submit" {{ $attributes->has('class')? $attributes: $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded']) }}>
            {{ $slot }}
        </button>
    @else
        <button type="button" {{ $attributes->has('class')? $attributes: $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded']) }}>
            {{ $slot }}
        </button>
    @endif
</div>

          
