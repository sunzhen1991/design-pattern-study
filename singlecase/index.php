<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 16:34
 */
require_once('User.class.php');
$user1 = User::getInstance();
$user1->age = 23;
$user2 = User::getInstance();
$user2->age = 24;
echo "user1年龄：".$user1->age."<br>";
echo "user2年龄：".$user2->age."<br>";