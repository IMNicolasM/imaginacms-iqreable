<?php

namespace Modules\Iqreable\Providers;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Iqreable\Listeners\RegisterIqreableSidebar;

class IqreableServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterIqreableSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            // append translations
        });


    }

    public function boot()
    {
       
        $this->publishConfig('iqreable', 'config');
        $this->publishConfig('iqreable', 'crud-fields');

        $this->mergeConfigFrom($this->getModuleConfigFilePath('iqreable', 'settings'), "asgard.iqreable.settings");
        $this->mergeConfigFrom($this->getModuleConfigFilePath('iqreable', 'settings-fields'), "asgard.iqreable.settings-fields");
        $this->mergeConfigFrom($this->getModuleConfigFilePath('iqreable', 'permissions'), "asgard.iqreable.permissions");

        //$this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Iqreable\Repositories\QrRepository',
            function () {
                $repository = new \Modules\Iqreable\Repositories\Eloquent\EloquentQrRepository(new \Modules\Iqreable\Entities\Qr());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Iqreable\Repositories\Cache\CacheQrDecorator($repository);
            }
        );
// add bindings

    }


}
