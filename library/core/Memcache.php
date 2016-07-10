<?php

namespace app\library\core;

require(\Yii::getAlias('@app') . '/vendor/memcache/Clickalicious/Memcached/Client.php');


use Yii;
use \Clickalicious\Memcached\Client;

class Memcache{
    
    private static $instance = null;

    public static function getInstance(){
        if(empty(self::$instance)){
            $conf = Yii::$app->params['memcacheConf'];
            self::$instance = new Client($conf['host'], $conf['port']);
        }
        return self::$instance;
    }
}
