{{--Si el constructor de estos no te pide ningúna variable, podemos añadirlos igual, pero para llamarlos dentro de ellos sería $attributes->get('nomVariable')--}}
<x-layouts.index :title="$title">
  <x-table :tableData="$tableData" :pagina="$pagina"/>
  <div style="mt-5">
    <x-button href="{{route('spending.create')}}">
      Add Spending
    </x-button>
  </div>
</x-layouts.index>