<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        return view('recibir',compact('productos'));
    }

    public function Concesionado(Request $request, $id)
    {
        $valores = $request->all();
        //$registro = Usuario::find($id);
        $registro= Producto::find($id);
        if (is_null($registro)) {
            response()->json(["error"=>"Registro no encontrado"], 404);
        }
        $valores['concesionado']=3;
        $registro->fill($valores);
        $registro->save();
        return response()->json($registro->toArray(), 200);
    }
}
  

