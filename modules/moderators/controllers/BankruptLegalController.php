<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\moderators\controllers;
use yii\web\Controller;
use app\models\BankruptLegal;
use yii\filters\AccessControl;
/**
 * Description of BankruptLegalController
 *
 * @author zepedro
 */
class BankruptLegalController extends Controller{
    
    public $layout = 'crmlayout.php';
    
    public function behaviors() {
        return [
            'access'=>[
              'class' => AccessControl::className(),
                'only' => ['index','create-manager'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index','create-bankrupt','edit-bankrupt','delete-bankrupt-legal'],
                        'roles'=>['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect('/moderators/login/');
                }
            ],
        ];
       
    }
    
    
    public function actionIndex(){
        $bankrupt_legal = BankruptLegal::find()->all();
       
         
        return $this->render('index',['bankrupt_legal'=>$bankrupt_legal]);
    }
    
    
    public function actionDeleteBankruptLegal(){
        
        $bankrupt_legal = BankruptLegal::findOne(\Yii::$app->request->get('id'));
        
        if(!$bankrupt_legal->delete()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt legal not deleted'); 
            }
            $this->redirect(ADMINDOMAIN . '/bankrupt-legal/');
//        echo "<pre>";
//        var_dump( $bankrupt_legal);
//        echo "</pre>";
//         return $this->render('index',['bankrupt_legal'=>$bankrupt_legal]);
    }
    
    public function actionCreateBankrupt(){
        $bankrupt_legal = new BankruptLegal();
        if(\Yii::$app->request->isPost){
            
            $bankrupt_legal->attributes = \Yii::$app->request->post('BankruptLegal');
//            var_dump(\Yii::$app->request->post());
//            die;
            if(!$bankrupt_legal->save()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt legal not saved'); 
            }
            $this->redirect(ADMINDOMAIN . '/bankrupt-legal/');
        }
        return $this->render('create_bankrupt_legal',['bankrupt_legal'=>$bankrupt_legal]);
    }
    public function actionEditBankrupt(){
        
        $bankrupt_legal = BankruptLegal::findOne(\Yii::$app->request->get('id'));
        if(\Yii::$app->request->isPost){
            $bankrupt_legal->attributes = \Yii::$app->request->post('BankruptLegal');
            if(!$bankrupt_legal->save()){
                throw new \yii\web\HttpException(500,'server error,Bankrupt legal not saved'); 
            }
            $this->redirect(ADMINDOMAIN. '/bankrupt-legal/');
//            echo "<pre>";
//            var_dump(\Yii::$app->request->post());
//            echo "</pre>";
            
        }
        return $this->render('edit_bankrupt_legal',['bankrupt_legal'=>$bankrupt_legal]);
    }
    
}
