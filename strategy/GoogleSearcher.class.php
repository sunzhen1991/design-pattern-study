<?php
/**
 * Created by PhpStorm.
 * User: sunzhen
 * Date: 2017/2/28
 * Time: 15:28
 */
require_once('Searcher.interface.php');
class GoogleSearcher implements Searcher{
    public function search(){
        echo "I use google to search<br>";
    }
}