<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\moderators\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Users;
use app\models\Moderators;
/**
 * Description of LoginController
 *
 * @author zepedro
 */
class LoginController extends Controller{
    
    public $layout = 'loginlayout';
    public function behaviors() {
        return [
            'access'=>[
              'class' => AccessControl::className(),
                'only' => ['index','logout'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index'],
                        'roles'=>['?'],
                    ],
                     [
                        'allow'=>true,
                        'actions' => ['logout'],
                        'roles'=>['admin'],
                    ],
                ],
            ],
        ];
        
    } 
    public function actionIndex(){

        $users= new Users();

         if(!empty(\Yii::$app->request->post('Users')))
        {

            $users->load(\Yii::$app->request->post());

             if($users->login()){
                 return $this->redirect('/moderators/arbitr-manager/');
             }
        }
//        if(\Yii::$app->request->isPost){
//            return $this->redirect('/moderators/login/');
//        }
        return $this->render('index',['users'=>$users]);
//
    }
    
    public function actionLogout(){
        
        \Yii::$app->user->logout();
        return $this->redirect('/moderators/login/');
    }
}
