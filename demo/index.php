<?php

    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');

    // 包含 Yii 类文件
    require(__DIR__ . '/../yii2/framework/Yii.php');
    // 引入第三方库
    require(__DIR__ . '/../vendor/smarty/libs/Smarty.class.php');

    // 加载应用配置
    $config = require(__DIR__ . '/config/web.php');

    // 创建、配置、运行一个应用
    (new yii\web\Application($config))->run();
