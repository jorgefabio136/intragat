<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
      
            Gate::define('acess-dashboard', function(User $user){
             return $user->role === 'admin';//role
            });

            Gate::define('acess-satividades', function(User $user){
                return $user->roles === 'root';//roles
               });

               Gate::define('acess-exames', function(User $user){
                return $user->roless === 'root';//roles
               });

               Gate::define('acess', function(User $user){
                return $user->view === 'free';//roles
               });
    
    
    
    }
}
