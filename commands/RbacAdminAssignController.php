<?php
namespace app\commands;

use Yii;
use yii\console\Controller;
//use app\models\ModeratorsIdentity;
use app\models\UsersIdentity;
use yii\console\ExitCode;
use yii\helpers\Console;

//php yii rbac-admin-assign/init 1
class RbacAdminAssignController extends Controller
{
    public function actionInit($id,$role){
//        echo $id . "\n";
//        echo (!$role);
//        die;
        //Проверяем обязательный параметр id
        if(!$id || is_int($id)){
            // throw new \yii\base\InvalidConfigException("param 'id' must be set");
            $this->stdout("Param 'id' must be set!\n", Console::BG_RED);
            return ExitCode::UNSPECIFIED_ERROR;
        }
        if(!$role || is_int($role)){
            // throw new \yii\base\InvalidConfigException("param 'role' must be set");
            $this->stdout("Param 'role' must be set!\n", Console::BG_RED);
            return ExitCode::UNSPECIFIED_ERROR;
        }

        //Есть ли пользователь с таким id
        $user = (new UsersIdentity())->findIdentity($id);
        if(!$user){
            // throw new \yii\base\InvalidConfigException("User witch id:'$id' is not found");
            $this->stdout("User witch id:'$id' is not found!\n", Console::BG_RED);
            return ExitCode::UNSPECIFIED_ERROR;
        }

        //Получаем объект yii\rbac\DbManager, который назначили в конфиге для компонента authManager
        $auth = Yii::$app->authManager;

        //Получаем объект роли
        $role = $auth->getRole($role);

        //Удаляем все роли пользователя
        $auth->revokeAll($id);

        //Присваиваем роль админа по id
        $auth->assign($role, $id);

        //Выводим сообщение об успехе и возвращаем соответствующий код
        $this->stdout("Done!\n", Console::BOLD);
        return ExitCode::OK;

    }
}