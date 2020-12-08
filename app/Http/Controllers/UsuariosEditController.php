<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosEditController extends Controller
{
    
    public function editar($id){
        $users = User::findOrFail($id);
        return view('supervisor.editarUsuario', compact('users'));
    }
    public function edit(Request $request, $id){
        $datosUsuarios = request()->except((['_token', '_method']));
       User::where('id', '=', $id)->update($datosUsuarios);
        return back()->with('usuarioModificado',' ACTUALIZO PERFIL CORRECTAMENTE');
    }
}

