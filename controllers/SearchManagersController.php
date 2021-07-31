<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\ArbitrationManager;
use app\models\Regions;
use app\models\SearchModel;
use \yii\web\Controller;
/**
 * Description of SearchManagersController
 *
 * @author zepedro
 */
class SearchManagersController extends Controller{
    
    public $layout = 'frontend_layout.php';
    
    public function actionIndex(){
        $search_model = new SearchModel();
        $managers = ArbitrationManager::find()->where(['id'=>'0'])->all();
    
//        http://bankrupt/search-managers/?goverment_secret%5D=0&SearchModel%5Bgoverment_secret%5D=1&Search-button=
        
       if(!empty(\Yii::$app->request->get())){
//           echo "<pre>";
//           var_dump(\Yii::$app->request->get("SearchModel")["goverment_secret"]);
//           echo "</pre>";
//           die;
           
//           legal phys   categories
//           0     0   => 2
//           1     0   => 0
//           0     1   => 1
//           1     1   => 2
           
           $categories = \Yii::$app->request->get("SearchModel")["phys"] + \Yii::$app->request->get("SearchModel")["legal"];
           if((\Yii::$app->request->get("SearchModel")["legal"]== 1)&&(\Yii::$app->request->get("SearchModel")["phys"]== 0)){
               $categories = 0;
           }else if((\Yii::$app->request->get("SearchModel")["legal"]== 0)&&(\Yii::$app->request->get("SearchModel")["phys"]== 0)){
               $categories = 2;
           }
           $job_region = Regions::find()->where(['id'=>\Yii::$app->request->get("SearchModel")["region"]])->one();
           $managers = ArbitrationManager::find()->where([
               'job_region'=> $job_region,
               'categories'=> $categories,
               'government_secret_access' => \Yii::$app->request->get("SearchModel")["goverment_secret"]
               ])->all();
       }
       
       return $this->render('index',['managers'=>$managers,'search_model'=>$search_model]);
    }
}
