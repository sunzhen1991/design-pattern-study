<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 20:27
 */
abstract class Observer{
    public abstract function update();
}

class StudentObserver extends Observer{
    private $_name;
    private $_subject;
    public function __construct($subject,$name)
    {
        $this->_subject = $subject;
        $this->_name = $name;
    }

    public function update(){
        echo $this->_name.", 老师".$this->_subject->subject_state .'<br>';
    }
}