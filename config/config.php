<?php
    define("HG_API_KEY", "cbe31146");
    define("WOEID", "430376");

    spl_autoload_register(function($className){
        $filename = "modules" . DIRECTORY_SEPARATOR . $className . ".php";
        if (!empty($filename)){
            require_once($filename);
        }
    });