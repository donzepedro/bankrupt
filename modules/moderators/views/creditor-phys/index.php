<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$base_url_for_controller = '/moderators/creditor-phys/';
//echo "<pre>";
//var_dump($creditor_phys);
//echo "</pre>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$start_rows_for_one_page = 5;
    if(empty(\Yii::$app->request->get('pg'))){
      return Yii::$app->response->redirect(Url::to(['', 'pg' => $start_rows_for_one_page])); 
    }else{
        
        $pg = \Yii::$app->request->get('pg');
        $disprows = $start_rows_for_one_page;
        $rows = 0;
        $pages_amount = intdiv(count($creditor_phys),$start_rows_for_one_page); // this is for list "show by" for 5,10,15,20 etc.
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }else{
            $curpage = 1;
        }
        $prevpage = $curpage - 1; 
        $nextpage = $curpage + 1;
        $start_elems_amount = count($creditor_phys);
        $creditor_phys = array_slice($creditor_phys,$pg*( $curpage-1));
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }
        
    }

?>
<div class="row">
    <a href= "<?= $base_url_for_controller . 'create-creditor'?>"><div class="btn btn-primary mt-3">Добавить нового кредитора (физ.лицо)</div></a>
</div>
<table class="table my-4">
    <tr class="text-center">
    
                <th >Имя</th>
                <th >Отчество</th>
                <th >Фамилия</th>
                <th >Сумма долга</th>
                <th >ИНН</th>
                <th >Регион</th>
                <th  colspan="2" class="border-bottom"> 
                    <div class="row">
                        <div class="col my-auto">Показывать по</div>
                        <div class="col ">
                        <select class="custom-select " onchange="window.location.href = this.options[this.selectedIndex].value">
                            <option selected><?= $pg ?></option>
                            <?php for($i=0; $i <= $pages_amount; $i++ ):?>
                            
                                <option value=<?= $base_url_for_controller . '?pg='. $disprows .'&page='. $curpage?>><?= $disprows?></option>
                                <?php $disprows+=$start_rows_for_one_page;?>
                            <?php endfor;?>
                           
                        </select>
                        </div>
                    </div>    
                </th>
    </tr>
    <?php foreach ($creditor_phys as $each_creditor_phys): ?>
    <?php if($rows == $pg){
           break;
       }
       $rows++;
       ?>
     <input type="hidden" id="managerid" value=>
     <tr class="text-center">
        
        
         <?php $form = ActiveForm::begin(); ?>
        <td class="pt-4 "><?= $each_creditor_phys->lname ?></td>
        <td class="pt-4 "><?= $each_creditor_phys->fname ?></td>
        <td class="pt-4 "><?= $each_creditor_phys->mname ?></td>
        <td class="pt-4 "><?= $each_creditor_phys->debt_amount ?></td>
        <td class="pt-4 "><?= $each_creditor_phys->inn ?></td>
        <td class="pt-4 border-right"><?= $each_creditor_phys->region ?></td>
        <?= $form->field($each_creditor_phys,'id')->hiddenInput(['value'=>$each_creditor_phys->id])->label(false) ?>

        <td class="btn btn-secondary p-2 mt-3 ml-1 "><a href="<?= $base_url_for_controller . 'edit-creditor/' . '?pg='. $pg . '&page='. $curpage .'&id=' . $each_creditor_phys->id?>">Редактировать</a></td>
        <td class="btn btn-danger p-2 mt-3 ml-1 "><a id='delete_manager' href="<?= $base_url_for_controller . 'delete-creditor-phys/' . '?pg='. $pg . '&page='. $curpage .'&id=' . $each_creditor_phys->id?>" onclick="delete_manager()">Удалить</a></td>
       
        
        
    <?php ActiveForm::end()?>   
        
    </tr>
    <?php endforeach;?>
</table>
<div class="row  my-2 px-0 text-center w-50">
    <?php if(!($curpage == 1)): ?>
        <div class="col-1 mx-1 py-1 "><a class="badge badge-light" style="cursor:pointer" href=<?= $base_url_for_controller . '?pg=' .$pg.'&page='.  $prevpage ?>> < </a></div>
    <?php endif; ?>
    <?php for($i=1; $i <= intdiv($start_elems_amount,$pg)+1; $i++ ):?>
        <div class="col mx-1 py-1 "><a class="badge badge-light" style="cursor:pointer" href=<?= $base_url_for_controller . '?pg=' .$pg. '&page='.$i?>><?=  $i?></a></div>
    <?php endfor;?>
    <?php if(!(($curpage)==$i-1)):?>
        <div class="col-1 mx-1 py-1 mr-auto"><a class="badge badge-light" style="cursor:pointer" href=<?= $base_url_for_controller . '?pg='.$pg.'&page='. $nextpage?>> > </a></div>
    <?php endif;?>
</div>
