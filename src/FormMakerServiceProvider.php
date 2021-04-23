<?php

namespace MashfiqDev\FormMaker;

use Illuminate\Support\ServiceProvider;

class FormMakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'./views', 'FormElement');
    }
}
