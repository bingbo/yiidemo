<?php

namespace app\actions\index;

use app\library\base\CAction;
use yii\base\UserException;

class SayAction extends CAction{

    public function execute(){
        //return $this->controller->render('index');
        //return $this->display('index.tpl');
        throw new UserException('get data fail', 1000);
        $data = array('name'=>'bill');
        $this->displayJson($data);
        //var_dump($this->params);
        //echo "say hello";
    }
}
