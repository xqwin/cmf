<?php
/**
 * Created by PhpStorm.
 * User: xcwmoon
 * Date: 2019/5/1
 * Time: 22:43
 */

namespace XQWIN\CMF\Api;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use XQWIN\CMF\Controllers\CommonController;

class RouteController extends CommonController
{
    public function getRouteAll(Request $request){
        $routes = [];
        foreach(Route::getRoutes()->getRoutes() as $k=>$route){
            $routes[$k]['url'] = $route->uri;
            $routes[$k]['methods'] = implode(",",$route->methods);
            $routes[$k]['middleware'] = is_array($route->action['middleware']) ? implode(",",$route->action['middleware']) : $route->action['middleware'];
            $routes[$k]['as'] = empty($route->action['as']) ? '' : $route->action['as'];
            $routes[$k]['controller'] = ($route->action['uses'] instanceof \Closure) ? 'Closure' : $route->action['uses'] ;
            $routes[$k]['unique'] = md5($routes[$k]['url'].$routes[$k]['controller']);
        }
        $rs = [
            'status'=>'success',
            'msg'=>'',
            'data'=>$routes
        ];
        return response()->json($rs);
    }
}
