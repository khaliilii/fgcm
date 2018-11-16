<?php

namespace Khaliilii\Fgcm\Providers;

use Illuminate\Support\ServiceProvider;
use Khaliilii\Fgcm\Facade\Fgcm;

class FgcmServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->app->bind('Fgcm',function (){
            return new Fgcm();
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
