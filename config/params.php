<?php

$redisConf = require(__DIR__ . '/redis.conf.php');
$memcacheConf = require(__DIR__ . '/memcache.conf.php');
$hbaseConf = require(__DIR__ . '/hbase.conf.php');
return [
    'adminEmail' => 'admin@example.com',
    'redisConf' => $redisConf,
    'memcacheConf' => $memcacheConf,
    'hbaseConf' => $hbaseConf,
];
