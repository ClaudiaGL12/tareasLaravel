<x-layouts.index :title="$title">
  {{-- formulario: componente --}}
  <x-spending.formAddSp/>
  <div style="mt-5">
    <x-button href="{{route('spending')}}">
      Volver a spending
    </x-button>
  </div>
</x-layouts.index>