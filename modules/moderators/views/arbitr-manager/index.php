<?php 
use yii\helpers\Url;
//echo \Yii::$app->request->get('pg');
//die;
//echo '<pre>';
//var_dump($data);
//echo '</pre>';
//die;
    $start_rows_for_one_page = 5;
    $pages_amount = intdiv(count($data),$start_rows_for_one_page);
//    echo fmod(count($data),$start_rows_for_one_page);
//    die;
   
    if(!empty(\Yii::$app->request->get('end'))){
        if(fmod(count($data),$start_rows_for_one_page) != '0'){
            $last_page = (fmod(count($data),$start_rows_for_one_page) != '0') ? $pages_amount+1 : $pages_amount;
          
        }
        return Yii::$app->response->redirect(Url::to(['', 'pg' => $start_rows_for_one_page,'page'=>$last_page]));
    }
    if(empty(\Yii::$app->request->get('pg'))){
      return Yii::$app->response->redirect(Url::to(['', 'pg' => $start_rows_for_one_page])); 
    }else{
        
        $pg = \Yii::$app->request->get('pg');
        $disprows = $start_rows_for_one_page;
        $rows = 0;
        $pages_amount = intdiv(count($data),$start_rows_for_one_page); // this is for list "show by" for 5,10,15,20 etc.
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }else{
            $curpage = 1;
        }
        $prevpage = $curpage - 1; 
        $nextpage = $curpage + 1;
        $start_elems_amount = count($data);
//        intdiv($start_elems_amount,$pg)
        $data = array_slice($data,$pg*( $curpage-1));
//        if(!empty(\Yii::$app->request->get('page'))){
//            $curpage = \Yii::$app->request->get('page');
//        }
    }
?>


<div class="row">
    <a href='/moderators/arbitr-manager/create-manager'><div class="btn btn-primary mt-3">Создать нового арбитражного управляющего</div></a>
    
</div>

<table class="table my-4 ">
     <thead>
         <tr class="text-center">
                <th style='vertical-align: top'>Аватар</th>
                <th style='vertical-align: top'>Фамилия</th>
                <th style='vertical-align: top'>Имя</th>
                <th style='vertical-align: top'>Отчество</th>
                <th style='vertical-align: top'>Область работы</th>
                <th style='vertical-align: top'>Телефон</th>
                <th style='vertical-align: top'>Дата окончания</th>
                <th  colspan="2"> 
                    <div class="row">
                        <div class="col my-auto">Показывать по</div>
                        <div class="col ">
                        <select class="custom-select " onchange="window.location.href = this.options[this.selectedIndex].value">
                            <option selected><?= $pg ?></option>
                            <?php for($i=0; $i <= $pages_amount; $i++ ):?>
                            
                                <option value=<?= '/arbitr-manager/?pg='. $disprows .'&page='. $curpage?>><?= $disprows?></option>
                                <?php $disprows+=$start_rows_for_one_page;?>
                            <?php endfor;?>
                           
                        </select>
                        </div>
                    </div>    
                </th>
                
        </tr>
     </thead>
    <?php foreach ($data as $eachmanager): ?>
    <?php if($rows == $pg){
           break;
       }
       $rows++;
       ?>
     <input type="hidden" id="managerid" value=>
     <tr class="text-center">
         <td><img class="img-fluid" style="max-height: 100px" src= <?= str_replace('../web', '',$eachmanager->path_to_img)?>></td>
         <td><?= $eachmanager->lname ?></td>
        <td><?= $eachmanager->fname ?></td>
        <td><?= $eachmanager->mname ?></td>
        <td><?= $eachmanager->job_region ?></td>
        <td><?= $eachmanager->phone_number ?></td>
        <td><?= $eachmanager->end_date ?></td>
        <!--<td><?php // $eachmanager->id ?></td>-->
        <!--<td class="badge badge-info my-2 ml-1"><a href=<?='/arbitr-manager/edit-manager?id=' . $eachmanager->id?>>view</a></td>-->
        <td class="badge badge-secondary my-5 ml-1"><a  href=<?='/moderators/arbitr-manager/edit-manager?id=' . $eachmanager->id .'&pg='. $pg .  '&page='. $curpage?>>редактировать</a></td>
        <td class="badge badge-danger my-5 ml-1 "><a id='delete_manager' href="<?='/moderators/arbitr-manager/delete-manager?pg='. $pg . '&page='. $curpage .'&id=' . $eachmanager->id?>" onclick="delete_manager()">удалить</a></td>
    </tr>
    <?php endforeach;?>
</table>
<?php   $last_page = (fmod(count($data),$start_rows_for_one_page) != '0') ? 1 : 0;?>
<div class="row  my-2 px-0 text-center w-50">
    <?php if(!($curpage == 1)): ?>
        <div class="col-1 mx-1 py-2 w-100"><a class="badge badge-light" style="cursor:pointer" href=<?= '/moderators/arbitr-manager/?pg='.$pg.'&page='.  $prevpage ?>> < </a></div>
    <?php endif; ?>
    <?php for($i=1; $i <= intdiv($start_elems_amount,$pg)+$last_page; $i++ ):?>
        <div class="col-1 mx-1 py-2 "><a class="badge badge-light" style="cursor:pointer" href=<?= '/moderators/arbitr-manager/?pg='.$pg.'&page='.$i?>><?=  $i?></a></div>
    <?php endfor;?>
    <?php if(!(($curpage)==$i-1)):?>
        <div class="col-1 mx-1 py-2 mr-auto"><a class="badge badge-light" style="cursor:pointer" href=<?= '/moderators/arbitr-manager/?pg='.$pg.'&page='. $nextpage?>> > </a></div>
    <?php endif;?>
</div>

