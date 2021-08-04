<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
$img_path ='/img/front/';
$path_to_profile = '/search-managers/client-am-profile/';
?>
<section id="found-specialists">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="main-name-h2">Найдено специалистов: <?=count($managers);?></h2>
				<div class="steps-border"></div>
			</div>
		</div>
            <div class="row specialists-location-row">
                <div class="col-lg-5 col-md-12">
                    <div>
                        <div class="main-banner-location">

                            <div class="form-group">
                                <p class="main-text-p4">Регион</p>
                                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-group']]) ?>
                                <?= $form->field($search_model, 'region')->dropDownList(ArrayHelper::map(\app\models\Regions::find()->all(), 'id', 'region'))->label('') ?>
                                <p class="main-text-p4 indent-p5">Вы являетесь:</p>
                            </div>
                            <div class="form-group form-check form-check-flex">
                                <div class="checkbox-human">
                                    <div class="main-name-p3 mt-2">
                                        <?= $form->field($search_model, 'b_phys')->checkbox([])->label('Физическим лицом') ?>
                                    </div>
                                    <div class="main-name-p3 mt-2">
                                        <?= $form->field($search_model, 'b_legal')->checkbox([])->label('Юридическим лицом') ?>
                                    </div>
                                </div>
                                <div class="checkbox-toggle mt-2">

                                    <?=
                                    $form->field($search_model, 'goverment_secret')->checkbox([
                                        'template' => "<div class=\"custom-control custom-switch\">{input} {label}</div>\n<div>{error}</div>",
                                        'class' => 'custom-control-input'])->label('Допуск к гос.тайне', ['class' => 'custom-control-label main-name-p3'])
                                    ?>
                                </div>
                                <div class="checkbox-block-flex">
                                    <button type="submit" class="btn reset-filter">Сбросить&nbsp;фильтр</button>
                                <?= Html::submitButton('Поиск', ['class' => 'btn button-search', 'name' => 'Search-button']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>

                        </div>
                        <div class="desktop-link-search">
                            <h4 class="main-text-h4">Интересные статьи</h4>
                            <div class="link-search-border"></div>
                            <a  href="#" class="link-search-a main-text-p2">В чем <span>ПЛЮСЫ</span> банкротства?</a>
                            <a  href="#" class="link-search-a main-text-p2">Прекращение начисления процентов</a>
                            <a  href="#" class="link-search-a main-text-p2">Возможность выезда за границу</a>
                            <a  href="#" class="link-search-a main-text-p2">Освобождение от обязательств</a>
                            <a  href="#" class="link-search-a main-text-p2">В чем <span>ПЛЮСЫ</span> банкротства?</a>
                            <a  href="#" class="link-search-a main-text-p2">Возможность выезда за границу</a>
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
                        <?php $amform = ActiveForm::begin(['action'=>$path_to_profile]) ?>
                            <?php foreach ($managers as $key => $val): ?>
                            <div class="row">
                                <div class="col-12 text-center pt-4"><h4 class="main-name-color-h4"><?= $val['fname'] . ' ' . $val['mname'] . ' ' . $val['lname']; ?></h4></div>
                                <div class="col-3"><img style="max-height: 100px" src="<?= str_replace('../web', '', $val['path_to_img']); ?>"></div>
                                <div class="col-3 name-text-block"> <p class="main-name-p3 mt-4 pt-5">Средний срок:</p>
                                    <h4 class="main-name-color-h4"><span><?= $val['procedure_time_average'] ?></span> месяцев </h4>
                                </div>
                                <div class="col-2 name-text-block "> <p class="main-name-p3 mt-4 pt-5">Процедур:</p>
                                    <h4 class="main-name-color-h4"><span><?= $val['count_of_procedure_phys'] + $val['count_of_procedure_legal'] ?></span></h4>
                                </div>
                                
                                <div class="col-4 go-profile mt-4 pt-5"><?= Html::submitButton('Перейти&nbsp;в&nbsp;профиль', ['class' => 'btn button-search', 'name' => 'Search-button']) ?></div>
                            </div>
                            <hr>
                            <?php endforeach; ?>
                         <?php ActiveForm::end()?>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
</section>