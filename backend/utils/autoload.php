<?php
spl_autoload_register(
    function($name){
        $paths = [
            __DIR__.'/../../backend/actions/',
            __DIR__.'/../../backend/controllers/',
            __DIR__.'/../../backend/models/',
            __DIR__.'/../../backend/router/',
            __DIR__.'/../../backend/middleware/',
        ];
        foreach($paths as $path){
            $file = $path.$name.'.php';
            if(file_exists($file)){
                include_once $file;
                break;
            }
        }
    }
);
?>