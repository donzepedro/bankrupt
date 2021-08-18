<?php
use yii\helpers\Url;
$img_path ='/img/front/';
$eachnewsurl='/news/each-news';
   $start_rows_for_one_page = 3;
    if(empty(\Yii::$app->request->get('pg'))){
      return Yii::$app->response->redirect(Url::to(['', 'pg' => $start_rows_for_one_page])); 
    }else{
        
        $pg = \Yii::$app->request->get('pg');
        $disprows = $start_rows_for_one_page;
        $rows = 0;
        $pages_amount = intdiv(count($news),$start_rows_for_one_page); // this is for list "show by" for 5,10,15,20 etc.
        if(!empty(\Yii::$app->request->get('page'))){
            $curpage = \Yii::$app->request->get('page');
        }else{
            $curpage = 1;
        }
        $prevpage = $curpage - 1; 
        $nextpage = $curpage + 1;
        $start_elems_amount = count($news);
        $news = array_slice($news,$pg*( $curpage-1));
        
    }
?>

<section class="news-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="main-name-h1">Новости и статьи</h1>
				<div class="steps-border"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">

				<nav aria-label="Page navigation example">
					<div class="container news-container">
						<div class="row">
                                                    <?php foreach ($news as $eachnews): ?>
                                                    <?php
                                                        if($rows == $pg){
                                                            break;
                                                        }
                                                        $rows++;
                                                    ?>
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                           
								<div class="navigation-news-block">
									<div class="news-block-img" style="background-image: url('<?= str_replace('../web', '',$eachnews->img_path)?>"></div>
									<h4 class="main-name-color-h4 mt-2" style="min-height: 50px;max-height: 50px;"><?= $eachnews->title?></h4>
                                                                        <?php $counter = 0; ?>
                                                                        <?php for($i=3;$i<=strlen($eachnews->text)-100; $i++):?>
                                                                        <?php if(($eachnews->text[$i] == 'p')&&($eachnews->text[$i-1]=='<')&&($eachnews->text[$i+1]=='>')){
                                                                            $counter++;                                                                            
                                                                                    if($counter == 3){
                                                                                        $eachnews->text = mb_substr($eachnews->text,0,$i);
                                                                                        break;
                                                                                    }                                                                                
                                                                        }?>
                                                                        <?php endfor; ?>
                                                                        <div class="main-name-p3 mb-3 mt-4" style="min-height: 250px;min-height: 250px"><p ><?= $eachnews->text . '...'?></p></div>
									<a href="<?=$eachnewsurl?>?id=<?=$eachnews->id?>" class="button-search">Читать далее</a>
								</div>
							</div>
                                                    <?php endforeach;?>		
						</div>
					</div>
<!--					<ul class="pagination justify-content-start">
						<li class="page-item disabled">
							<a class="page-link item-link main-text-p5" href="#" tabindex="-1" aria-disabled="true">1</a>
						</li>
						<li class="page-item third-item"><a class="page-link item-link main-text-p5" href="#">2</a></li>
				
						<li class="page-item">
							<a class="page-link item-next main-text-p6" href="#">Следующая</a>
						</li>
					</ul>-->
                                    <ul class="pagination justify-content-start">
                                                <?php for($i=1; $i <= intdiv($start_elems_amount,$pg)+1; $i++ ):?>
                                                <?php 
                                                    if($curpage == $i){
                                                        $switchstyle = 'page-item disabled';                                                       
                                                    }else{
                                                        $switchstyle = 'page-item';
                                                    }
                                                ?>
						<li class="<?= $switchstyle ?>">
							<a class="page-link item-link main-text-p5" href="<?= '/news/index?pg='.$pg.'&page='.$i?>" tabindex="-1" aria-disabled="true"><?=$i?></a>
                                                </li>
                                                <?php endfor;?>
<!--						<li class="page-item ml-5">
							<a class="page-link item-next main-text-p6" href="#">Следующая</a>
						</li>-->
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>