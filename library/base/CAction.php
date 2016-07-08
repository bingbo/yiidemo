<?php

namespace app\library\base;

use Yii;
use yii\base\Action;
use yii\base\UserException;


abstract class CAction extends Action{

    protected $params = null;
    public function run(){
        try{
            $this->_initParams();
            return $this->execute();
        }catch(UserException $e){
            $exception = array(
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
            );
            $this->controller->redirect(['index/error', 'msg' => $e->getMessage(), 'code' => $e->getCode()]);
        }
    }

    /**
     * @desc 初始化请求参数
     * @param null
     * @return null
     */
    private function _initParams(){
        $this->params = Yii::$app->request;
    }

    /**
     * @desc 返回json数据
     * @params $data
     * @return null
     */
    protected function displayJson($data){
        header('Content-type: text/javascript');
        if($this->params->get('callback')){
            echo $this->params->get('callback') . '(' . json_encode($data) . ')';
        }else{
            echo json_encode($data);
        }
    }

    /**
     * @desc 渲染模板
     * @params $tpl, $data
     * @return $render
     */
    protected function display($tpl, $data = null){
        return $this->controller->render($tpl, $data);
    }

    /**
     * @desc 执行方法，供子类具体实现
     * @params null
     * @return void
     */
    abstract protected function execute();
}
