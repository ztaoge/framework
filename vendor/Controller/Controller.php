<?php
namespace vendor\Controller;

class Controller
{
    public function __construct()
    {
    }

    /**
     * 给前段模板变量
     * @param mixed
     * @param mixed
     * @return void
     */
    public function assign()
    {
        echo 'assign test';
    }

    /**
     * 渲染页面
     * @param string tpl
     * @return void
     */
    protected function display()
    {
        echo 'display test';
    }



} 