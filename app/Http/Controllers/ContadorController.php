<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solocontador',['only'=>'index']);
    }
    public function index(){
        return view('supervisor.contador');
    }
    //
    //mira men aqui agregue esto para el contador.
}
