<?php


namespace app\controllers;


use yii\web\Controller;

class AmRegistrationController extends Controller
{
    public $layout = 'frontend_layout.php';


    public function actionIndex(){

        return $this->render('registration');
    }

}