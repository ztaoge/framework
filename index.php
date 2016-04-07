<?php
spl_autoload_register('autoload');
function autoload($class) {
    //解析命名空间
    if (false === strpos($class, '\\')) {
        $path = $class . '.php';
        include $path;
    } else {
        $path  = str_replace('\\', '/', $class);
        $path .= '.php';
        include $path;
    }    
}

//加载路由转发类
$route = new route();
//var_dump($route->getUri());
$route->start();
//$route->test();