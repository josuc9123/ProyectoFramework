<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\User;
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
      
        
        $data['users'] = User::simplePaginate(5);
        $data1['productos'] = Productos::simplePaginate(5);
        return view('supervisor.supervisor', $data, $data1);
              
          }

    public function getUser(){
        return view ('supervisor');

    }
}
