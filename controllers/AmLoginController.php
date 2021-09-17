<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Users;
use yii\web\Controller;

use app\models\ArbitrationManager;
/**
 * Description of AmLoginController
 *
 * @author zepedro
 */
class AmLoginController extends Controller {
    
    public $layout = 'frontend_layout.php';

    public function actionIndex(){
        $users_model = new Users();

        if(\Yii::$app->request->isPost){
            var_dump(\Yii::$app->request->Post());
        }

        return $this->render('amlogin',['login_form'=>$users_model]);
    }
}
