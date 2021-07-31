<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\ArbitrationManager;
use app\models\Regions;
use \yii\web\Controller;
/**
 * Description of SearchManagersController
 *
 * @author zepedro
 */
class SearchManagersController extends Controller{
    
    public $layout = 'frontend_layout.php';
    
    public function actionIndex(){
       if(!empty(\Yii::$app->request->get())){
           
//           legal phys   categories
//           0     0   => 2
//           1     0   => 0
//           0     1   => 1
//           1     1   => 2
           
           $categories = \Yii::$app->request->get('phys') + \Yii::$app->request->get('legal');
           if((\Yii::$app->request->get('legal')== 1)&&(\Yii::$app->request->get('phys')== 0)){
               $categories = 0;
           }else if((\Yii::$app->request->get('legal')== 0)&&(\Yii::$app->request->get('phys')== 0)){
               $categories = 2;
           }
           $job_region = Regions::find()->where(['id'=>\Yii::$app->request->get('region')])->one();
           $managers = ArbitrationManager::find()->where([
               'job_region'=> $job_region,
               'categories'=> $categories,
               'government_secret_access' => \Yii::$app->request->get('gov_sec')
               ])->all();
       }
       
       return $this->render('index',['managers'=>$managers]);
    }
}
