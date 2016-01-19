<?php namespace Davibennun\LaravelPushNotification;

use Illuminate\Support\ServiceProvider,
    Davibennun\LaravelPushNotification\PushNotification;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;

class LaravelPushNotificationServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $config_path = function_exists('config_path') ? config_path('push-notification.php') : 'push-notification.php';
        if ($this->app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([
                 __DIR__.'/../../config/config.php' => $config_path,
             ], 'config');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('push-notification');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['pushNotification'] = $this->app->share(function($app)
        {
            return new PushNotification();
        });
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

}
