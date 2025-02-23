<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Id</th>
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

                @foreach ($row as $key => $cell)
                    @if($key == 'id')
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
                        <a href="{{route($pagina . '.edit', $row['id'])}}" name="editar_{{$index}}" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 border border-green-700">Editar</a>
                        <a href="{{route($pagina . '.destroy', $row['id'])}}" name="borrar_{{$index}}" class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 border border-red-700">Borrar</a>
                        <a href="{{route($pagina . '.show', $row['id'])}}" name="ver_{{$index}}" class="text-white bg-pink-500 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800 border border-pink-700">Ver</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>