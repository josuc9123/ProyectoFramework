<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    public function list($id){
        $data['categorias'] = Categorias::findOrFail($id);
        return view('supervisor.subcategoria', $data);
    } 
    public function crear($id){
        $data['categorias'] = Categorias::findOrFail($id);
        return view('supervisor.crearsub', $data);
    
    }
    public function saveSub(Request $request){
        $validator = $this->validate($request,
        [
            'categorias'=> 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
    
    
        ] );
        $catdata = request()->except('_token');
        Categorias::insert($catdata);
        return back()->with('categoriaGuardado','categoria guardado');
    
    }
}
