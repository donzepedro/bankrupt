<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\BankruptPhys;
/**
 * Description of BankruptPhysController
 *
 * @author zepedro
 */
class BankruptPhysController extends Controller{
    
    public $layout = 'crmlayout.php';
    
    public function actionIndex(){
        $bankrupt_phys = BankruptPhys::find()->all();
          
         if(\Yii::$app->request->isPost){
            $edit_bankrupt_phys = BankruptPhys::find()->where(['id'=>\Yii::$app->request->post('BankruptPhys')['id']])->one();
            $edit_bankrupt_phys->attributes = \Yii::$app->request->post('BankruptPhys');
            if(!$edit_bankrupt_phys->save()){
                throw new \yii\web\HttpException(500,'server error, data for Bankrupt phys not saved'); 
            }
            $bankrupt_phys = BankruptPhys::find()->all();
           
        }
        return $this->render('index',['bankrupt_phys'=>$bankrupt_phys]);
    }
    
    
    public function actionDeleteBankruptPhys(){
        
        $bankrupt_phys = BankruptPhys::findOne(\Yii::$app->request->get('id'));
        
        if(!$bankrupt_phys->delete()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt phys not deleted'); 
            }
            $this->redirect('http://bankrupt/bankrupt-phys/');
//        echo "<pre>";
//        var_dump( $bankrupt_phys);
//        echo "</pre>";
//         return $this->render('index',['bankrupt_phys'=>$bankrupt_phys]);
    }
    public function actionCreateBankrupt(){
        $bankrupt_phys = new BankruptPhys();
        if(\Yii::$app->request->isPost){
            
            $bankrupt_phys->attributes = \Yii::$app->request->post('BankruptPhys');
//            var_dump(\Yii::$app->request->post());
//            die;
            if(!$bankrupt_phys->save()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt phys not saved'); 
            }
            $this->redirect('http://bankrupt/bankrupt-phys/');
        }
        return $this->render('create_bankrupt_phys',['bankrupt_phys'=>$bankrupt_phys]);
    }
}