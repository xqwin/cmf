<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */

Route::group([
    'prefix'=>!empty(config('cmf.route.prefix')) ? config('xqwin.route.prefix') :'cmf',
    'namespace' => 'XQWIN\CMF\Controllers','middleware'=>['web'],'as' => 'cmf.'], function () {
    Route::get('login','AuthController@showLogin')->name('show.login');
    Route::post('login','AuthController@Login')->name('login');
});
Route::group([
    'prefix'=>!empty(config('cmf.route.prefix')) ? config('xqwin.route.prefix') :'cmf',
    'namespace'=>'XQWIN\CMF',
    'middleware'=>['web','cmf'],
    'as' => 'cmf.'
    ],function($router){

    Route::group(['namespace' => 'Controllers'], function () {
        Route::get('home','HomeController@index')->name('home');
        Route::get('token','HomeController@token')->name('token');
    });

    //rbac
    Route::group(['namespace' => 'Rbac\Controllers'], function () {
        Route::resource('role','RoleController');
        Route::resource('permission','PermissionController');
    });


});

