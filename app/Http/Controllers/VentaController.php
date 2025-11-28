<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
      // LISTAR
    public function index()
    {
        $ventas = Venta::with('producto')->get();
        return view('ventas.index', compact('ventas'));
    }

    // FORMULARIO CREAR
    public function create()
    {
        $productos = Producto::all();
        return view('ventas.create', compact('productos'));
    }

    // GUARDAR
    public function store(Request $request)
    {
        $producto = Producto::find($request->producto_id);

        $total = $producto->precio * $request->cantidad;

        Venta::create([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'total' => $total,
            'fecha' => now()->toDateString()
        ]);

        return redirect()->route('ventas.index');
    }

    // FORMULARIO EDITAR
    public function edit($id)
    {
        $venta = Venta::find($id);
        $productos = Producto::all();

        return view('ventas.edit', compact('venta', 'productos'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $venta = Venta::find($id);
        $producto = Producto::find($request->producto_id);

        $total = $producto->precio * $request->cantidad;

        $venta->update([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'total' => $total,
            'fecha' => $venta->fecha, // no cambia la fecha
        ]);

        return redirect()->route('ventas.index');
    }

    // ELIMINAR
    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();

        return redirect()->route('ventas.index');
    }
}
