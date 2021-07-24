<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\CreditorLegal;
/**
 * Description of CreditorLegalController
 *
 * @author zepedro
 */
class CreditorLegalController extends Controller {
    public $layout = 'crmlayout.php';
    
    public function actionIndex(){
       
        $creditor_legal = CreditorLegal::find()->all();
        return $this->render('index',['creditor_legal'=>$creditor_legal]);
    }
    
    public function actionDeleteCreditorLegal(){
        
        $creditor_legal = CreditorLegal::findOne(\Yii::$app->request->get('id'));
        
        if(!$creditor_legal->delete()){
                throw new \yii\web\HttpException(500,'server error,Creditor legal not deleted'); 
            }
            $this->redirect('http://bankrupt/creditor-legal/');
//        echo "<pre>";
//        var_dump( $creditor_legal);
//        echo "</pre>";
//         return $this->render('index',['creditor_legal'=>$creditor_legal]);
    }
    
    public function actionCreateCreditor(){
    
        $creditor_legal = new CreditorLegal();
        if(\Yii::$app->request->isPost){
            
            $creditor_legal->attributes = \Yii::$app->request->post('CreditorLegal');
          
            if(!$creditor_legal->save()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt legal not saved'); 
            }
            $this->redirect('http://bankrupt/creditor-legal/');
        }
        return $this->render('create_creditor_legal',['creditor_legal'=>$creditor_legal]);
    }
    
    public function actionEditCreditor(){
        
        $creditor_legal = CreditorLegal::findOne(\Yii::$app->request->get('id'));
        if(\Yii::$app->request->isPost){
            $creditor_legal->attributes = \Yii::$app->request->post('CreditorLegal');
            if(!$creditor_legal->save()){
                throw new \yii\web\HttpException(500,'server error,Creditorlegal not saved'); 
            }
            $this->redirect('http://bankrupt/creditor-legal/');
//            echo "<pre>";
//            var_dump(\Yii::$app->request->post());
//            echo "</pre>";
            
        }
        return $this->render('edit_creditor_legal',['creditor_legal'=>$creditor_legal]);
    }
 
}
