<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\News;
/**
 * Description of NewsController
 *
 * @author zepedro
 */
class NewsController extends Controller{
    
    public $layout = 'frontend_layout.php';
    
    public function actionIndex(){
        $news = News::find()->all();
        return $this->render('newspage',['news'=>$news]);
    }
    
    public function actionEachNews(){
       $news = News::find()->all();
        if(filter_var ( \Yii::$app->request->get('id'), FILTER_VALIDATE_INT )){
            $eachnews = News::find()->where(['id'=>\Yii::$app->request->get('id')])->one();
        }else{
            throw new \yii\web\HttpException(500,'server error, GET parametr invalid'); 
        }
        
        return $this->render('eachnews',['eachnews'=>$eachnews,'news'=>$news]);
        
    }
    public function actionIntrestingPages(){
        $news = News::find()->all();
            
            if ((\Yii::$app->request->isGet)) {
                if (filter_var(\Yii::$app->request->get('id'), FILTER_VALIDATE_INT)) {
                    $interesting = News::find()->where(['id' => \Yii::$app->request->get('id')])->one();
                } else {
                    throw new \yii\web\HttpException(500, 'server error, GET parametr invalid');
                }
            }

//            var_dump($intrestingpages[\Yii::$app->request->get('id')]); 
        
        return $this->render('intrestingpages',['news'=>$news,'interesting'=>$interesting]);
    }
}
