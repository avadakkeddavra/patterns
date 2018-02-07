<?php
/**
 * Created by PhpStorm.
 * User: smartit-9
 * Date: 07.02.18
 * Time: 16:09
 */
namespace core;

class Routing{

    public static function execute()
    {
        $controllerName = 'home';
        $actionName = 'index';
        $piecesOfUrl = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($piecesOfUrl[1]))
        {
            $controllerName = $piecesOfUrl[1];
        }
        if (!empty($piecesOfUrl[2]))
        {
            $actionName = $piecesOfUrl[2];
        }

        $controller =  $controllerName.'\\' . ucfirst($controllerName);


        if(class_exists($controller))
        {
            $controller = new $controller($controllerName);
            if(method_exists($controller,$actionName)){
                $controller->$actionName();
            }
        }

    }

}
