<?php

namespace Stats4SD\LaravelUi;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                UiCommand::class,
            ]);
        }
    }
}
