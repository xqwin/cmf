<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */

Route::get('/cmf', function () {
    echo __file__ . "<hr>";
    return __file__;
});
Route::group([
    'prefix'=>!empty(config('cmf.route.prefix')) ? config('cmf.route.prefix') :'cmf',
    'namespace'=>'XQWIN\CMF\Rbac\Controllers',
    'middleware'=>['web'],
    ],function($router){
    $router->resource('role','RoleController');
});

