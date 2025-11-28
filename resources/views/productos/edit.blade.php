<h1>Editar Producto</h1>

<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nombre:
    <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>

    Precio:
    <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}"><br>

    Tipo:
    <input type="text" name="tipo" value="{{ $producto->tipo }}"><br>

    Stock:
    <input type="number" name="stock" value="{{ $producto->stock }}"><br>

    <button>Actualizar</button>
</form>
