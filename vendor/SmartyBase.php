<?php
namespace vendor;
class SmartyBase
{
    //单一实例
    private static $_instance = null;
    private $_sm = null;

    /**
     * 私有构造函数
     */
    private function __construct()
    {
        $this->_sm = new Smarty();
    }

    /**
     * 静态方法获取smarty实例
     * @return mixed smarty 单一实例
     */
    public static function getSm()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function 
}
