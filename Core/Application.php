<?php
/**
 * Created by PhpStorm.
 * User: kewin.cheng
 * Date: 2018/7/5
 * Time: 11:03
 */

namespace Core;


class Application extends \Core\base\Application
{
    public static function run()
    {

        //echo __METHOD__;
        //echo __CLASS__;

        Route::dispatch();
    }

    public function handleRequest()
    {

    }

}

