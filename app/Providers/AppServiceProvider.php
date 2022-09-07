<?php

namespace App\Providers;

use App\Contracts\Repositories\QuestionRepositoryContract;
use App\Contracts\Repositories\ResultatRepositoryContract;
use App\Contracts\Repositories\UserRepositoryContract;
use App\Repositories\QuestionRepositories;
use App\Repositories\ResultatRepository;
use App\Repositories\UserRepository;
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
        $this->app->bind(QuestionRepositoryContract::class, QuestionRepositories::class);
        $this->app->bind(ResultatRepositoryContract::class, ResultatRepository::class);
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);

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
