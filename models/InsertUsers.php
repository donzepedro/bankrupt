<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property int|null $id_am NULL-means that user is moderator
 * @property string $password
 * @property string $email
 * @property int|null $email_check 0-not confirm 1-confirm
 * @property int|null $registry_check 0-not confirm 1-confirm
 * @property string|null $auth_key
 * @property string|null $access_token
 *
 * @property ArbitrationManager $am
 */
class InsertUsers extends \yii\db\ActiveRecord
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
            [['auth_key', 'access_token'], 'string', 'max' => 250],
            [['id_am'], 'unique'],
            [['id_am'], 'exist', 'skipOnError' => true, 'targetClass' => ArbitrationManager::className(), 'targetAttribute' => ['id_am' => 'id']],
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
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
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
