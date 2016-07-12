<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\library\core\Memcache;
use app\library\core\Redis;
use app\library\core\Hbase;

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
        //$memcache = Memcache::getInstance();
        //$memcache->set('email','bill@126.com');
        //var_dump($memcache->get('email'));die;
        //
        //$redis = Redis::getInstance();
        //$redis->set('name','bill');
        //var_dump($redis->get('name'));

        
        /*
        $hbase = Hbase::getInstance();
        $tables = $hbase->showTables();
        var_dump($tables);
         */

         
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

    public function actionTab(){
        return $this->render('tab.tpl');
    }




    

    
}
