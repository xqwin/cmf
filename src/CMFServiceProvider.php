<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2019/4/26
 * Time: 10:36
 */

namespace XQWIN\CMF;
use Illuminate\Support\ServiceProvider;

class CMFServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/translations', 'xqwin');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'xqwin');
    }
    public function register(){
        $this->app->singleton('cmf',function(){
            return new CMF;
        });
    }
}
