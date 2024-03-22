<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Blog;
use App\Policies\BlogPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Blog::class => BlogPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
        // Gate::define('isAdmin', function ($user) {
        //     return $user->role === 'admin';
        // });
        // Gate::define('isUser', function ($user) {
        //     return $user->role === 'user';
        // });
    }
}