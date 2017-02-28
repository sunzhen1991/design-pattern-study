<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 20:03
 */
abstract class Subject {
    private $observers = array();
    public function attach($observer){
        array_push($this->observers,$observer);
    }

    public function  detach($observer)
    {
        foreach($this->observers as $k=>$v)
        {
            if($v==$observer)
            {
                unset($this->observers[$k]);
            }
        }
    }

    public function notify(){
        foreach($this->observers as $v)
        {
            $v->update();
        }

    }
}

class TeacherSubject extends Subject{
    public $subject_state;
}