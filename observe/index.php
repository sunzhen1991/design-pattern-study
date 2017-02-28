<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 20:34
 */
require_once('Subject.php');
require_once('Observer.php');
$sub = new TeacherSubject();
$stu1 = new StudentObserver($sub,'张三');
$stu2 = new StudentObserver($sub,'李四');
$stu3 = new StudentObserver($sub,'王五');
//register
$sub->attach($stu1);
$sub->attach($stu2);
$sub->attach($stu3);
$sub->subject_state = '来了';
$sub->notify();
echo "<hr>";
$sub->detach($stu3);
$sub->subject_state = '又来了';
$sub->notify();