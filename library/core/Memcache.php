<?php

namespace app\library\core;

require(\Yii::getAlias('@app') . '/vendor/memcache/Clickalicious/Memcached/Client.php');



use \Clickalicious\Memcached\Client;

class Memcache{
    
    private static $instance = null;

    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new Client('127.0.0.1');
        }
        return self::$instance;
    }
}
