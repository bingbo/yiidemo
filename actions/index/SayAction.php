<?php

namespace app\actions\index;

use Yii;
use app\library\base\CAction;
use app\library\core\Factory;
use app\services\IndexService;
use yii\base\UserException;

class SayAction extends CAction{

    public function execute(){
        //return $this->controller->render('index');
        //return $this->display('index.tpl');

        //throw new UserException('get data fail', 1000);
        $data = array('name'=>'bill');
        var_dump(YII2_PATH);
        var_dump(Yii::getAlias('@app'));die;
        var_dump(Yii::$app->params['adminEmail']);die;
        $service = Factory::create(IndexService::class);
        $data = $service->execute($this->params->get());
        $this->displayJson($data);
        //var_dump($this->params);
        //echo "say hello";
    }
}
