<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/27
 * Time: 18:53
 */
require_once('Factory.class.php');
$person = Factory::factoris('Boy');
$person->showBody('thin');
$person->showFace('handsome');