<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\User;


class UserController extends Controller
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

    public function actionDetail(){
        $request = Yii::$app->request;
        $user = User::findOne($request->get('id'));
        return $this->render('detail.tpl',['user' => $user]);
    }

    public function actionEdit(){
        $request = Yii::$app->request;
        $user = User::findOne($request->get('id'));
        return $this->render('edit.tpl',['user' => $user,'csrfToken' => $request->csrfToken]);
    }
    public function actionAdd()
    {
        $request = Yii::$app->request;
        $user = new User();
        $user->name = $request->post('name');
        $user->password = $request->post('password');
        $user->save();
        //return $this->render('index');
        return $this->redirect('/user/index');
    }

    public function actionShow(){
        $request = Yii::$app->request;
        return $this->render('show.tpl',['csrfToken' => $request->csrfToken]);
    }

    public function actionDelete(){
        $request = Yii::$app->request;
        User::findOne($request->get('id'))->delete();
        return $this->redirect('/user/index');
    }

    public function actionUpdate(){
        $request = Yii::$app->request;
        $user = User::findOne($request->post('id'));
        $user->name = $request->post('name');
        $user->password = $request->post('password');
        $user->update();
        return $this->redirect('/user/index');
    }


    

    
}
