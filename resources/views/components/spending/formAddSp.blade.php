<div>
    <h1>Página para añadir un spending</h1>
    <form class="max-w-sm mx-auto" action="{{route('spending.store')}}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
            <input type="number" step="any" name="amount" id="amount" name="amount" class="@error('amount') dark:bg-red-200 dark:border-2 border-red-500 dark:border-red-600 @else dark:bg-gray-700 border-gray-300 dark:border-gray-600 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cantidad" value="{{ old('amount')}}" required/>
            @error('amount')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
        <div class="mb-5">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
            <input type="date" name="date" id="date" class="@error('date') dark:bg-red-200 dark:border-2 border-red-500 dark:border-red-600 @else dark:bg-gray-700 border-gray-300 dark:border-gray-600 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fecha" required value="{{ old('date')}}" />
            @error('date')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>        
        <div class="mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría:</label>
            <select name="category" id="category" class="@error('category') dark:bg-red-200 dark:border-2 border-red-500 dark:border-red-600 @else dark:bg-gray-700 border-gray-300 dark:border-gray-600 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Categoria" required">
                <option value="" disabled @if(old('category') == null) selected @endif>Categoría</option>    
                <option value="impuestos" @if(old('category') == 'pagas') selected @endif>Impuestos</option>
                <option value="compras" @if(old('category') == 'ingresos') selected @endif>Compras</option>
            </select>
            @error('category')<p class="text-red-500 text-xs italic">{{$message}}</p>@enderror
        </div>
        <br>
        <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 border border-pink-700 rounded" type="submit">Añadir</button>
    </form>
</div>