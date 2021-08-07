<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use Yii;
use yii\base\Model;

/**
 * Description of SearchModel
 *
 * @author zepedro
 */
class SearchModel Extends Model{
    
    public $region;
    public $SRO_name;
    public $b_legal;
    public $b_phys;
    public $debtor_category;
    public $goverment_secret;
    public $id;
    
    public function rules()
    {
        return [
          ['region','required']  
        ];
    }
    
            
}
