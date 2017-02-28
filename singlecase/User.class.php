<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 16:31
 */
class User {
    private static $_instance;
    public $age;
    private function __construct() {
    }
    private function __clone() {
    }
    //访问入口
    static public function getInstance() {
        if(!isset(self::$_instance))
        {
            self::$_instance=new self();
        }

        return self::$_instance;
    }
}
