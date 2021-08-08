<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\SearchModel;
use \app\models\Regions;
/**
 * Description of MainController
 *
 * @author zepedro
 */
class MainController extends Controller{
    
    public $layout = 'frontend_layout.php';
    
    public function actionIndex() {
        $search_model = new SearchModel();
        $regions = Regions::find()->all();
        if(\Yii::$app->request->isPost){
           
            if(!((preg_match("/^(0|1)$/", \Yii::$app->request->post("SearchModel")['b_phys'])) 
                    && (preg_match("/^(0|1)$/", \Yii::$app->request->post("SearchModel")['b_legal'])) 
                            && (preg_match("/^(0|1)$/", \Yii::$app->request->post("SearchModel")['goverment_secret'])))){
                        throw new \yii\web\HttpException(500,'server error, Some error with checkbox data'); 
            }
            $this->redirect(array('/search-managers/index','SearchModel'=>[
                'region'=>\Yii::$app->request->post("SearchModel")['goverment_secret'],
                'goverment_secret'=>\Yii::$app->request->post("SearchModel")['goverment_secret'],
                'b_legal' =>\Yii::$app->request->post("SearchModel")['b_legal'], //bankrupt category
                'b_phys' =>\Yii::$app->request->post("SearchModel")['b_phys'], //bankrupt category
                ],
                ));
            
        }
        $commentInfo=[
            0=>[
                "capture" => "Просто дали начать снова жить!",
                "textComment"=>"Мне порекомендовала обратиться в компанию коллега еще год назад. Сначала даже не поверила, что избавиться от долгов можно так легко. Решила даже позвонить в другие конторы, однако самым выгодным и адекватным вариантом стал тот, который посоветовала знакомая. Меня порадовала, что компания сама собирает пакет документов, оформляет все за считанные дни. Фирма быстро избавила меня от долгов, и я смогла спокойно жить, работать без звонков коллекторов и нервотрепки.",
                "name" => "Марина Иванова",
                "img" => "bankrut-img2.png"
            ],
            1=>[
                "capture" => "Всем советую!",
                "textComment"=>"Спасибо большое компании по списанию долгов. Процедура прошла законно, прозрачно, легально. В свое время, я брал кредит на собственное дело, но бизнес не пошел и не поехал, а вот долги стали копиться моментально. Естественно, что коллекторы и проблемы не заставили себя ждать. Поэтому и решил обратиться за банкротством, и затем был приятно удивлен, что мне быстро помогли с долгами.								",
                "name" => "Сергей Иванов",
                "img" => "bankrut-img1.png"
            ],
            2=>[
                "capture"=>"Проверенная фирма.",
                "textComment"=>"Отвечаю за то, что говорю. Я сам успешно списал долги, а затем посоветовал знакомым, попавшим в тяжелую жизненную ситуацию, тоже обратиться в эту же компанию. Помогли и мне, и моим друзьям. Естественно, как камень с плеч!",
                "name"=>"Иван Иванов",
                "img"=>"bankrut-img3.png"
            ]
        ];
        return $this->render('index',['search_model'=>$search_model,"commentInfo"=>$commentInfo]);
    }
    
    public function actionCreditor(){
        $search_model = new SearchModel();
        return $this->render('main_creditor',['search_model'=>$search_model]);
    }
    
    public function actionAddress(){
        
        return $this->render('address');
    }
    

    
    public function actionManagerCardClient(){
        return $this->render('manager_card_client');
    }
    
    public function actionNews(){
        return $this->render('news');
    }
    
    public function actionNewsRead(){
        return $this->render('news_read');
    }
    
    
    public function actionManagerCardCreditor(){
        return $this->render('manager_card_creditor');
    }
    
    public function actionLogin(){
        return $this->render('login');
    }
    
    public function actionProfile(){
        return $this->render('profile');
    }
    
    public function actionSignUp(){
        return $this->render('sign_up');
    }
}
