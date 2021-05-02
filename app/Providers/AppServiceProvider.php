<?php

namespace App\Providers;

use App\Repositories\Developer\DeveloperRepository;
use App\Repositories\Developer\DeveloperRepositoryInterface;
use App\Repositories\DeveloperTask\DeveloperTaskRepository;
use App\Repositories\DeveloperTask\DeveloperTaskRepositoryInterface;
use App\Repositories\Provider\ProviderRepository;
use App\Repositories\Provider\ProviderRepositoryInterface;
use App\Repositories\Task\TaskRepository;
use App\Repositories\Task\TaskRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TaskRepositoryInterface::class,TaskRepository::class);
        $this->app->bind(ProviderRepositoryInterface::class,ProviderRepository::class);
        $this->app->bind(DeveloperRepositoryInterface::class,DeveloperRepository::class);
        $this->app->bind(DeveloperTaskRepositoryInterface::class,DeveloperTaskRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
