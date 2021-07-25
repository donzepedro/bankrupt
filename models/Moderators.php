<?php

namespace app\models;

use Yii;
use app\models\ModeratorsIdentity;

/**
 * This is the model class for table "moderators".
 *
 * @property int $id
 * @property string $lname
 * @property string $fname
 * @property string $username
 * @property string|null $password
 * @property string|null $auth_key
 * @property string|null $access_token
 */
class Moderators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    

    
    public static function tableName()
    {
        return 'moderators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['lname', 'fname', 'username'], 'required'],
            [['lname', 'fname'], 'string', 'max' => 45],
            [['username'], 'string', 'max' => 32],
            [['password', 'auth_key', 'access_token'], 'string', 'max' => 250],
            ['password','validatePassword'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lname' => 'Lname',
            'fname' => 'Fname',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
    public function validatePassword($attribute,$params){
        
        if(!$this->hasErrors()){
            $user= $this->getUser();

            if(!$user || !$user->validPassword($this->password)){
                $this->addError($attribute,'Pas or name are incorrect');
            }
            
        }
    }
    
    public function login(){
        
        if($this->validate()){
            return \Yii::$app->user->login($this->getUser());
        }
    }
    
    public function getUser()
    {
        return  ModeratorsIdentity::findByUsername(['username'=>$this->username]);
    }
}
