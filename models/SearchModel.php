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
    public $legal;
    public $phys;
    public $goverment_secret;
    
    public function rules()
    {
        return [
          ['region','required']  
        ];
    }
    
            
}