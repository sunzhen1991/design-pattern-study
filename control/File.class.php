<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 11:06
 */
class File{
    private $fileNmae;
    public function __construct($str){
        $this->fileNmae = $str;
    }

    public function readFile(){
        echo "now you are reading file: ".$this->fileNmae."</br>";
        //read file
    }
    public function deleteFile(){
        echo "Are u sure to delete File: ".$this->fileNmae."</br>";
        //delete file
    }
    public function changeFile(){
        echo "You can change file now: ".$this->fileNmae."</br>";
    }
}