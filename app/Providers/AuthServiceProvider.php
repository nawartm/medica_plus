<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-ordonnance', function ($user) {
            return $user->role == 'admin' || $user->role == 'doctor';
        });

        Gate::define('view-certificat', function ($user) {
            return $user->role == 'doctor' || $user->role == 'admin';
        });

        Gate::define('view-consultation', function ($user) {
            return $user->role == 'assistante' || $user->role == 'doctor' || $user->role == 'admin';
        });

        Gate::define('view-RDV', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('view-depense', function ($user) {
            return $user->role == 'admin' || $user->role == 'doctor';
        });

        Gate::define('view-facture', function ($user) {
            return $user->role == 'admin' || $user->role == 'doctor';
        });

        Gate::define('view-Impayee', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('view-Fiche_Patient', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('view-FicheMut', function ($user) {
            return $user->role == 'admin' || $user->role == 'doctor';
        });

        Gate::define('view-Fiche_Examen', function ($user) {
            return $user->role == 'doctor' || $user->role == 'admin';
        });

        Gate::define('manage-users', function ($user) {
            return $user->role == 'admin';
        });

    }

}
