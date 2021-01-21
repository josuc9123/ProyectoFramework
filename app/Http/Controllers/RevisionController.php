<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Revision;

class RevisionController extends Controller
{
    public function index()
    {
        $productos = Revision::all();
        return view('revision',compact('productos'));
    }
    public function editar($id)
    {
        $productos = Revision::findOrFail($id);
        return view('revisarP', compact('productos'));
    }
    
    public function update(Request $request, $id)
    {
        $valores = $request->all();
        if(!isset($valores['descripcion'])) $valores['concesionado']=1;
        else $valores['concesionado']=2;
         $registro= Revision::find($id);
        $registro->fill($valores);
        $registro->save();
        return redirect("/revision")->with('mensaje','Revision realizada');
    }
    
    
    
    
}