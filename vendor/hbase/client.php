<?php
// 引入客户端文件
require_once __DIR__ . "/Thrift/ClassLoader/ThriftClassLoader.php";
use Thrift\ClassLoader\ThriftClassLoader;
use Thrift\Protocol\TBinaryProtocol;
use Thrift\Transport\TSocket;
use Thrift\Transport\TFramedTransport;

$loader = new ThriftClassLoader();
$loader->registerNamespace('Thrift', __DIR__);
$loader->registerNamespace('Swoole', __DIR__);
$loader->registerNamespace('Services', __DIR__);
$loader->registerDefinition('Services',  __DIR__);
$loader->register();

$socket = new TSocket("127.0.0.1", 57310);
$transport = new TFramedTransport($socket);
$protocol = new TBinaryProtocol($transport);
$transport->open();

$client = new Services\HelloSwoole\HelloSwooleClient($protocol);
$message = new Services\HelloSwoole\Message(array('send_uid' => 350749960, 'name' => 'rango'));
$ret = $client->sendMessage($message);
var_dump($ret);

$transport->close();

