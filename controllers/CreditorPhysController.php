<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\CreditorPhys;
/**
 * Description of CreditorPhysController
 *
 * @author zepedro
 */
class CreditorPhysController extends Controller{
    public $layout = 'crmlayout.php';
    
    public function actionIndex(){
        $creditor_phys = CreditorPhys::find()->all();
          
         if(\Yii::$app->request->isPost){
            $edit_creditor_phys = CreditorPhys::find()->where(['id'=>\Yii::$app->request->post('CreditorPhys')['id']])->one();
            $edit_creditor_phys->attributes = \Yii::$app->request->post('CreditorPhys');
            if(!$edit_creditor_phys->save()){
                throw new \yii\web\HttpException(500,'server error, data for Creditor phys not saved'); 
            }
            $creditor_phys = CreditorPhys::find()->all();
           
        }
        return $this->render('index',['creditor_phys'=>$creditor_phys]);
    }
    
    public function actionDeleteCreditorPhys(){
        
        $creditor_phys = CreditorPhys::findOne(\Yii::$app->request->get('id'));
        
        if(!$creditor_phys->delete()){
                throw new \yii\web\HttpException(500,'server error,Creditor phys not deleted'); 
            }
            $this->redirect('http://bankrupt/creditor-phys/');
//        echo "<pre>";
//        var_dump( $creditor_phys);
//        echo "</pre>";
//         return $this->render('index',['creditor_phys'=>$creditor_phys]);
    }
    
    public function actionCreateCreditor(){
         $creditor_phys = new CreditorPhys();
        if(\Yii::$app->request->isPost){
            
            $creditor_phys->attributes = \Yii::$app->request->post('CreditorPhys');
          
            if(!$creditor_phys->save()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt phys not saved'); 
            }
            $this->redirect('http://bankrupt/creditor-phys/');
        }
        return $this->render('create_creditor_phys',['creditor_phys'=>$creditor_phys]);
    }
}
