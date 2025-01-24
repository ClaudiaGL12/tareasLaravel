{{--Si el constructor de estos no te pide ningúna variable, podemos añadirlos igual, pero para llamarlos dentro de ellos sería $attributes->get('nomVariable')--}}
<x-layouts.index :title="$title">
  <x-table :tableData="$tableData"/>
  <x-button :anyadirIncome="$anyadirIncome"/>
</x-layouts.index>