<?php

namespace Jobins\DDDCommand;

use Illuminate\Support\ServiceProvider;
use Jobins\DDDCommand\Commands\ControllerMakeCommand;
use Jobins\DDDCommand\Commands\FormRequestMakeCommand;
use Jobins\DDDCommand\Commands\ModelMakeCommand;
use Jobins\DDDCommand\Commands\TestMakeCommand;

/**
 * Class DDDServiceProvider
 * @package Jobins\DDDCommand
 */
class DDDServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/ddd.php',
            'ddd'
        );
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands(
            [
                ControllerMakeCommand::class,
                FormRequestMakeCommand::class,
                ModelMakeCommand::class,
                TestMakeCommand::class,
            ]
        );
    }
}
