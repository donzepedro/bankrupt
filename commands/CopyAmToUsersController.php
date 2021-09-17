<?php


namespace app\commands;


use app\models\ArbitrationManager;
use app\models\InsertUsers;

use yii\console\Controller;
use yii\console\ExitCode;

class CopyAmToUsersController extends Controller
{
    public function actionIndex(){

        $id_am = ArbitrationManager::find()->select(['id','lname'])->all();

        for($i=0;$i<count($id_am);$i++){
            $user = new InsertUsers();

            $user->id_am = $id_am[$i]->id;
            $user->email = $id_am[$i]->lname . '@mail.ru';
            $user->password = sha1('password');
            var_dump($user->save());
            var_dump($user->getErrors());
        }

    }
}