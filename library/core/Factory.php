<?php

namespace app\library\core;

class Factory{
    
    private static $instances = array();

    public static function create($cls = '', $args = array()){
        if(empty($cls)){
            return null;
        }
        if(empty(self::$instances[$cls])){
            $class = new \ReflectionClass($cls);
            self::$instances[$cls] = $class->newInstanceArgs($args);
        }
        return self::$instances[$cls];
    }
}
