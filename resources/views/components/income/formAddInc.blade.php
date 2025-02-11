<div>
    <h1>Página para añadir un Income</h1>
    <form action="{{route("incomes.store")}}" method="POST">
        @csrf
        <label for="amount">Cantidad:</label>
        <input type="number" name="amount" min="1" value="1" required>
        <label for="category">Categoría:</label>
        <select name="category" id="category">
            <option value="pagas">Pagas</option>
            <option value="ingresos">Ingresos</option>
        </select>
        <br>
        <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 border border-pink-700 rounded" type="submit">Añadir</button>
    </form>
</div>