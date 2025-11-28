<h1>Lista de Productos</h1>

<a href="{{ route('productos.create') }}">Nuevo producto</a>
<a href="{{ route('ventas.index') }}">Ir a ventas</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    @foreach($productos as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nombre }}</td>
        <td>{{ $p->precio }}</td>
        <td>{{ $p->tipo }}</td>
        <td>{{ $p->stock }}</td>
        <td>
            <a href="{{ route('productos.edit', $p->id) }}">Editar</a>

            <form action="{{ route('productos.destroy', $p->id) }}"
                  method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

