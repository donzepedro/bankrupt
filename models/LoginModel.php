<?php


namespace app\models;


use yii\db\ActiveRecord;

class LoginModel extends ActiveRecord
{
    public $login;
    public $password;

    public function rules(){
        return [
          [['login','password'],'required','message' =>'Поле не может быть пустым'],
//            [['login'],'email','message'=>'Введите корректный номер телефона/адрес эл.почты'],
            [['password'], 'string', 'max' => 255],
            [['login'], 'string', 'max' => 100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

}