<?php


namespace app\controllers;


use app\models\RegistrationModel;
use app\models\UploadForm;
use app\models\UploadFormForEdit;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Users;
use app\models\ArbitrationManager;
use app\models\ForeignLanguage;
use app\models\Education;
use app\models\SROAMInformation;

class AmRegistrationController extends Controller
{
    public $layout = 'frontend_layout.php';

    public function behaviors() {
        return [
            'access'=>[
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'allow'=>true,
                        'actions' => ['index'],
                        'roles'=>['?'],
                    ],

                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect('/am-profile/');
                }
            ],
        ];

    }

    public function actionIndex(){
        $registration_model =new RegistrationModel();
        $arb_managers = new ArbitrationManager();
        $education = new Education();
        $SRO = new SROAMInformation();
        $foreign_language = new ForeignLanguage();
        $user = new Users();


        if(\Yii::$app->request->isPost){
            $registration_model->load(\Yii::$app->request->Post());
            $arb_managers->load($registration_model);

            foreach ($arb_managers as $k=>$v){
                if(property_exists($registration_model,$k)){
                    $arb_managers->$k = $registration_model->$k;
                }
            }
            foreach ($SRO as $k=>$v){
                if(property_exists($registration_model,$k)){
                    $SRO->$k = $registration_model->$k;
                }
            }
            foreach ($education as $k=>$v){
                if(property_exists($registration_model,$k)){
                    $education->$k = $registration_model->$k;
                }
            }
            foreach ($foreign_language as $k=>$v){
                if(property_exists($registration_model,$k)){
                    $foreign_language->$k = $registration_model->$k;
                }
            }
            echo "<pre>";
            var_dump($arb_managers);
            echo "</pre>";
            echo "<pre>";
            var_dump($education);
            echo "</pre>";
        }

        return $this->render('registration',[
            'registration_model' => $registration_model,
            'imgupload' => new UploadForm(),
//            'users'=>new Users(),
//            'arbitr_managers' => new ArbitrationManager(),
//            'foreign_lang' => new ForeignLanguage(),
//            'education' => new Education(),
//            'sro_info' => new SROAMInformation()
        ]);
    }

}