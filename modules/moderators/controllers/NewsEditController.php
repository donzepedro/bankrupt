<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\moderators\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\News;
use app\models\UploadForm;
use app\models\UploadFormForEdit;
use app\models\InterestingPage;
use app\models\InterestingPageInterlayer;
/**
 * Description of NewsEditController
 *
 * @author zepedro
 */
class NewsEditController extends Controller {
      
    public $layout = 'crmlayout';
    public function behaviors() {
        return [
            'access'=>[
              'class' => AccessControl::className(),
                'only' => ['index','create-manager','edit-manager','delete-manager','news-edit'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index','create-manager','edit-manager','delete-manager','news-edit'],
                        'roles'=>['@'],
                    ],
                ],
            ],
        ];
       
    }
    public function actionNewsShow(){
        
        $data = News::find()->all();
        
        return $this->render('news_show',['data'=>$data]);
    }
    
    public function actionNewsEdit() {
        $imgupload = new UploadFormForEdit();
        $news = News::find()->where(['id' => \Yii::$app->request->get('id')])->one();
        if (\Yii::$app->request->isPost) {
           
            $imgupload->imageFile = \yii\web\UploadedFile::getInstance($imgupload, 'imageFile');
            if ($imgupload->imageFile !== NULL) {
                $path = NEWS_IMG_FOLDER . $news->id . '/';
                if(!($imgupload->upload($path))){
                    throw new \yii\web\HttpException(500,'server error, Image Saving error');
                }else{
                    $news->attributes = \Yii::$app->request->post('News');
                    $news->img_path = $path . $imgupload->imageFile->name;
                    if (!$news->save()) {
                        throw new \yii\web\HttpException(500, 'server error, data for news not saved');
                    }
                }
            }else{
                $news->attributes = \Yii::$app->request->post('News'); 
                if (!$news->save()) {
                    throw new \yii\web\HttpException(500, 'server error, data for news not saved');
                }
            }
            return $this->redirect('/news-edit/news-show/');
        }

        return $this->render('news_edit', ['imgupload' => $imgupload, 'news' => $news]);
    }

    public function actionNewsCreate(){
        
        $imgupload = new UploadForm();
        $news = new News();
        if(\Yii::$app->request->isPost){
            $news->attributes = \Yii::$app->request->post('News');
            if(!$news->save()){  
                throw new \yii\web\HttpException(500,'server error, data for news not saved');
            } 
            $path = NEWS_IMG_FOLDER . $news->id . '/';
            
            if(!file_exists($path)){
               mkdir($path);
            }
            $imgupload->imageFile = \yii\web\UploadedFile::getInstance($imgupload, 'imageFile');
            if (!($imgupload->upload($path,'newsimg'))) {
                // file is uploaded successfully
                echo 'error upload';
                die;
            }else{
              
                $news->img_path = $path . $imgupload->imageFile->name;
                if(!$news->save()){
                    throw new \yii\web\HttpException(500,'server error, data for news not saved');
                } 
            }
            return $this->redirect('/news-edit/news-show/');
//            echo "<pre>";
//            var_dump(\Yii::$app->request->post());
//            var_dump($imgupload->imageFile->name);
//            echo "</pre>";
        }
        return $this->render('news_create',['imgupload'=>$imgupload,'news'=>$news]);
    }
    
    
    public function actionNewsDelete(){
        $news = News::findOne(\Yii::$app->request->get('id'));
        if ($news == null) {
            throw new \yii\web\HttpException(500, 'server error, record not found');
        }
        if ((file_exists('../web/img/news_img/' . \Yii::$app->request->get('id'))) && (is_dir('../web/img/news_img/' . \Yii::$app->request->get('id')))) {
            unlink($news->img_path);
            rmdir('../web/img/news_img/' . \Yii::$app->request->get('id'));
        }
        if (!$news->delete(false)) {
            throw new \yii\web\HttpException(500, 'server error, some problem durinng deleting');
        }
        if(!empty(\Yii::$app->request->get('page'))){
            $page = '&page=' . \Yii::$app->request->get('page');
        }else{
            $page='';
        }
       $this->redirect('/news-edit/news-show/');
    }
    
    public function actionInterestingPageAdjusting(){
        $interesting_page = InterestingPage::find()->all();
        $news = News::find()->all();
        $interLayer = new InterestingPageInterlayer;
        return $this->render('interesting_pages',['interesting_page'=>$interesting_page,'news'=>$news,'interLayer'=>$interLayer]);
    }
}
