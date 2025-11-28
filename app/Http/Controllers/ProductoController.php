<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // LISTAR
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', data: compact('productos'));
    }

    // FORMULARIO CREAR
    public function create()
    {
        return view('productos.create');
    }

    // GUARDAR
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    // FORMULARIO EDITAR
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    // ELIMINAR
    public function destroy($id)
    {
        $producto = Producto::find($id);

        if ($producto->ventas()->count() > 0) {
            return back()->with('error', 'No se puede eliminar este producto porque tiene ventas registradas.');
        }

        $producto->delete();

        return redirect()->route('productos.index');
    }
}
