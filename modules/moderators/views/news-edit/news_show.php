<?php 
use yii\helpers\Url;
//echo \Yii::$app->request->get('pg');
//die;
//echo '<pre>';
//var_dump($data);
//echo '</pre>';
//die;
    $start_rows_for_one_page = 5;
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
        $data = array_slice($data,$pg*( $curpage-1));
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }
        
    }
?>


<div class="row">
    <a href='/moderators/news-edit/news-create'><div class="btn btn-primary mt-3">Добавить новость</div></a>
    <a href='/moderators/news-edit/interesting-page-adjusting'><div class="btn btn-primary mt-3 ml-5">Настроить "интересные страницы"</div></a>
    
</div>

<table class="table my-4 ">
     <thead>
         <tr class="text-center">
                <th style='vertical-align: top'>Изображение</th>
                <th style='vertical-align: top'>Заголовок</th>
                <th style='vertical-align: top'>Дата создания</th>
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
    <?php foreach ($data as $eachnews): ?>
    <?php if($rows == $pg){
           break;
       }
       $rows++;
       ?>
     <input type="hidden" id="managerid" value=>
     <tr class="text-center">
         <td><img class="img-fluid" style="max-height: 100px" src= <?= str_replace('../web', '',$eachnews->img_path)?> alt="news picture"></td>
         <td><?= $eachnews->title ?></td>
        <td><?= $eachnews->create_date ?></td>
        <!--<td><?php // $eachnews->id ?></td>-->
        <!--<td class="badge badge-info my-2 ml-1"><a href=<?='/news-edit/news-medit?id=' . $eachnews->id?>>view</a></td>-->
        <td class="badge badge-secondary my-5 ml-1"><a  href=<?='/moderators/news-edit/news-edit?id=' . $eachnews->id?>>Редактировать</a></td>
        <td class="badge badge-danger my-5 ml-1 "><a id='delete_manager' href="<?='/moderators/news-edit/news-delete?pg='. $pg . '&page='. $curpage .'&id=' . $eachnews->id?>" onclick="delete_manager()">Удалить</a></td>
        
        
        
    </tr>
    <?php endforeach;?>
</table>
<div class="row  my-2 px-0 text-center w-50">
    <?php if(!($curpage == 1)): ?>
        <div class="col-1 mx-1 py-2 w-100"><a class="badge badge-light" style="cursor:pointer" href=<?= '/moderators/news-edit/news-show/?pg='.$pg.'&page='.  $prevpage ?>> < </a></div>
    <?php endif; ?>
    <?php for($i=1; $i <= intdiv($start_elems_amount,$pg)+1; $i++ ):?>
        <div class="col-1 mx-1 py-2 "><a class="badge badge-light" style="cursor:pointer" href=<?= '/moderators/news-edit/news-show/?pg='.$pg.'&page='.$i?>><?=  $i?></a></div>
    <?php endfor;?>
    <?php if(!(($curpage)==$i-1)):?>
        <div class="col-1 mx-1 py-2 mr-auto"><a class="badge badge-light" style="cursor:pointer" href=<?= '/moderators/news-edit/news-show/?pg='.$pg.'&page='. $nextpage?>> > </a></div>
    <?php endif;?>
</div>

