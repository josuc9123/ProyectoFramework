<?php

namespace App\Observers;
use\App\Models\Bitacora;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
class ObservaUsuario
{
 protected $name = null;

 public function __construnct(){
     $user = Auth::User();
     if(is_null($user))
        $this->name = 'admin';
        else
        $this->name = $user->nombre;
 }
    /**
     * Handle the Usuario "created" event.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return void
     */
    public function created(Usuario $usuario)
    {
       
        //
    }

    /**
     * Handle the Usuario "updated" event.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return void
     */
    public function updated(Usuario $usuario)
    {
       
     dd("nuevo nombre {$usuario->usuario}");
        //
    }

    /**
     * Handle the Usuario "deleted" event.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return void
     */
    public function deleted(Usuario $usuario)
    {
        //
    }

    /**
     * Handle the Usuario "restored" event.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return void
     */
    public function restored(Usuario $usuario)
    {
        //
    }

    /**
     * Handle the Usuario "force deleted" event.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return void
     */
    public function forceDeleted(Usuario $usuario)
    {
        //
    }
}