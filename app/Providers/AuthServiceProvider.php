<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('show-products',function(User $user){
          $hasPermission = $user->permissions()->where('title','show-products')->first();
          return $hasPermission?true:false;
        });

        Gate::define('add-supervisor',function(User $user){
            $hasPermission = $user->permissions()->where('title','add-supervisor')->first();
            return $hasPermission?true:false;
          });
        
    }
}
