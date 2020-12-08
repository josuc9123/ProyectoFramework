<?php

namespace App\Http\Controllers;
use App\Models\Preguntas;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PreguntasController extends Controller
{
    public function index(Request $request){
       
        $prodata = request()->except('_token');
        Preguntas::insert($prodata);
        return back()->with('preguntaenviada','pregunta enviada');
        
    }
    public function form($id){
       
        $productos = Productos::where('id','=',$id)->findOrFail($id);
        return view('preguntarp', compact('productos'));
    }
    //
}
