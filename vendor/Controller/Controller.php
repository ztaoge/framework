<?php
namespace vendor\Controller;
use vendor\Smarty;
class Controller
{
    protected $view = null;
    public function __construct()
    {
        $this->view = SmartyBase::getSm();
    }

    /**
     * 给前端模板变量
     * @param mixed name 要显示模板的值
     * @param mixed value 变量的值
     * @return void
     */
    protected function assign($name, $value)
    {
        $this->view->assign($name, $vlaue);
    }

    /**
     * 渲染页面
     * @param string tpl 默认为当前空控制器下的页面
     * @return void
     */
    protected function display($tpl = '')
    {
        if (empty($tpl)) {
            $dir = 'view/' . ltrim(__METHOD__, __CLASS__ . '::') . '.php';
        } else {
            $dir = 'view/' . $tpl . '.php';
        }
        $this->view->display($dir);
    }



} 
