<?php

namespace App\Providers;

use App\Services\Faker\IndonesianNameProvider;
use Illuminate\Support\ServiceProvider;
use Faker\{Factory, Generator};

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function(){
            $faker = Factory::create();
            $faker->addProvider(new IndonesianNameProvider($faker));
            return $faker;
        });
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
