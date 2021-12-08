<?php
namespace App;

use Illuminate\Support\Facades\App;

class PostCard{


    public static function resoveFacades($name){

        return  App()[$name];
    }
    
    public static function __callStatic($method, $arguments)
    {
        return (self::resoveFacades('PostCard'))
        ->$method(...$arguments);
        // dump(App()["PostCard"]);
        // dump($arguments);
    }

}