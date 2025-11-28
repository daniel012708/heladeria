<h1>Nuevo Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="precio" required><br><br>

    <label>Tipo (opcional):</label><br>
    <input type="text" name="tipo"><br><br>

    <label>Stock (opcional):</label><br>
    <input type="number" name="stock"><br><br>

    <button>Guardar</button>
</form>
