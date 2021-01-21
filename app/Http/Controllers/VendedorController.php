<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Transacciones;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function list(Request $request){
          $data['users'] = User::where('tipo','=','4')->simplePaginate(5);
          $data1['transacciones'] = Transacciones::simplePaginate(5);
        return view('supervisor.vendedor', $data, $data1);
        }
    
    
}
