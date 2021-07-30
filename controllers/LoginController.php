<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
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
                        'roles'=>['@'],
                    ],
                ],
            ],
        ];
        
    } 
    public function actionIndex(){
        
        $moderators= new Moderators();
         if(\Yii::$app->request->post('Moderators'))
        {

            $moderators->load(\Yii::$app->request->post());
            
             if($moderators->login()){
                 return $this->redirect('/arbitr-manager/');
             }
        }
        return $this->render('index',['moderators'=>$moderators]);
    }
    
    public function actionLogout(){
        
        \Yii::$app->user->logout();
        return $this->redirect('/login');
    }
}
