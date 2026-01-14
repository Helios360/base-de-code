<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('manage-product', function (User $user, Product $product){
            return $product->user_id === $user->id;
        });
        Gate::define('view-product', function (User $user, Product $product){
            return $product->user_id === $user->id || $product->is_public == true;
        });
    }
}
