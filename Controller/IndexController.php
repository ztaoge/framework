<?php
namespace Controller;
use vendor\Controller\Controller;

class IndexController extends Controller
{
    public function index($param_1, $param_2, $param_3)
    {
        echo 'param_1 = ' . $param_1 . '***param_2 = ' . $param_2 . '***param_3 = ' . $param_3;
    }

    public function test($param)
    {
        echo 'test ' . $param;
    }

    public function t()
    {
        echo 't';
    }

    public function tt()
    {
        $this->display();
    }

}