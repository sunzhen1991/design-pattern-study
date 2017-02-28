<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 11:26
 */
require_once('Command.interface.php');
require_once('File.class.php');
class ReadFile implements Control{
    private $file;
    public  function __construct(File $file){
        $this->file = $file;
    }
    public function excute(){
        // TODO: Implement excute() method.
        $this->file->readFile();
    }
}