<h1>Editar Venta</h1>

<form action="{{ route('ventas.update', $venta->id) }}" method="POST">
    @csrf
    @method('PUT')

    Producto:
    <select name="producto_id">
        @foreach($productos as $p)
            <option value="{{ $p->id }}">
                @if($venta->producto_id == $p->id) selected @endif>
                {{ $p->nombre }} - ${{ $p->precio }}
            </option>
        @endforeach
    </select><br>

    Cantidad:
    <input type="number" name="cantidad" value="{{ $venta->cantidad }}"><br>

    <button>Actualizar</button>
</form>
