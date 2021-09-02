<?php

namespace App\Providers;

use App\Repositories\FoodRepository;
use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\PromotionInterface;
use App\Repositories\Interfaces\StoreInterface;
use App\Repositories\Interfaces\UserAuthInterface;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\PromotionRepository;
use App\Repositories\StoreRepository;
use App\Repositories\UserAuthRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserAuthInterface::class, UserAuthRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(FoodInterface::class, FoodRepository::class);
        $this->app->bind(StoreInterface::class, StoreRepository::class);
        $this->app->bind(PromotionInterface::class, PromotionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}