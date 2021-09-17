<?php

namespace app\models;

use Yii;
use app\models\UsersIdentity;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property int|null $id_am 0-means that user is moderator
 * @property string $password
 * @property string $email
 * @property int|null $email_check 0-not confirm 1-confirm
 * @property int|null $registry_check 0-not confirm 1-confirm
 *
 * @property ArbitrationManager $am
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_am', 'email_check', 'registry_check'], 'integer'],
            [['password', 'email'], 'required'],
            [['password'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['id_am'], 'exist', 'skipOnError' => true, 'targetClass' => ArbitrationManager::className(), 'targetAttribute' => ['id_am' => 'id']],
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
            'id_am' => 'Id Am',
            'password' => 'Password',
            'email' => 'Email',
            'email_check' => 'Email Check',
            'registry_check' => 'Registry Check',
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
        return  UsersIdentity::findByUsername(['email'=>$this->email]);
    }

    /**
     * Gets query for [[Am]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAm()
    {
        return $this->hasOne(ArbitrationManager::className(), ['id' => 'id_am']);
    }
}
