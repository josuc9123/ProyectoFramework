<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloencargado',['only'=>'index']);
    }
    public function index(){
        return view('encargado');
    }
}
