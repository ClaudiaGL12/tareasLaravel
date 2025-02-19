<x-layouts.index :title="$title">
  @if ($errors->any())
    <x-alert message="Parece que ha habido algunos problemas."/>
  @endif
  <x-spending.formAddSp/>
  <div style="mt-5">
    <x-button href="{{route('spending.index')}}">
      Volver a spending
    </x-button>
  </div>
</x-layouts.index>