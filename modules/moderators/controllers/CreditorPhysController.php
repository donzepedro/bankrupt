<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\moderators\controllers;
use yii\web\Controller;
use app\models\CreditorPhys;
use yii\filters\AccessControl;
/**
 * Description of CreditorPhysController
 *
 * @author zepedro
 */
class CreditorPhysController extends Controller{
    public $layout = 'crmlayout.php';
    
     
    public function behaviors() {
        return [
            'access'=>[
              'class' => AccessControl::className(),
                'only' => ['index','create-creditor','edit-creditor','delete-creditor-phys'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index','create-creditor','edit-creditor','delete-creditor-phys'],
                        'roles'=>['@'],
                    ],
                ],
            ],
        ];
       
    }
    
    public function actionIndex(){
        
        $creditor_phys = CreditorPhys::find()->all();
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
                throw new \yii\web\HttpException(500,'server error,Creditor phys not saved'); 
            }
            $this->redirect('http://bankrupt/creditor-phys/');
        }
        return $this->render('create_creditor_phys',['creditor_phys'=>$creditor_phys]);
    }
     public function actionEditCreditor(){
        
        $creditor_phys = CreditorPhys::findOne(\Yii::$app->request->get('id'));
        if(\Yii::$app->request->isPost){
            $creditor_phys->attributes = \Yii::$app->request->post('CreditorPhys');
            if(!$creditor_phys->save()){
                throw new \yii\web\HttpException(500,'server error,Creditor legal not saved'); 
            }
            $this->redirect('http://bankrupt/creditor-phys/');

        }
        return $this->render('edit_creditor_phys',['creditor_phys'=>$creditor_phys]);
    }
}
