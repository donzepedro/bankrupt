<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
/**
 * Description of NewsController
 *
 * @author zepedro
 */
class NewsController extends Controller{
    
    public $layout = 'frontend_layout.php';
    
    public function actionIndex(){
        
        return $this->render('newspage');
    }
}
