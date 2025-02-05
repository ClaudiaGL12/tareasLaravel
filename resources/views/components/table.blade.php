

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Date</th> 
                <th scope="col" class="px-6 py-3">Amount</th>
                <th scope="col" class="px-6 py-3">Category</th>   
                <th scope="col" class="px-6 py-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData as $index => $row)
                @if($index%2 == 0)
                    <tr class="bg-black border-b dark:bg-gray-800 dark:border-gray-700">
                @else
                    <tr class="bg-white border-b dark:bg-white-800 dark:border-gray-700">
                @endif

                @foreach ($row as $index2 => $cell)
                    @if($index2 == 0)
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                        <b>{{$cell}}</b>
                        </th>
                    @else
                        <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                            {{$cell}}
                        </td>
                    @endif
                @endforeach
                    <td>
                        <a href="#" name="editar_{{$index}}">Editar</a>
                        <a href="#" name="borrar_{{$index}}">Borrar</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>