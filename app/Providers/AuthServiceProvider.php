<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Categorias' => 'App\Policies\CategoriasPolicy',
         'App\Models\Productos' => 'App\Policies\ProductosPolicy',
         'App\Models\User' => 'App\Policies\AnonimoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('crear-user', function ($user) {
          return $user->tipo == "1";
        });
        Gate::define('categorias', function ($user) {
          return $user->tipo == "1";
        });
        Gate::define('productos', function ($user) {
          return $user->tipo == "1";
        });
        Gate::define('user', function ($user) {
          return $user->tipo == "4";
        });
        Gate::define('mproductos', function ($user) {
          return $user->tipo == "4";
        });
        Gate::define('update', function ($user) {
          return $user->tipo == "3";
        });
     }
}
