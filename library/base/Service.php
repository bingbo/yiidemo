<?php

namespace app\library\base;

use Yii;
use yii\base\UserException;


abstract class Service {

    protected $params = null;
    protected $result = null;

    /**
     * @desc 构造函数，初始化响应结果数据
     * @param void
     * @return void
     */
    public function __construct(){
        $this->result = array(
            'errno' => 0,
            'errmsg' => '',
            'data' => null,
        );
    }

    /**
     * @desc 具体的执行逻辑
     * @param $params 传入处理的相应参数
     * @return $result 返回响应结果
     */
    public function execute($params){
        try{
            $this->setParams($params);
            $this->checkParams();
            $this->process();
        }catch(UserException $e){
            $this->result['errno'] = $e->getCode();
            $this->result['errmsg'] = $e->getMessage();
        }finally{
            return $this->result;
        }
    }

    /**
     * @desc 参数检查处理逻辑
     * @param void
     * @return void
     */
    protected function checkParams(){
        
    }

    /**
     * @desc 设置请求参数
     * @param $params
     * @return void
     */
    protected function setParams($params){
        $this->params = $params;
    }


    /**
     * @desc 执行方法，供子类具体实现
     * @params void
     * @return void
     */
    abstract protected function process();
}
