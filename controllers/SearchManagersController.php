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
use app\models\SROAMInformation;
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
       if(\Yii::$app->request->isPost){
          
//           legal phys   categories
//           0     0   => 2
//           0     1   => 0
//           1     0   => 1
//           1     1   => 2
//            	categories of clients(bankrupt/creditor) 0-phys 1-legal 2-both 	
           $categories = \Yii::$app->request->post("SearchModel")["b_phys"] + \Yii::$app->request->post("SearchModel")["b_legal"];
           if((\Yii::$app->request->post("SearchModel")["b_legal"]== 0)&&(\Yii::$app->request->post("SearchModel")["b_phys"]== 1)){
               $categories = 0;
           }else if((\Yii::$app->request->post("SearchModel")["b_legal"]== 0)&&(\Yii::$app->request->post("SearchModel")["b_phys"]== 0)){
               $categories = 2;
           }
           $job_region = Regions::find()->where(['id'=>\Yii::$app->request->post("SearchModel")["region"]])->one();
           $managers = ArbitrationManager::find()->where([
               'job_region'=> $job_region,
               'bankrupt_categories'=> $categories,
               'government_secret_access' => \Yii::$app->request->post("SearchModel")["goverment_secret"]
               ])->all();
       }
       
       return $this->render('index',['managers'=>$managers,'search_model'=>$search_model]);
    }
    
    public function actionCreditor(){
        
        $search_model = new SearchModel();
        $managers = ArbitrationManager::find()->where(['id'=>'0'])->all();
        if(\Yii::$app->request->isPost){
            
           $categories = \Yii::$app->request->post("SearchModel")["b_phys"] + \Yii::$app->request->post("SearchModel")["b_legal"];
           if((\Yii::$app->request->post("SearchModel")["b_legal"]== 0)&&(\Yii::$app->request->post("SearchModel")["b_phys"]== 1)){
               $categories = 0;
           }else if((\Yii::$app->request->post("SearchModel")["b_legal"]== 0)&&(\Yii::$app->request->post("SearchModel")["b_phys"]== 0)){
               $categories = 2;
           }
            
            
            $job_region = Regions::find()->where(['id'=>\Yii::$app->request->post("SearchModel")["region"]])->one();
            $SRO_name = SROAMInformation::find()->where(['id'=>\Yii::$app->request->post("SearchModel")["SRO_name"]])->one();
            $managers = ArbitrationManager::find()->where([
                'job_region'=>$job_region,
                'SRO_AM_name'=>$SRO_name,
                'bankrupt_categories'=> $categories,
                'government_secret_access' => \Yii::$app->request->post("SearchModel")["goverment_secret"],
                'debtor_categories'=>\Yii::$app->request->post("SearchModel")["debtor_category"]
               ])->all();
        }
        return $this->render('creditor_search',['managers'=>$managers,'search_model'=>$search_model]);
        
    }
    
    public function actionCreditorAmProfile(){
        $search_model = new SearchModel();
        $managers = ArbitrationManager::find()->where(['id'=>0])->all();
        if(\Yii::$app->request->isPost){
            $managers = ArbitrationManager::find()->where(['id'=>\Yii::$app->request->post("SearchModel")['id']])->all();
        }
        return $this->render('creditor_am_profile',['managers'=>$managers,'search_model'=>$search_model]);
    }
    
    public function actionClientAmProfile(){
        $search_model = new SearchModel();
        $managers = ArbitrationManager::find()->where(['id'=>0])->all();
        if(\Yii::$app->request->isPost){
            $managers = ArbitrationManager::find()->where(['id'=>\Yii::$app->request->post("SearchModel")['id']])->all();
        }
        return $this->render('client_am_profile',['managers'=>$managers,'search_model'=>$search_model]);
    }
    
}
