<?php
namespace Ti\Smartfarming;
define('ROOT', 'http://localhost:8080/public');

class Configuration
{
     
    public static function redirection($path){
       return header("Location: " ."/".$path);
    }
    
}