<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solosuper',['only'=>'index']);
    }
    public function index(){
        return view('cliente');
    }
}
