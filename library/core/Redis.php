<?php

namespace app\library\core;

require(\Yii::getAlias('@app') . '/vendor/predis/autoload.php');

use Yii;
use \Predis\Client;

class Redis{
    
    private static $instance = null;

    public static function getInstance(){
        if(empty(self::$instance)){
            $conf = Yii::$app->params['redisConf'];
            self::$instance = new Client($conf['host'], $conf['port']);
        }
        return self::$instance;
    }
}
