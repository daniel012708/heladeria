<h1>Lista de Ventas</h1>

<a href="{{ route('ventas.create') }}">Nueva venta</a>
<a href="{{ route('productos.index') }}">Ir a productos</a>


<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>

    @foreach($ventas as $v)
    <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->producto->nombre }}</td>
        <td>{{ $v->cantidad }}</td>
        <td>${{ $v->total }}</td>
        <td>{{ $v->fecha }}</td>
        <td>
            <a href="{{ route('ventas.edit', $v->id) }}">Editar</a>

            <form action="{{ route('ventas.destroy', $v->id) }}" 
                method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
