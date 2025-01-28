{{--Si el constructor de estos no te pide ningúna variable, podemos añadirlos igual, pero para llamarlos dentro de ellos sería $attributes->get('nomVariable')--}}
<x-layouts.index :title="$title">
  <x-table :tableData="$tableData"/>

  {{-- primera forma 
    <x-button :anyadirIncome="$anyadirIncome">
    Añadir income
    </x-button> botón anterior 
  --}}

  <div style="mt-4"/>
  <x-button href="https://laravel.com">
    Add income
  </x-button>
  <div style="m-4">
  <x-button href="https://laravel.com" class="clase1 clase2">
    Add income
  </x-button>


</x-layouts.index>