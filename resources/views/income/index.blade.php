{{--Si el constructor de estos no te pide ningúna variable, podemos añadirlos igual, pero para llamarlos dentro de ellos sería $attributes->get('nomVariable')--}}
<x-layouts.index :title="$title">
  <x-table :tableData="$tableData"/>

  {{-- primera forma 
    <x-button :anyadirIncome="$anyadirIncome">
    Add income
    </x-button> botón anterior 
  --}}
  {{-- para comprobar que funciona
  <div style="m-5">
    <x-button href="https://laravel.com" class="clase1 clase2">
      Add income
    </x-button>
  </div>
  --}}

  <div style="mt-5">
    <x-button href="{{route('incomes.create')}}">
      Add income
    </x-button>
  </div>
</x-layouts.index>