<?php


namespace app\models;


//use yii\db\ActiveRecord;
use Yii;
use yii\base\Model;
/**
 * This is the model class for registration page.
 *
 * @property string $lname
 * @property string $fname
 * @property string|null $mname
 * @property string|null $birth_date
 * @property int|null $inn
 * @property int|null $phone_number
 * @property string $email
 * @property string $password
 * @property string|null $job_region
 * @property int|null $government_secret_access
 * @property string $SRO_name
 * @property int $bankrupt_categories categories of clients(bankrupt/creditor) 0-phys 1-legal 2-both
 * @property int $debtor_categories categories of debtors(bankrupt/creditor) 0-phys 1-legal 2-both
 * @property int $count_of_procedure_phys
 * @property int $count_of_procedure_legal
 * @property float $procedure_time_average procedure_time_average months
 * @property string $start_date
 * @property string|null $end_date
 * @property string|null $path_to_img
 * @property string $membership_time
 * @property string $leave_reason
 *
 */
class RegistrationModel extends Model
{
    //arb mananger table
    public $lname;
    public $fname;
    public $mname;
    public $birth_date;
    public $inn;
    public $phone_number;
    public $email;
    public $password;
    public $job_region;
    public $government_secret_access;
    public $debt_cat_phys;
    public $debt_cat_legal;
    public $bankr_cat_phys;
    public $bankr_cat_legal;

    public $bankrupt_categories ;
    public $debtor_categories ;
    public $count_of_procedure_phys;
    public $count_of_procedure_legal;
    public $procedure_time_average;
    public $start_date;
    public $end_date;
    public $path_to_img;

    //common propities
    public $SRO_name;
    //SRO am Propities
    public $membership_start_date;
    public $membership_end_date;
    public $leave_reason;

    //education info
    public $institution;
    public $speciality;
    public $educ_level;
    public $start_education;
    public $end_education;

    //foreign_education
    public $language;
    public $level;

    //agreements
    public $user_agreements;
    public $offer_agreements;

    public function rules() {
        return [
            [['password','email','offer_agreements','user_agreements','lname', 'fname', 'SRO_name', 'bankrupt_categories', 'debtor_categories', 'count_of_procedure_phys', 'count_of_procedure_legal', 'procedure_time_average', 'start_date'], 'required'],
            [['email'],'email'],
            ['email', 'unique', 'targetClass' => self::class,'message' => 'Email already exists!'],
            [['user_agreements','offer_agreements'],'required','requiredValue' => 1,],
            [['birth_date', 'start_date', 'end_date'], 'safe'],
            [['inn', 'phone_number', 'government_secret_access', 'bankrupt_categories', 'debtor_categories', 'count_of_procedure_phys', 'count_of_procedure_legal'], 'integer'],
            [['procedure_time_average'], 'number'],
            [['lname', 'fname', 'mname'], 'string', 'max' => 20],
            [['post_addr'], 'string', 'max' => 255],
            [['job_region'], 'string', 'max' => 50],
            [['SRO_name'], 'string', 'max' => 100],
            [['path_to_img'], 'string', 'max' => 100],
            [['debt_cat_legal','debt_cat_phys'],'compare','compareValue'=>1,'operator'=>'==', 'when' => function ($model) {
                return ($model->debt_cat_phys == null and $model->debt_cat_legal == null);
            }, 'whenClient' => "function (attribute, value) {
                    return ($('#registrationmodel-debt_cat_phys').is(':checked') == false && $('#registrationmodel-debt_cat_legal').is(':checked')==false);
                }",'message'=>'Выберите хотя бы одну категорию'],
            [['bankr_cat_legal','bankr_cat_phys'],'required','requiredValue'=>1, 'when' => function ($model) {
                return ($model->bankr_cat_phys == null and $model->bankr_cat_legal == null);
            }, 'whenClient' => "function (attribute, value) {
                    return ($('#registrationmodel-bankr_cat_phys').is(':checked') == false && $('#registrationmodel-bankr_cat_legal').is(':checked')==false);
                }",'message'=>'Выберите хотя бы одну категорию'],
        ];
    }
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
            'SRO_name' => 'Sro Am Name',
            'bankrupt_categories' => 'Bankrupt Categoties',
            'debtor_categories' => 'Debtor Categories',
            'count_of_procedure_phys' => 'Count Of Procedure Phys',
            'count_of_procedure_legal' => 'Count Of Procedure Legal',
            'procedure_time_average' => 'Procedure Time Average',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'path_to_img' => 'Path To Img',
        ];
    }
}