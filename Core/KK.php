<?php
/**
 * 框架启动文件
 * User: kewin.cheng
 * Date: 2018/7/5
 * Time: 16:32
 */

class KK
{

    /**
     * 类自动加载器
     * @param $name
     */
    public static function classLoader($name)
    {
        $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $name);
        $class_file = __ROOTDIR__ . DIRECTORY_SEPARATOR . "$class_path.php";

        if(file_exists($class_file)) {
            include_once($class_file);
        }
    }

}

spl_autoload_register(['KK', 'classLoader'], true, true);