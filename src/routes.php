<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
use \Illuminate\Support\Facades\Route;

Route::get('/cmf', function () {
    echo __file__ . "<hr>";
    return __file__;
});
