<?php

include_once 'includes'.DIRECTORY_SEPARATOR.'config.php';

spl_autoload_register(function($class_name) {
    $class_file = 'vendor'.DIRECTORY_SEPARATOR.$class_name.'.php';
    if(file_exists($class_file)){
        include_once $class_file;
        return true;
    }
    return false;
});
    