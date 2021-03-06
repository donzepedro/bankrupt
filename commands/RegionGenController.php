<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\Regions;

/**
 * Description of RegionGenConntroller
 *
 * @author zepedro
 */
class RegionGenController extends Controller{
    
    public function actionIndex(){
        
        $regions = array(
                'Республика Адыгея',
                'Республика Башкортостан',
                'Республика Бурятия',
                'Республика Алтай (Горный Алтай)',
                'Республика Дагестан',
                'Республика Ингушетия',
                'Кабардино-Балкарская Республика',
                'Республика Калмыкия',
                'Республика Карачаево-Черкессия',
                'Республика Карелия',
                'Республика Коми',
                'Республика Марий Эл',
                'Республика Мордовия',
                'Республика Саха (Якутия)',
                'Республика Северная Осетия — Алания',
                'Республика Татарстан',
                'Республика Тыва',
                'Удмуртская Республика',
                'Республика Хакасия',
                'Чувашская Республика',
                'Алтайский край',
                'Краснодарский край',
                'Красноярский край',
                'Приморский край',
                'Ставропольский край',
                'Хабаровский край',
                'Амурская область',
                'Архангельская область',
                'Астраханская область',
                'Белгородская область',
                'Брянская область',
                'Владимирская область',
                'Волгоградская область',
                'Вологодская область',
                'Воронежская область',
                'Ивановская область',
                'Иркутская область',
                'Калининградская область',
                'Калужская область',
                'Камчатский край',
                'Кемеровская область',
                'Кировская область',
                'Костромская область',
                'Курганская область',
                'Курская область',
                'Ленинградская область',
                'Липецкая область',
                'Магаданская область',
                'Московская область',
                'Мурманская область',
                'Нижегородская область',
                'Новгородская область',
                'Новосибирская область',
                'Омская область',
                'Оренбургская область',
                'Орловская область',
                'Пензенская область',
                'Пермский край',
                'Псковская область',
                'Ростовская область',
                'Рязанская область',
                'Самарская область',
                'Саратовская область',
                'Сахалинская область',
                'Свердловская область',
                'Смоленская область',
                'Тамбовская область',
                'Тверская область',
                'Томская область',
                'Тульская область',
                'Тюменская область',
                'Ульяновская область',
                'Челябинская область',
                'Забайкальский край',
                'Ярославская область',
                'Москва',
                'Санкт-Петербург',
                'Еврейская автономная область',
                'Республика Крым',
                'Ненецкий автономный округ',
                'Ханты-Мансийский автономный округ — Югра',
                'Чукотский автономный округ',
                'Ямало-Ненецкий автономный округ',
                'Севастополь',
                'территории, находящиеся за пределами РФ (режимные объекты).',
                'Чеченская республика'
             );
         foreach ($regions as $v){
             $data = new Regions();
             $data->region = $v;
             $data->save();
             
         }
    
    }
   
}
