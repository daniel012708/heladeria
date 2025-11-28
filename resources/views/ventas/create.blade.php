<h1>Nueva Venta</h1>

<form action="{{ route('ventas.store') }}" method="POST">
    @csrf

    Producto:
    <select name="producto_id">
        @foreach($productos as $p)
            <option value="{{ $p->id }}">{{ $p->nombre }} - ${{ $p->precio }}</option>
        @endforeach
    </select><br>

    Cantidad:
    <input type="number" name="cantidad"><br>

    <button>Guardar</button>
</form>
