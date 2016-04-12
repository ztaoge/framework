<?php
spl_autoload_register('autoload');
function autoload($class) {
    $_map = ['smarty'];
    if (in_array($class, $_map)) {

    }
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
/*$route = new route();
$route->start();*/
route::start();


