<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class CategoriasController extends Controller
{
    public function crear(){
        
        return view('supervisor.crearC');
    
    }
    // listado
    public function list(){
        $data['categorias'] = Categorias::simplePaginate(5);
        return view('supervisor.categorias', $data);
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,
        [
            'categorias'=> 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
    
    
        ] );
        $catdata = request()->except('_token');
        Categorias::insert($catdata);
        return back()->with('categoriaGuardado','categoria guardado');
    
    }
    //eliminar
    public function delete($id){
        Categorias::destroy($id);
        return back()->with('categoriaEliminado','categoria Eliminado');
    }
    //editar
    public function editar($id){
        $categorias = Categorias::findOrFail($id);
        return view('supervisor.editarC', compact('categorias'));
    }
    public function edit(Request $request, $id){
        $datosCategoria = request()->except((['_token', '_method']));
        Categorias::where('id', '=', $id)->update($datosCategoria);
        return back()->with('categoriaModificado','Categoria Modificado');
    }
    public function mostrarp($tipo){
        //dd($tipo);
    if($tipo == 'audifonos'){
            $data['productos'] = Productos::where('tipo_producto', '=','audifnos')->simplePaginate(5);
            return view('supervisor.productoS', $data);
        }
    if($tipo =='telefonos'){
            $data['productos'] = Productos::where('tipo_producto', '=','telefonos')->simplePaginate(5);
            return view('supervisor.productoS', $data);
        }
    if($tipo == 'electronica'){
            $data['productos'] = Productos::where('tipo_producto', '=','electronica')->simplePaginate(5);
            return view('supervisor.productoS', $data);
        }
    elseif($tipo == 4){
            $data['productos'] = Productos::where('tipo_producto', '=','4.00')->simplePaginate(5);
            return view('supervisor.productoS', $data);

        }     

        
       
        
    }
    
}