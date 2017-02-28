<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/27
 * Time: 18:48
 */
class Factory{
    public static function factoris($gender){
        if(include_once($gender.'.class.php')){
            $class = $gender;
            return new $class;
        }else {
            throw new Exception('gender not found');
        }
    }
}