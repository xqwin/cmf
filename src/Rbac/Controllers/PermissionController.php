<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */

namespace XQWIN\CMF\Rbac\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use XQWIN\CMF\Controllers\CommonController;
use XQWIN\CMF\Requests\PermissionPost;

class PermissionController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('xqwin::rbac.permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd(Route::getRoutes()->getRoutes());
        
        return view('xqwin::rbac.permission.create',[
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \XQWIN\CMF\Requests\PermissionPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionPost $request)
    {

        return response()->json([
            $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('xqwin::rbac.permission.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
