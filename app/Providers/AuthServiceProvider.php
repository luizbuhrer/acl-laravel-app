<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
{
    $this->registerPolicies();
    Gate::define('gerenciar usuarios', fn ($user) => $user->role === 'admin');
    Gate::define('gerenciar permissoes', fn ($user) => $user->role === 'admin');

    Gate::define('acessar produtos', fn ($user) => $user->role === 'user');
    Gate::define('acessar categorias', fn ($user) => $user->role === 'user');
    Gate::define('acessar marcas', fn ($user) => $user->role === 'user');
}
}
?>