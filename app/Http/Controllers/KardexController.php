<?php

namespace App\Http\Controllers;
use App\Models\Kardex;
use App\Models\Productos;
use Illuminate\Http\Request;

class KardexController extends Controller
{
    public function list($id){
        $productos = Productos::where('id','=',$id)->simplePaginate(5);
        return view('supervisor.kardex',compact('productos'));
        //return view('supervisor.kardex', compact('productos'));
      }
    //
}
