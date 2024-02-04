<?php

namespace App\Providers;

use App\Models\Restaurant\RestaurantSetting;
use App\Models\Scopes\LoginScope;
use App\Models\Scopes\TenantScope;
use App\Models\User;
use App\Repositories\Eloquent\EloquentUserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\TenantService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        $this->app->singleton(TenantService::class, function ($app) {
            return new TenantService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RestaurantSetting::addGlobalScope(new TenantScope());
        User::addGlobalScope(new LoginScope());
    }
}
