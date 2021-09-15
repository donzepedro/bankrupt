<?php


namespace app\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;

class AmProfileController extends Controller
{
    public $layout = 'frontend_layout.php';
    public function behaviors() {
        return [
            'access'=>[
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index'],
                        'roles'=>['@'],
                    ],
                ],
            ],
        ];

    }
    public function actionIndex(){
        return $this->render('profile');
    }

}