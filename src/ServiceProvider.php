<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-10-14
 * Time: 下午 04:56
 */
namespace Hym510\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('weather.weather'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/weather.php' => config_path('weather.php'),
        ]);
    }
}