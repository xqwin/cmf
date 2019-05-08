<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */

namespace XQWIN\CMF\Controllers;


use Illuminate\Http\Request;

class HomeController extends CommonController
{
    public function index(Request $request){
        return view('xqwin::home.index');
    }

    /**
     * Passport管理界面
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function token(Request $request){
        return view('xqwin::home.token');
    }
    
    
    

}
