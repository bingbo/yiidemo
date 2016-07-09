<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use Thrift\Protocol\TBinaryProtocol;
use Thrift\Transport\TSocket;
use Thrift\Transport\TFramedTransport;

use Services\HelloSwoole;

use app\models\User;

class IndexController extends Controller
{
   
    public $layout = false;

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $users = User::find()->orderBy('name')->all();
        //echo('aaaaaaaaa');
        //return $this->render('index');
        return $this->render('index.tpl',['users' => $users]);
    }

    public function actionHello()
    {
        //$redis = new \Predis\Client();
        //$redis->set('name','bill');
        //var_dump($redis->get('name'));

        $socket = new TSocket("127.0.0.1", 57308);
        $transport = new TFramedTransport($socket);
        $protocol = new TBinaryProtocol($transport);
        $transport->open();

        $client = new Services\HelloSwoole\HelloSwooleClient($protocol);
        $message = new Services\HelloSwoole\Message(array('send_uid' => 350749960, 'name' => 'rango'));
        $ret = $client->sendMessage($message);
        var_dump($ret);

        $transport->close();
        var_dump($socket);die;
        return $this->render('index');
    }

    public function actions(){
        return array(
            'say' => array('class' => 'app\actions\index\SayAction'),
        );
    }
    public function actionError(){
        $request = Yii::$app->request;
        $e = array(
            'msg' => $request->get('msg'),
            'code' => $request->get('code'),
        );
        return $this->render('error.tpl', ['e' => $e]);
    }




    

    
}
