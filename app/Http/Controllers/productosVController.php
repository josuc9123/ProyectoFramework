<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\User;
use App\Models\Transacciones;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class productosVController extends Controller
{
    public function index(Request $request){
      
    if ($request){
      $query = trim($request->get('search'));
      $productos = Productos::where('Nom_Producto','LIKE','%'. $query .'%')
        ->orderBy('id','asc')
        ->simplePaginate(5);
        return view('productosV', compact('productos'));
    }
                  
    }
    
    // listado
    public function list(){
     $data['productos'] = Productos::simplePaginate(5);
        return view('productosV', $data);
     }
     
     public function calificarT(Request $request){
       
      $prodata = request()->except('_token');
      Transacciones::insert($prodata);
      $data['productos'] = Productos::simplePaginate(5);
      return view('productosV', $data);
     }
     public function tran(){
       return view('transaccion');
     }
    
}
