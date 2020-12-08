<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\User;
use Illuminate\Http\Facades\DB;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
//formulario del usuario
class UserController extends Controller
{
   public function index(Request $request){
 
   
    return view('supervisor.supervisor');
   }
public function crear(Request $request){
    if(Gate::allows('crear-user'))
    {
        return view('crear');
    }
    return redirect('home');
}
// listado
public function list(){
    switch (Auth::user()->tipo) {
        case '1':
            $data['users'] = User::simplePaginate(5);
            return view('supervisor.usuariosS', $data);
            break;
        case '3':
            $data['users'] = User::select('id','name','email')
            ->where('tipo','>','2')->simplePaginate(5);
            return view('supervisor.usuariosS',$data);
        break;
    
    }
   
}
// guardar
public function save(Request $request){
   $validator = $this->validate($request,
   [
    'name'=> 'required|string|max:255',
   'email' => 'required|string|max:255|email|unique:users'


    ] );
    $userdata = request()->except('_token');
    User::insert($userdata);
    
     return back()->with('usuarioGuardado','Usuario guardado');
    

}
//eliminar
public function delete($id){
    User::destroy($id);
    return back()->with('usuarioEliminado','Usuario Eliminado');
}
//editar
public function editar($id){
    $usuario = User::findOrFail($id);
    return view('editar', compact('usuario'));
}
public function edit(Request $request, $id){
    $datosUsuario = request()->except((['_token', '_method']));
    User::where('id', '=', $id)->update($datosUsuario);
    return back()->with('usuarioModificado','Usuario Modificado');
}
public function mostrar($id){
    $usuario = User::findOrFail($id);
    return view('mostrar', compact('usuario'));
}

}

