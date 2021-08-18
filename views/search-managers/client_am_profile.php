<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;
$img_path ='/img/front/';

?>
<section id="found-specialists" class="search-creditor-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="main-name-h2">Профиль специалиста:</h2>
				<div class="steps-border"></div>
			</div>
		</div>
		<div class="row specialists-location-row">
			<div class="col-lg-5 col-md-12">
				<div>
                                    <div class="main-banner-location">
                                        <div class="form-group">
                                            <p class="main-text-p4">Регион</p>
                                            <?php $form = ActiveForm::begin(['method' => 'post', 'action' => '/search-managers/']) ?>
                                            <?= $form->field($search_model, 'region')->dropDownList(ArrayHelper::map(\app\models\Regions::find()->all(), 'id', 'region'))->label('') ?>
                                            <div class="block-form-group-flex">
                                                <div class="form-select-block-2">
                                                    <p class="main-text-p4 indent-p5">Вы являетесь:</p>
                                                    <div class="checkbox-human">
                                                        <div class="main-name-p3">
                                                            <?= $form->field($search_model, 'b_phys')->checkbox([])->label('Физическим лицом') ?>       
                                                        </div>
                                                        <div class="main-name-p3 mt-2">
                                                            <?= $form->field($search_model, 'b_legal')->checkbox([])->label('Юридическим лицом') ?>
                                                                <!--<input type="checkbox" id="cb2"> <label for="cb2" class="main-name-p3">Юридическим лицом</label>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-check m-3">
                                                    <div class="checkbox-toggle p-4">
                                                        <?=
                                                        $form->field($search_model, 'goverment_secret')->checkbox([
                                                            'template' => "<div class=\"custom-control custom-switch\">{input} {label}</div>\n<div>{error}</div>",
                                                            'class' => 'custom-control-input'])->label('Допуск к гос.тайне', ['class' => 'custom-control-label main-name-p3'])
                                                        ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="checkbox-block-flex">
                                                <button type="submit" class="btn reset-filter">Сбросить&nbsp;фильтр</button>
                                                <?= Html::submitButton('Поиск', ['class' => 'btn button-search', 'name' => 'Search-button']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end();?>
                                    <div class="desktop-link-search">
                                        <h4 class="main-text-h4">Интересные статьи</h4>
                                        <div class="link-search-border"></div>
                                        <?php foreach ($news as $eachnews): ?>
                                            <a  href="<?= INTRESTINGPGAES . '?id=' . $eachnews->id ?>" class="link-search-a main-text-p2"><?= $eachnews->title ?></a>
                                        <?php endforeach; ?>
                                    </div>
				</div>
			</div>
                    <div class="col-lg-7 col-md-12 personal-col">
                        <div class="personal-specialists-wrapper">
                            <div class="personal-block-close">
                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.89453 1.15778L12.2729 10.4983L2.2937 19.3199" stroke="#3951D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22.377 1.15778L11.9986 10.4983L21.9778 19.3199" stroke="#3951D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        
                            <?php foreach ($managers as $key => $val): ?>
                            
                            <div class="row text-center ">
                                    <div class="col-12 mt-3"><h4 class="main-name-color-h4"><?= $val['fname'] . ' ' . $val['mname'] . ' ' . $val['lname']; ?></h4></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div><img style="max-height: 150px" src="<?= str_replace('../web', '', $val['path_to_img']); ?>"></div>
                                    <div class="name-text-block mr-2 align-self-end" style="min-width: 105px"> <p class="main-name-p3">Средний срок:</p>
                                        <h4 class="main-name-color-h4"><span><?= $val['procedure_time_average'] ?></span> месяцев </h4>
                                    </div>
                                    <div class="name-text-block mr-2 align-self-end"> <p class="main-name-p3">Процедур:</p>
                                        <h4 class="main-name-color-h4"><span><?= $val['count_of_procedure_phys'] + $val['count_of_procedure_legal'] ?></span></h4>
                                    </div>
                                    <div class="go-profile align-self-end snd-btn-hide"><?php
                                    echo Html::button('Отправить&nbsp;заявку', ['value' => 'some val','id'=>'send', 'class' => 'button-search']);
                                       /* Modal::begin([
                                            'title' => '<h2 class="main-name-h2">Leave a claim</h2>',
                                            //    'header'=>'<h2>Hello world </h2>',
                                            'toggleButton' => [
                                                'label' => 'Отправить&nbsp;заявку',
                                                'class' => 'button-search'
                                            ],
                                            'footer' => Html::button('Отправить&nbsp;заявку', ['value' => 'some val', 'class' => 'button-search'])
                                        ]);
                                        ?>
                                        <?php $form = ActiveForm::begin() ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your name'])->label(''); ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your phone'])->label(''); ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your email'])->label(''); ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your INN'])->label(''); ?>
                                        <?php
                                        ActiveForm::end();
                                        Modal::end();*/
                                        ?> </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col snd-btn-show mt-3">
                                        <?php
                                        /*
                                        Modal::begin([
                                            'title' => '<h2 class="main-name-h2">Leave a claim</h2>',
                                            //    'header'=>'<h2>Hello world </h2>',
                                            'toggleButton' => [
                                                'label' => 'Отправить&nbsp;заявку',
                                                'class' => 'button-search'
                                            ],
                                            'footer' => Html::button('Отправить&nbsp;заявку', ['value' => 'some val','class' => 'button-search'])
                                        ]);
                                        ?>
                                        <?php $form = ActiveForm::begin() ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your name'])->label(''); ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your phone'])->label(''); ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your email'])->label(''); ?>
                                            <?= $form->field($claimForm, 'name')->textInput(['placeholder' => 'your INN'])->label(''); ?>
                                        <?php
                                        ActiveForm::end();
                                        Modal::end();
                                        */
                                        ?>
                                    </div>
                                </div>                                    
                                <hr>
                            <div class="personal-specialists-text">
                                <p class="main-text-p3">Название саморегулируемой организации</p>
                                <p class="main-text-p2"><?= $val['SRO_AM_name']?></p>
                                
                                <p class="main-text-p3">Допуск к государственной тайне</p>
                                <p class="main-text-p2"><?php echo ($val['government_secret_access'] == 0) ? "Отсутсвует" : "Присутствует"; ?></p>
                                <p class="main-text-p3">Образование</p>
                                <p class="main-text-p2"><?= $val["institution"].' '.$val["speciality"].' '.$val["level"]?></p>
                                <p class="main-text-p3">Дата начала  работы в качестве арбитражного управляющего</p>
                                <p class="main-text-p2"><?= date('d.m.Y',strtotime($val["start_date"]))?></p>
                                <p class="main-text-p3">Дата окончания  работы в качестве арбитражного управляющего</p>
                                <p class="main-text-p2"><?php if($val["end_date"] === null) echo 'По настоящее время'; else date('d.m.Y',strtotime($val["end_date"]));?></p>
                                <p class="main-text-p3">Владение языками</p>
                                <p class="main-text-p2"><?= $foreign_lang->language. ' ' ?><?= $foreign_lang->level ?></p>
                                
                            </div>
                                <?php endforeach; ?>
                               
                        </div>
                    </div>
                    
			
		</div>
	</div>
</section>