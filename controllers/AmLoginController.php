<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\models\LoginModel;
use app\models\Users;
use yii\filters\AccessControl;
use yii\web\Controller;

use app\models\ArbitrationManager;
/**
 * Description of AmLoginController
 *
 * @author zepedro
 */
class AmLoginController extends Controller {
    
    public $layout = 'frontend_layout.php';

    public function behaviors() {
        return [
            'access'=>[
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index'],
                        'roles'=>['?'],
                    ],

                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect('/am-profile/');
                }
            ],
        ];

    }

    public function actionIndex(){
        $users_model = new LoginModel();

        if(!empty(\Yii::$app->request->post('LoginModel')))
        {
            $users = new Users();

//            var_dump(\Yii::$app->request->Post('LoginModel'));
            $users->email = \Yii::$app->request->Post('LoginModel')['login'];
            $users->password = \Yii::$app->request->Post('LoginModel')['password'];

            if($users->login()){
                return $this->redirect('/am-profile/');
            }
        }

        return $this->render('amlogin',['login_form'=>$users_model]);
    }

    public function actionLogOut(){

        \Yii::$app->user->logout();
        return $this->redirect('/am-login/');
    }
}
