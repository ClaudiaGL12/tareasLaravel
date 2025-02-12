<x-layouts.index :title="$title">
  {{-- formulario: componente --}}
  <x-income.formAddInc />
  <div style="mt-5">
    <x-button href="{{route('incomes')}}">
      Volver a incomes
    </x-button>
  </div>
</x-layouts.index>