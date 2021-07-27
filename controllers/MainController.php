<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
/**
 * Description of MainController
 *
 * @author zepedro
 */
class MainController extends Controller{
    
    public $layout = 'frontend_layout.php';
    
    public function actionIndex() {
        
        return $this->render('index');
    }
    
    public function actionAddress(){
        
        return $this->render('address');
    }
    
    public function actionSearch(){
        return $this->render('search');
    }
    
    public function actionCreditor(){
        return $this->render('creditor');
    }
    
    public function actionManagerCardClient(){
        return $this->render('manager_card_client');
    }
    
    public function actionNews(){
        return $this->render('news');
    }
    
    public function actionNewsRead(){
        return $this->render('news_read');
    }
    
    public function actionSearchCreditor(){
        return $this->render('search_creditor');
    }
    
    public function actionManagerCardCreditor(){
        return $this->render('manager_card_creditor');
    }
    
    public function actionLogin(){
        return $this->render('login');
    }
    
    public function actionProfile(){
        return $this->render('profile');
    }
    
    public function actionSignUp(){
        return $this->render('sign_up');
    }
    
    //put your code here
}
