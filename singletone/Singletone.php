<?php

namespace singletone;

class Singletone
{
    public static $instance;


    public static function getInstance($instance)
    {
        if(self::$instance === null)
        {
            self::$instance = $instance;
        }

        return new Singletone();
    }

    public function __construct(){}
    public function __clone(){}
    public function __wakeup(){}
}