<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */

namespace XQWIN\CMF;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\View;

class CMFServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $commands = [
        ];

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [];
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'cmf.auth' => \XQWIN\CMF\Middleware\cmf::class,
        'cmf.api' => \Laravel\Passport\Http\Middleware\CreateFreshApiToken::class,
    ];
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'cmf' => [
            'cmf.auth',
            //'cmf.api'
        ]
    ];
    public function boot(Router $router, Dispatcher $event){
        $this->loadRoutesFrom(__DIR__.'/routes/route.php');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'xqwin');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'xqwin');
        $this->mergeConfigFrom(__DIR__.'/config/xqwin.php','xqwin');
        //$router->aliasMiddleware('cmf.auth', \XQWIN\CMF\Middleware\cmf::class);
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang'),
        ]);
        $this->publishes([
            __DIR__.'/config/xqwin.php' => config_path('xqwin.php')
        ], 'config');
    }
    public function register(){
        $this->app->singleton('cmf',function(){
            return new CMF;
        });
        $this->registerRouteMiddleware();
    }



    /**
     * Register the route middleware.
     *
     * @return void
     */
    protected function registerRouteMiddleware()
    {
        // register route middleware.
        foreach ($this->routeMiddleware as $key => $middleware) {
            app('router')->aliasMiddleware($key, $middleware);
        }
        // register middleware group.
        foreach ($this->middlewareGroups as $key => $middleware) {
            app('router')->middlewareGroup($key, $middleware);
        }
    }
}
