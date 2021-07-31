<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$base_url_for_controller = '/bankrupt-legal/';
//echo "<pre>";
//var_dump($bankrupt_legal);
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
        $pages_amount = intdiv(count($bankrupt_legal),$start_rows_for_one_page); // this is for list "show by" for 5,10,15,20 etc.
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }else{
            $curpage = 1;
        }
        $prevpage = $curpage - 1; 
        $nextpage = $curpage + 1;
        $start_elems_amount = count($bankrupt_legal);
        $bankrupt_legal = array_slice($bankrupt_legal,$pg*( $curpage-1));
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }
        
    }

?>
<div class="row">
    <a href= "<?= $base_url_for_controller . 'create-bankrupt'?>"><div class="btn btn-primary mt-3">Create new Bankrupt legal</div></a>
</div>
<table class="table my-4">
    <tr class="text-center">
    
                <th >Last Name</th>
                <th >First Name</th>
                <th >Middle Name</th>
                <th >Debt Amount</th>
                <th >Organization Name</th>
                <th >Inn</th>
                <th >Region</th>
                <th  colspan="2" class="border-bottom"> 
                    <div class="row">
                        <div class="col ">show by</div>
                        <div class="col-7 ">
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
    <?php foreach ($bankrupt_legal as $each_bankrupt_legal): ?>
    <?php if($rows == $pg){
           break;
       }
       $rows++;
       ?>
     <tr class="text-center">
     <?php $form = ActiveForm::begin(); ?>
        <td class="pt-4"><?= $each_bankrupt_legal->lname ?></td>
        <td class="pt-4"><?= $each_bankrupt_legal->fname ?></td>
        <td class="pt-4"><?= $each_bankrupt_legal->mname ?></td>
        <td class="pt-4"><?= $each_bankrupt_legal->debt_amount?></td>
        <td class="pt-4"><?= $each_bankrupt_legal->org_name ?></td>
        <td class="pt-4"><?= $each_bankrupt_legal->inn ?></td>
        <td class="border-right pt-4"><?= $each_bankrupt_legal->region?></td>
        <?= $form->field($each_bankrupt_legal,'id')->hiddenInput(['value'=>$each_bankrupt_legal->id])->label(false) ?>
        <!--<td ><?php// $each_bankrupt_legal->id ?></td>-->
        <td class="btn btn-secondary p-2 mt-3 ml-1 "><a id='delete_manager' href="<?= $base_url_for_controller . 'edit-bankrupt/' .'?id=' . $each_bankrupt_legal->id?>">Edit</a></td>
       <td class="btn btn-danger p-2 mt-3 ml-1 "><a id='delete_manager' href="<?= $base_url_for_controller . 'delete-bankrupt-legal/' . '?pg='. $pg . '&page='. $curpage .'&id=' . $each_bankrupt_legal->id?>" onclick="delete_manager()">Delete</a></td>
        
        
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



 <!--<td class="badge badge-success my-4 ml-1"><a  href=<?php //$base_url_for_controller. 'edit-bankrupt-legal/' . '?id=' . $each_bankrupt_legal->id?>>save</a></td>-->
        <!--<td class="badge badge-danger my-4 ml-1 "><a id='delete_manager' href="<?php //z$base_url_for_controller . 'delete-bankrupt-legal/' . '?pg='. $pg . '&page='. $curpage .'&id=' . $each_bankrupt_legal->id?>" onclick="delete_manager()">delete</a></td>--> 