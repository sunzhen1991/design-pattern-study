<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/27
 * Time: 18:41
 */
require_once('People.Interface.php');
class Boy implements People{
    public function  showBody($body)
    {
        // TODO: Implement showBody() method.
        echo "his body is ".$body.'</br>';
    }

    public function showFace($face)
    {
        // TODO: Implement showFace() method.
        echo "he looks like ".$face.'</br>';
    }
}