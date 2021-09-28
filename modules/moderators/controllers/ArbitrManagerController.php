<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\moderators\controllers;
use yii\web\Controller;
use app\models\ArbitrationManager;
use app\models\ForeignLanguage;
use app\models\Education;
use app\models\UploadForm;
use app\models\UploadFormForEdit;
use app\models\SROAMInformation;
use app\models\Regions;
use yii\filters\AccessControl;
use yii\web\ForbiddenHttpException;


/**
 * Description of ArbitrManagerController
 *
 * @author zepedro
 */
class ArbitrManagerController extends Controller {
    
    public $layout = 'crmlayout.php';
    public $base_url_for_controller = 'bankrupt-legal';
    
    public function behaviors() {
        return [
            'access'=>[
              'class' => AccessControl::class,
                'only' => ['index','create-manager','edit-manager','delete-manager'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index','create-manager','edit-manager','delete-manager'],
                        'roles'=>['admin'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect('/moderators/login/');
                }
            ],
        ];
       
    }
  
    
    public function actionIndex(){
        $arbitr_managers = ArbitrationManager::find()->all();
        return $this->render('index',['data'=>$arbitr_managers]);
    }
    
    
    public function actionEditManager(){
        
        if(!empty(\Yii::$app->request->get('id'))){
            $imgupload = new UploadFormForEdit();
            $regions = Regions::find()->all();
            $SROAminfo = SROAMInformation::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();
            $arbitr_managers = ArbitrationManager::find()->where(['id'=>\Yii::$app->request->get('id')])->one();
            $education = Education::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();
            $foreign_language = ForeignLanguage::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();           
            
            if(\Yii::$app->request->isPost){
                if(\Yii::$app->request->post("DiscardChange-button") == 'discard'){
                    return $this->render('edit_manager',['imgupload'=>$imgupload,'foreign_language'=>$foreign_language,'education'=>$education, 'arbitr_managers'=>$arbitr_managers]);
                }
                $imgupload->imageFile = \yii\web\UploadedFile::getInstance($imgupload, 'imageFile'); // for img save
                if($imgupload->imageFile !== NULL){
                    $path = MANAGERS_IMG_FOLDER . $arbitr_managers->id . '/';
                    if (!($imgupload->upload($path))) {
                        // file is uploaded with error
                       throw new \yii\web\HttpException(500,'server error, Image Saving error');
                    }else{
                        $arbitr_managers->attributes = \Yii::$app->request->post('ArbitrationManager');
                        $arbitr_managers->SRO_AM_name = \Yii::$app->request->post('SROAMInformation')['SRO_name'];
                        $arbitr_managers->path_to_img = $path . $imgupload->imageFile->name;
                       
                        if(!$arbitr_managers->save()){
                            throw new \yii\web\HttpException(500,'server error, data for Arbitr managers not saved'); 
                        }
                    }
                }else{
                    $arbitr_managers->attributes = \Yii::$app->request->post('ArbitrationManager');
                    $arbitr_managers->job_region = Regions::find()->where(['id'=>\Yii::$app->request->post('ArbitrationManager')['job_region']])->one()->region;
                    if(!$arbitr_managers->save()){
                        throw new \yii\web\HttpException(500,'server error, data for Arbitr managers not saved'); 
                    }
                }
                $education->attributes = \Yii::$app->request->post('Education');
                $foreign_language->attributes = \Yii::$app->request->post('ForeignLanguage');
                $SROAminfo->attributes = \Yii::$app->request->post('SROAMInformation');
                if(!$education->save()){
                    throw new \yii\web\HttpException(500,'server error, data for Arbitr Education not saved');
                } 
                if(!$foreign_language->save()){
                    throw new \yii\web\HttpException(500,'server error, data for Arbitr Foreign lang not saved');
                }
                if(!$SROAminfo->save()){
                    throw new \yii\web\HttpException(500,'server error, data for SRO AM not saved');
                }
                return $this->redirect(HOME.'pg=' . \Yii::$app->request->get('pg') . '&page='.\Yii::$app->request->get('page'));
            }
            
            return $this->render('edit_manager',['regions'=>$regions,'SROAminfo'=>$SROAminfo,'imgupload'=>$imgupload,'foreign_language'=>$foreign_language,'education'=>$education, 'arbitr_managers'=>$arbitr_managers]);    
        }
      
        return $this->render('edit_manager',['error'=>'ERROR MESSAGE']);
    }
    
    
    
    
    public function actionCreateManager(){
        $SROAminfo = new SROAMInformation();
        $arbitr_managers = new ArbitrationManager();
        $education = new Education();
        $regions = Regions::find()->all();
        $foreign_language = new ForeignLanguage();
        $imgupload = new UploadForm();
        
        if(\Yii::$app->request->isPost){
//            echo '<pre>';
//            var_dump(\Yii::$app->request->post());
//            echo '</pre>';
           
            $arbitr_managers->attributes = \Yii::$app->request->post('ArbitrationManager');
            $arbitr_managers->SRO_AM_name = \Yii::$app->request->post('SROAMInformation')['SRO_name'];
            $arbitr_managers->job_region = Regions::find()->where(['id'=>\Yii::$app->request->post('ArbitrationManager')['job_region']])->one()->region;
            
            if(!$arbitr_managers->save()){
                
                throw new \yii\web\HttpException(500,'server error, data for Arbitr managers not saved');
            } 
            
            $education->attributes = \Yii::$app->request->post('Education');
            $education->id_am = $arbitr_managers->id;
            
            if(!$education->save()){
                throw new \yii\web\HttpException(500,'server error, data for Arbitr Education not saved');
            } 
            
            $foreign_language->attributes = \Yii::$app->request->post('ForeignLanguage');
            $foreign_language->id_am =$arbitr_managers->id;
            
            if(!$foreign_language->save()){
                throw new \yii\web\HttpException(500,'server error, data for Arbitr Foreign lang not saved');
            } 
            $SROAminfo->attributes = \Yii::$app->request->post('SROAMInformation');
            $SROAminfo->id_am =$arbitr_managers->id;
            
            if(!$SROAminfo->save()){
                    throw new \yii\web\HttpException(500,'server error, data for SRO AM not saved');
                }
            
            $path = MANAGERS_IMG_FOLDER . $arbitr_managers->id . '/';
            
           
            
            if(!file_exists($path)){
               mkdir($path);
            }
            $imgupload->imageFile = \yii\web\UploadedFile::getInstance($imgupload, 'imageFile'); // for img save
            //if some problem during saving img then debug error. 
            if (!($imgupload->upload($path))) {
                // file is uploaded successfully
                echo 'error upload';
                die;
            }else{
              
                $arbitr_managers->path_to_img = $path . $imgupload->imageFile->name;
                if(!$arbitr_managers->save()){
                    throw new \yii\web\HttpException(500,'server error, data for Arbitr managers not saved');
                } 
            }
            
            return $this->redirect(HOME . 'end=1');
        }
        return $this->render('create_manager',['SROAminfo'=>$SROAminfo,'imgupload'=>$imgupload,'foreign_language'=>$foreign_language,'education'=>$education, 'arbitr_managers'=>$arbitr_managers]);
    }
    
    public function actionDeleteManager(){
        $arbitr_managers = ArbitrationManager::findOne(\Yii::$app->request->get('id'));
        $SROAminfo = SROAMInformation::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();
        $education = Education::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();
        $foreign_language = ForeignLanguage::find()->where(['id_am'=>\Yii::$app->request->get('id')])->one();  
        if(($arbitr_managers== null)||($SROAminfo== null)||($education== null)||($foreign_language== null)){
            throw new \yii\web\HttpException(500,'server error, record not found');
        }
        if((file_exists('../web/img/managers_profile_img/' . \Yii::$app->request->get('id')))&&(is_dir('../web/img/managers_profile_img/' . \Yii::$app->request->get('id')))){
            unlink($arbitr_managers->path_to_img);
            rmdir('../web/img/managers_profile_img/' . \Yii::$app->request->get('id'));
            }
            
        if(!$arbitr_managers->delete(false)){
            throw new \yii\web\HttpException(500,'server error, some problem durinng deleting');
        }
        
        if(!empty(\Yii::$app->request->get('page'))){
            $page = '&page=' . \Yii::$app->request->get('page');
        }else{
            $page='';
        }
       $this->redirect(HOME . 'pg='. \Yii::$app->request->get('pg') . $page);
        
    }
}
