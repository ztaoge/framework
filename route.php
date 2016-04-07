<?php
class route {
    public $host;
    public $request_uri;
    public $path_info;

    public $module;
    public $controller;
    public $params;
    public $action;
    
    public function start() {
        /*$maps = $this->getUri();
        $this->run($maps);*/
        $this->parseUrl();
        $this->run();
    }

    //获取uri地址并解析
    public function getUri() {
        $this->request_uri = $_SERVER['PHP_SELF'];
        $this->path_info = $_SERVER['PATH_INFO'];
        $this->path_info = ltrim($this->path_info, '\/');
        $maps = preg_split('/\//', $this->path_info);
        return $maps;
    }

    //解析路由
    public function parseUrl() {
        $maps = $this->getUri();
        //$this->module = $maps[0];
        $this->controller = $maps[0];
        $this->action = $maps[1];
        $this->params = array_slice($maps, 2);
    }

    //根据路由实例相应控制器
    public function run() {
        $class = 'Controller\\' . ucfirst($this->controller) . 'Controller';
        $controller = new $class();
        call_user_func_array([$controller, $this->action], $this->params);
    }

    //调试方法
    public function test() {
        $this->parseUrl();
        var_dump(ucfirst($this->controller));
        var_dump($this->action);
    }
}