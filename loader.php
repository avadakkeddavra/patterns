<?php

class Loader{

    public  function loadClass($class_name)
    {
        $arr = explode('\\', $class_name);

        $patternFolder = array_shift($arr);
        $patternClass = array_shift($arr);

        $file = __DIR__.'/'.lcfirst($patternFolder).'/'. ucfirst($patternClass) .'.php';


        if(is_file($file))
        {
            //echo $file;
            require_once $file;
        }


    }

}

