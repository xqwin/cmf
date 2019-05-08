<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
//\Laravel\Passport\Passport::$ignoreCsrfToken = true;
Route::group([
    'prefix'=>!empty(config('cmf.route.api.prefix')) ? config('xqwin.route.api.prefix') :'cmf/api',
    'namespace'=>'XQWIN\CMF\Api',
    'middleware'=>['web','cmf.api','auth:api'],
    'as' => 'cmf.api.'
],function(){
    Route::get('routes','RouteController@getRouteAll')->name('routes');
});


