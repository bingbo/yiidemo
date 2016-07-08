<?php

namespace app\actions\index;

use app\library\base\CAction;

class SayAction extends CAction{

    public function execute(){
        //return $this->controller->render('index');
        //return $this->display('index.tpl');
        $data = array('name'=>'bill');
        $this->displayJson($data);
        //var_dump($this->params);
        //echo "say hello";
    }
}
