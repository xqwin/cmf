<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
if(!function_exists('isEmail')){
    function isEmail($str){
        $email =  filter_var(trim($str),FILTER_VALIDATE_EMAIL) ? true :false;
        return $email ? $str : false;
    }
}

if(!function_exists('getRouteAll')){
    function getRouteAll(){
        $routes = app('router')->getRoutes()->getRoutes();
        return $routes;
    }
}

