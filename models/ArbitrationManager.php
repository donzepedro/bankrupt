<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arbitration_manager".
 *
 * @property int $id
 * @property string $lname
 * @property string $fname
 * @property string|null $mname
 * @property string|null $birth_date
 * @property string|null $post_addr
 * @property int|null $inn
 * @property int|null $phone_number
 * @property string|null $job_region
 * @property int|null $government_secret_access
 * @property int|null $legal_phys 0-phys/1-legal
 * @property string $SRO_AM_name
 * @property int $bankrupt_categoties categories of clients(bankrupt/creditor) 0-phys 1-legal 3-both
 * @property int $debtor_categories categories of debtors(bankrupt/creditor) 0-phys 1-legal 3-both
 * @property int $count_of_procedure_phys
 * @property int $count_of_procedure_legal
 * @property float $procedure_time_average procedure_time_average months
 * @property string $start_date
 * @property string|null $end_date
 * @property string|null $path_to_img
 *
 * @property SROAMInformation[] $sROAMInformations
 * @property Education[] $educations
 * @property ForeignLanguage[] $foreignLanguages
 */
class ArbitrationManager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arbitration_manager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lname', 'fname', 'SRO_AM_name', 'bankrupt_categoties', 'debtor_categories', 'count_of_procedure_phys', 'count_of_procedure_legal', 'procedure_time_average', 'start_date'], 'required'],
            [['birth_date', 'start_date', 'end_date'], 'safe'],
            [['inn', 'phone_number', 'government_secret_access', 'legal_phys', 'bankrupt_categoties', 'debtor_categories', 'count_of_procedure_phys', 'count_of_procedure_legal'], 'integer'],
            [['procedure_time_average'], 'number'],
            [['lname', 'fname', 'mname'], 'string', 'max' => 20],
            [['post_addr'], 'string', 'max' => 255],
            [['job_region'], 'string', 'max' => 50],
            [['SRO_AM_name'], 'string', 'max' => 100],
            [['path_to_img'], 'string', 'max' => 100],
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
            'mname' => 'Mname',
            'birth_date' => 'Birth Date',
            'post_addr' => 'Post Addr',
            'inn' => 'Inn',
            'phone_number' => 'Phone Number',
            'job_region' => 'Job Region',
            'government_secret_access' => 'Government Secret Access',
            'legal_phys' => 'Legal Phys',
            'SRO_AM_name' => 'Sro Am Name',
            'bankrupt_categoties' => 'Bankrupt Categoties',
            'debtor_categories' => 'Debtor Categories',
            'count_of_procedure_phys' => 'Count Of Procedure Phys',
            'count_of_procedure_legal' => 'Count Of Procedure Legal',
            'procedure_time_average' => 'Procedure Time Average',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'path_to_img' => 'Path To Img',
        ];
    }

    /**
     * Gets query for [[SROAMInformations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSROAMInformations()
    {
        return $this->hasMany(SROAMInformation::className(), ['id_am' => 'id']);
    }

    /**
     * Gets query for [[Educations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducations()
    {
        return $this->hasMany(Education::className(), ['id_am' => 'id']);
    }

    /**
     * Gets query for [[ForeignLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getForeignLanguages()
    {
        return $this->hasMany(ForeignLanguage::className(), ['id_am' => 'id']);
    }
}
