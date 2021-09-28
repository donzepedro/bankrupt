<?php


namespace app\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ErrorAction;

class AmProfileController extends Controller
{
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
                        'roles'=>['arbitr'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect('/main/');
                }
            ],
        ];

    }
    public function actionIndex(){
        return $this->render('profile');
    }

}