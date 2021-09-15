<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_auth_info".
 *
 * @property int $id
 * @property int $am_id
 * @property string $password
 * @property int|null $email_check
 * @property int|null $registry_check
 *
 * @property ArbitrationManager $am
 */
class ServiceAuthInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $phone;
    public static function tableName()
    {
        return 'service_auth_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['am_id'], 'required'],
            [['password'], 'required','message'=>'Поле "Пароль" не может быть пустым'],
            [['phone'], 'required','message'=>'Поле "Телефон" не может быть пустым'],
            [['am_id', 'email_check', 'registry_check'], 'integer'],
            [['password'], 'string', 'max' => 100],
            [['am_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArbitrationManager::className(), 'targetAttribute' => ['am_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phone'=>'phone',
            'id' => 'ID',
            'am_id' => 'Am ID',
            'password' => 'Password',
            'email_check' => 'Email Check',
            'registry_check' => 'Registry Check',
        ];
    }

    /**
     * Gets query for [[Am]].
     *
     * @return \yii\db\ActiveQuery
     */

    public function getAm()
    {
        return $this->hasOne(ArbitrationManager::className(), ['id' => 'am_id']);
    }
}
