<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\News;
/**
 * Description of AddressController
 *
 * @author zepedro
 */
class AddressController extends Controller {
    //put your code here
    public $layout = 'frontend_layout.php';
    public function actionIndex(){
        $news = News::find()->all();
        return $this->render('address',['news'=>$news]);
    }
}
