<?php
/**
 * 框架路由实现
 * User: kewin.cheng
 * Date: 2018/7/5
 * Time: 11:22
 */

namespace Core;

class Route
{
    public static function dispatch()
    {
        $requestPathArr = explode('/', $_SERVER['REQUEST_URI']);
        if(!empty($requestPathArr)) {
            $controller = empty($requestPathArr[1])? 'Index' : $requestPathArr[1];
            $action = empty($requestPathArr[2])? 'index': $requestPathArr[2];
        }else{
            $controller = isset($_REQUEST['controller'])? ucfirst(strtolower($_REQUEST['controller'])) : 'Index';
            $action = isset($_REQUEST['action'])? strtolower($_REQUEST['action']) : 'index';
        }

        $_controller = "Controller\\" . $controller .'Controller';
        //var_dump($_controller);exit();
        $obj = new $_controller();
        $obj->$action();
    }


}