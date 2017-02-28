<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 11:31
 */
function my_autoload ($pClassName) {
    include(__DIR__ . "/" . $pClassName . ".class.php");
}
spl_autoload_register("my_autoload");
$file = new File("test.txt");
$deletefile = new DeleteFile($file);
$changefile = new ChangeFile($file);
$readfile = new ReadFile($file);
$control = new FileControl($deletefile,$changefile,$readfile);
$control->read();
$control->change();
$control->delete();
