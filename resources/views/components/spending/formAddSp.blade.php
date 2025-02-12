<div>
    <h1>Página para añadir un spending</h1>
    <form action="{{route('spending.store')}}" method="POST">
        @csrf
        <label for="amount">Cantidad:</label>
        <input type="number" name="amount" min="1" value="1" required>
        <label for="category">Categoría:</label>
        <select name="category" id="category">
            <option value="impuestos">Impuestos</option>
            <option value="compras">Compras</option>
        </select>
        <br>
        <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 border border-pink-700 rounded" type="submit">Añadir</button>
    </form>
</div>