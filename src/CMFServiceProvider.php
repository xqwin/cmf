<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
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
        $this->mergeConfigFrom(__DIR__.'/config.php','xqwin');
    }
    public function register(){
        $this->app->singleton('cmf',function(){
            return new CMF;
        });
    }
}
