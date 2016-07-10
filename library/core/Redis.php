<?php

namespace app\library\core;

require(\Yii::getAlias('@app') . '/vendor/predis/autoload.php');


use \Predis\Client;

class Redis{
    
    private static $instance = null;

    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new Client();
        }
        return self::$instance;
    }
}
