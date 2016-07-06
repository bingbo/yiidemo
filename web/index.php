<?php

    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');

    
    require(__DIR__ . '/../vendor/autoload.php');

    // 加载应用配置
    $config = require(__DIR__ . '/../config/web.php');

    // 创建、配置、运行一个应用
    (new yii\web\Application($config))->run();
