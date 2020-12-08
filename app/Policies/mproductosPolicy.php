<?php

namespace App\Policies;

use App\Models\User;
use App\Models\mproductos;
use Illuminate\Auth\Access\HandlesAuthorization;

class mproductosPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\mproductos  $mproductos
     * @return mixed
     */
    public function view(User $user, mproductos $mproductos)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->tipo == "4";
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\mproductos  $mproductos
     * @return mixed
     */
    public function update(User $user, mproductos $mproductos)
    {
        return $user->tipo == "4";
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\mproductos  $mproductos
     * @return mixed
     */
    public function delete(User $user, mproductos $mproductos)
    {
        return $user->tipo == "4";
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\mproductos  $mproductos
     * @return mixed
     */
    public function restore(User $user, mproductos $mproductos)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\mproductos  $mproductos
     * @return mixed
     */
    public function forceDelete(User $user, mproductos $mproductos)
    {
        //
    }
}
