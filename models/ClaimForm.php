<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use yii\base\Model;
/**
 * Description of ClaimForm
 *
 * @author zepedro
 */
class ClaimForm extends Model{
    
    public $name;
    public $phone;
    public $email;
    public $INN;
    
    public function rules(){
        return [
          [['name','phone','email','INN'], 'required']  
        ];
    }
    //put your code here
}
