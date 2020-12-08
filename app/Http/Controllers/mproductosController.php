<?php

namespace App\Http\Controllers;
use App\Models\mproductos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class mproductosController extends Controller
{
    public function index(Request $request){
      

    if ($request){
        $query = trim($request->get('search'));
        $productos = mproductos::where('Nom_Producto','LIKE','%'. $query .'%')
        ->orderBy('id','asc')
        ->simplePaginate(5);
          
    return view('mproductos', compact('productos'));
     }
     }
      public function crear(){
       return view('supervisor.cliente.crearM');
            
     }
      // listado
    public function list(){
        $data['mproductos'] = mproductos::simplePaginate(5);
        return view('mproductos', $data);
     }
     // guardar
     public function save(Request $request){
      $validator = $this->validate($request,
             [
                  'Nom_Producto'=> 'required|string|max:255',
                  'cantidad' => 'required|string|max:255',
                  'precioU' =>  'required'
            
            
                ] );
                $prodata = request()->except('_token');
                mproductos::insert($prodata);
                return back()->with('productoGuardado','producto guardado');
            
            }
            //eliminar
            public function delete($id){
                mproductos::destroy($id);
                return back()->with('productoEliminado','Producto Eliminado');
            }
            //editar
            public function editar($id){
                $productos = mproductos::findOrFail($id);
                return view('supervisor.cliente.editarM', compact('productos'));
            }
            public function edit(Request $request, $id){
                $datosProducto = request()->except((['_token', '_method']));
               mproductos::where('id', '=', $id)->update($datosProducto);
                return back()->with('productoModificado','producto Modificado');
            }
            
        
            public function store(Request $request)
            {
                if ($request-hasFile('imagen')){
                    $path = $request->file('imagen')-store('public');
                    mproductos::create(['imagen' => $path]);
                }
            }
}
