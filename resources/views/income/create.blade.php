<x-layouts.index :title="$title">
  @if ($errors->any())
    <x-alert message="Parece que ha habido algunos problemas."/>
  @endif
  <x-income.formAddInc />
  <div style="mt-5">
    <x-button href="{{route('incomes.index')}}">
      Volver a incomes
    </x-button>
  </div>
</x-layouts.index>