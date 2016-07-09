<?php


// 包含 Yii 类文件
require(__DIR__ . '/yii2/framework/Yii.php');
// 引入第三方库smarty
require(__DIR__ . '/smarty/libs/Smarty.class.php');
//引入redis客户端库
require(__DIR__ . '/predis/autoload.php');
//---------------------引入hbase客户端库----------------------------------
require_once __DIR__ . '/hbase/Thrift/ClassLoader/ThriftClassLoader.php';
$loader = new \Thrift\ClassLoader\ThriftClassLoader();
$loader->registerNamespace('Thrift', __DIR__ . '/hbase');
$loader->registerNamespace('Swoole', __DIR__ . '/hbase');
$loader->registerNamespace('Services', __DIR__ . '/hbase');
$loader->registerDefinition('Services',  __DIR__ . '/hbase');
$loader->register();
//---------------------引入hbase客户端库----------------------------------
//

//---------------------引入memcache客户端库-------------------------------
require_once __DIR__ . '/memcache/Clickalicious/Memcached/Client.php';
//require_once __DIR__ . '/Clickalicious/Memcached/Autoloader.php';
//$mloader = new \Clickalicious\Memcached\Autoloader();
//$mloader->addNamespace('Clickalicious', __DIR__ . '/memcache');
//$mloader->register();
//---------------------引入memcache客户端库-------------------------------
