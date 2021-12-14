<?php

namespace App\Providers;

use App\Models\ModelHasRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\City;
use App\Models\Region;
use App\Models\Country;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

//        Relation::enforceMorphMap([
//            'City' => City::class,
//            'Region' => Region::class,
//            'Country' => Country::class,
//        ]);
    }
}
