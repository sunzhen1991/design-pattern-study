<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 11:40
 */
class FileControl{
    private $deleteFile;
    private $changeFile;
    private $readFile;
    public function __construct($deleteFile,$changeFile,$readFile){
        $this->deleteFile = $deleteFile;
        $this->changeFile = $changeFile;
        $this->readFile = $readFile;
    }
    public function delete(){
        $this->deleteFile->excute();
    }
    public function change(){
        $this->changeFile->excute();
    }
    public function read(){
        $this->readFile->excute();
    }
}