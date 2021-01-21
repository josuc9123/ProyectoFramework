<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\User;
use App\Models\Transacciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        $data3['productos'] = Productos::all();
        $data1['users'] = User::simplePaginate(5);
        $data2['transacciones'] = Transacciones::simplePaginate(5);
        return view('supervisor.supervisor',$data1,$data2)->with('productos',$data3);
              
     }

    public function getUser(){
        return view ('supervisor');

    }
}
