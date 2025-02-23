<x-layouts.index :title="$title" :links="$links">
    @if (sizeof($incomes))
        <h2 class="text-3xl font-bold dark mb-3">Incomes</h2>
        <div class="mb-9">
            <x-table :tableData="$incomes" :pagina="$paginas[0]"></x-table>
        </div>
    @else
        <p>No hay incomes de este tipo</p>
    @endif
    @if (sizeof($spending))
        <h2 class="text-3xl font-bold dark mb-3">Spending</h2>
        <div class="mb-9">
            <x-table :tableData="$spending" :pagina="$paginas[1]"></x-table>
        </div>
    @else 
        <p>No hay spending de este tipo</p>
    @endif
</x-layouts.index>