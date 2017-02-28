<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 15:51
 */
function my_autoload ($pClassName) {
    include(__DIR__ . "/" . $pClassName . ".class.php");
}
spl_autoload_register("my_autoload");

$baiduer = new BaiduSearcher();
$googler = new GoogleSearcher();
$strategy = new SearchStrategy();
$strategy->find($baiduer);
$strategy->find($googler);