<?php

/**
 * Created by PhpStorm.
 * User: smartit-9
 * Date: 07.02.18
 * Time: 16:17
 */
namespace home;
use singletone\Singletone;
use pool\Pool;

class Home
{
    public static $token;

    public function __construct()
    {
        self::$token = 'ospjafddinhjNSADJK76y237uha';
    }

    public function index()
    {
        $pool = new Pool();

        $pool->set('home_object','asdasd');

        $pool->reset('home_object','hello');

        dd($pool->getAll());


    }

    protected  function rebuild()
    {
        self::$token = 'token';
    }
}