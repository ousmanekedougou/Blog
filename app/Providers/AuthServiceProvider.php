<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /* les gates sont des fonction de verifications ou d'attribution de droit
        Il sont utiliser pour scuriser des url , cacher des boutton
        */
        
        Gate::resource('posts',PostPolicy::class);
        Gate::define('posts.tag','App\Policies\PostPolicy@tag');
        Gate::define('posts.categorie','App\Policies\PostPolicy@categorie');
    }
}
