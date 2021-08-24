<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
$img_path ='/img/front/';
$path_to_profile = '/search-managers/creditor-am-profile/';
?>
<section id="found-specialists" class="search-creditor-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="main-name-h2">Найдено специалистов: <?= count($managers); ?></h2>
                <div class="steps-border"></div>
            </div>
        </div>
        <div class="row specialists-location-row">
            <div class="col-lg-5 col-md-12">
                <div>
                    <div class="main-banner-location">

                        <div class="form-group">
                            <p class="main-text-p4">Регион</p>
                            <?php $form = ActiveForm::begin(['method' => 'post', 'action' => '/search-managers/creditor']) ?>
                            <?= $form->field($search_model, 'region')->widget(Select2::classname(), [
                                                                                        'data' => ArrayHelper::map(\app\models\Regions::find(['id','region'])->all(), 'id', 'region'),
                                                                                        'options' => ['placeholder' => 'Выберите регион ...'],
                                                                                        'pluginOptions' => [
                                                                                            'allowClear' => true
                                                                                        ],
                                                                                    ])->label('');                                                                            
                                                                                ?>
                            <div class="form-select-block-1">
                                <p class="main-text-p4">Саморегулируемая организация (СРО АУ)</p>
                                <?php  
                                       
                                        $items = ArrayHelper::map(\app\models\SROAMInformation::find()->all(),'id', 'SRO_name');
                                        $params = [
                                            'prompt' => ''
                                ];?>
                                <?= $form->field($search_model, 'SRO_name')->dropDownList($items,$params)->label('') ?>
                            </div>
                            <div class="block-form-group-flex">
                                <div class="form-select-block-2">
                                    <p class="main-text-p4">Категория sdf должников</p>

                                    <?=
                                    $form->field($search_model, 'debtor_category')->dropDownList([
                                        '2' => 'Все',
                                        '0' => 'Юридическое лицо',
                                        '1' => 'Физическое лицо'
                                    ])->label('')
                                    ?>
                                    <p class="main-text-p4 indent-p5">Вы являетесь:</p>
                                    <div class="checkbox-human">
                                        <div class="main-name-p3">
                                            <?= $form->field($search_model, 'b_phys')->checkbox([
                                                "template"=>"<div class=\"custom-control custom-checkbox p-0\">{input} {label}</div>\n<div>{error}</div>"
                                            ])->label('Физическим лицом') ?>       
                                <!--<input type="checkbox" id="cb1"> <label for="cb1" class="main-name-p3">Физическим лицом</label>-->
                                        </div>
                                        <div class="main-name-p3 mt-2">
                                            <?= $form->field($search_model, 'b_legal')->checkbox([
                                                "template"=>"<div class=\"custom-control custom-checkbox p-0\">{input} {label}</div>\n<div>{error}</div>"
                                            ])->label('Юридическим лицом') ?>
                                                <!--<input type="checkbox" id="cb2"> <label for="cb2" class="main-name-p3">Юридическим лицом</label>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-check m-3">
                                    <div class="checkbox-toggle p-4">
                                        <?=
                                        $form->field($search_model, 'goverment_secret')->checkbox([
                                            'template' => "<div class=\"custom-control custom-switch \">{input} {label}</div>\n<div>{error}</div>",
                                            'class' => 'custom-control-input'])->label('Допуск к гос.тайне', ['class' => 'custom-control-label main-name-p3'])
                                        ?>
                                    </div>
                                    <div class="checkbox-block-flex">
                                        <?= Html::submitButton('Поиск', ['class' => 'btn button-search', 'name' => 'Search-button']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
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
                    <?php $amform = ActiveForm::begin(['action'=>$path_to_profile]) ?>
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
                            <div class="go-profile align-self-end snd-btn-hide"><?= Html::submitButton('Перейти&nbsp;в&nbsp;профиль', ['class' => 'btn button-search', 'name' => 'Search-button']) ?></div>
                            
                        </div>
                        <div class="row text-center">
                            <div class="col snd-btn-show mt-3"><?= Html::submitButton('Перейти&nbsp;в&nbsp;профиль', ['class' => 'btn button-search', 'name' => 'Search-button']) ?></div>
                        </div>
                    <?= $amform->field($search_model, 'id')->hiddenInput(['value' => $val['id']])->label(''); ?>
                        <hr>
                    <?php endforeach; ?>
                    <?php ActiveForm::end()?>
                </div>
            </div>
        </div>
    </div>
</section>