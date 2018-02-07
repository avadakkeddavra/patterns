<?php
/**
 * Created by PhpStorm.
 * User: smartit-9
 * Date: 07.02.18
 * Time: 16:38
 */

namespace pool;


class Pool
{
    public static $pool = array();

    /*
     * Pool setter method
     *
     *
     * return current add pool object
     * */
    public function set($key,$value)
    {
        if(!$key || !$value)
        {
            echo 'Exeption: You should to give $key and $value';
            return false;
        }

        if(!isset(self::$pool[$key]))
        {
            self::$pool[$key] = $value;
            return self::$pool[$key];

        }

    }

    public function get($key)
    {
        if(!self::$pool[$key]){
            return 'Exeption: You should to give $key to get [value]';
        }
        return self::$pool[$key];
    }

    public function getAll()
    {
        return self::$pool;
    }

    public function reset($key,$value)
    {
        if($key && $value && self::$pool[$key])
        {
            return self::$pool[$key] = $value;
        }
    }

}