<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Resources\Json\JsonResource;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonResource::withoutWrapping();

        Relation::morphMap([
            'jot_boolean'     => 'App\Models\Jottingable\JottingableBoolean',
            'jot_date_time'   => 'App\Models\Jottingable\JottingableDateTime',
            'jot_medium_text' => 'App\Models\Jottingable\JottingableMediumText',
            'jot_number'      => 'App\Models\Jottingable\JottingableNumber',
            'jot_string'      => 'App\Models\Jottingable\JottingableString',
            'jot_text'        => 'App\Models\Jottingable\JottingableText',
        ]);
    }
}
