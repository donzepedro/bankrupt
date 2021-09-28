<?php
$img_path ='/img/front/';
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
?>
<section class="sign-up-wrapper">
    <div class="container">
        <div class="row sign-up-row-name">
            <div class="col-lg-12">
                <h2 class="main-name-h2">Регистрация</h2>
                <p class="main-text-p2">
                    Для вашей регистрации необходимо заполнить форму, расположенную ниже.
                    После заполнения она будет рассмотрена, по результатам вам отправят
                    уведомление на электронную почту, указанную при регистрации.
                </p>
            </div>
        </div>
<!--        --><?php //$form = ActiveForm::begin() ?>
<!--            --><?//= $form->field($registration_model,'user_agreements')->checkbox()?>
<!--                                        --><?//= Html::submitButton("Отправить запрос на регистрацию",["class"=>"requireReg"]) ?>
<!--        --><?php //ActiveForm::end()?>

        <div class="row sign-up-form-row">
            <div class="col-lg-12">

                <div class="sign-up-form-wrap">
                    <div>
                        <h4 class="main-name-color-h4">Ваши данные</h4>
                    <?php $form = ActiveForm::begin() ?>

                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">Фамилия<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'lname')->textInput()->label('') ?>
                        </div>
                         <div class="form-sign-up-flex">
                            <p class="main-name-p3">Имя<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'fname')->textInput()->label('') ?>
                        </div>
                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">Отчество<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'mname')->textInput()->label('') ?>
                        </div>
                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">Дата рождения<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'birth_date')->textInput(['type'=>'date'])->label('') ?>
                        </div>
                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">ИНН<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'inn')->textInput()->label('') ?>
                        </div>
                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">Телефон<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'phone_number')->textInput()->label('') ?>
                        </div>
                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">Адрес эл.почты<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'email')->textInput()->label('') ?>
                        </div>
                        <div class="form-sign-up-flex">
                            <p class="main-name-p3">Пароль<span class="sign-up-star">*</span></p>
                            <?= $form->field($registration_model,'password')->passwordInput()->label('') ?>
                        </div>
                        <div>
                            <h4 class="main-name-color-h4">Дополнительно</h4>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Регионы работы<span class="sign-up-star">*</span></p>
                                <?= $form->field($registration_model, 'job_region')->widget(Select2::class, [
                                    'data' => ArrayHelper::map(\app\models\Regions::find(['id','region'])->all(), 'id', 'region'),
                                    'options' => ['placeholder' => 'Выберите регион ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ])->label('');
                                ?>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Допуск к гос.тайне<span class="sign-up-star">*</span></p>
                                    <div class="checkbox-toggle">
                                        <label class="checkbox">
                                    <?= $form->field($registration_model, 'government_secret_access')->checkbox([
                                        'template' => "<div class=\"custom-control custom-switch\">{input} {label}</div>\n<div>{error}</div>",
                                        'class' => 'custom-control-input'])->label('', ['class' => 'custom-control-label main-name-p3']) ?>
                                        </label>
                                    </div>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">СРО АУ<span class="sign-up-star">*</span></p>
                                <?= $form->field($registration_model,'SRO_name')->textInput()->label('')?>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">С какими категориями клиентов вы будете работать?<span class="sign-up-star">*</span></p>
                                <div class="checkbox-human">
                                    <div>
                                        <?=$form->field($registration_model,'bankr_cat_phys')->checkbox([])->label('Физические лица') ?>
                                    </div>
                                    <div>
                                        <?=$form->field($registration_model,'bankr_cat_legal')->checkbox([])->label('Юридические лица') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">С какими категориями должников вы будете работать?<span class="sign-up-star">*</span></p>
                                <div class="checkbox-human">
                                    <div>
                                        <?=$form->field($registration_model,'debt_cat_phys')->checkbox([])->label('Физические лица') ?>
                                    </div>
                                    <div>
                                        <?=$form->field($registration_model,'debt_cat_legal')->checkbox([])->label('Юридические лица') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Количество проведенных процедур (физ. лица)<span class="sign-up-star">*</span></p>
                                <?= $form->field($registration_model,'count_of_procedure_phys')->textInput()->label('')?>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Количество проведенных процедур (юр. лица)<span class="sign-up-star">*</span></p>
                                <?= $form->field($registration_model,'count_of_procedure_legal')->textInput()->label('')?>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Средний срок процедуры (месяцев)<span class="sign-up-star">*</span></p>
                                <?= $form->field($registration_model,'procedure_time_average')->textInput()->label('')?>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Дата начала  работы в качестве арбитражного управляющего</p>
                                <?= $form->field($registration_model,'start_date')->textInput(['type'=>'date'])->label('')?>
                            </div>
                            <div class="form-sign-up-flex">
                                <p class="main-name-p3">Дата окончания  работы в качестве арбитражного управляющего</p>
                                <?= $form->field($registration_model,'end_date')->textInput(['type'=>'date'])->label('')?>
                            </div>
                        </div>
                            <h4 class="main-name-color-h4">Сведения о членстве в СРО АУ</h4>
                            <div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Название СРО АУ, <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'SRO_name')->textInput()->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Дата начала членства, <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'membership_start_date')->textInput(['type'=>'date'])->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Дата окончания членства, <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'membership_end_date')->textInput(['type'=>'date'])->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Причина ухода, <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'leave_reason')->textarea()->label('')?>
                                </div>
                            </div>
                            <h4 class="main-name-color-h4">Сведения об образовании</h4>
                            <div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Название учреждения<span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'institution')->textInput()->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Специальность <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'speciality')->textInput()->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Уровень образования <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'educ_level')->textInput()->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Дата начала обучения <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'start_education')->textInput(['type'=>'date'])->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Дата окончания обучения <span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'end_education')->textInput(['type'=>'date'])->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Знания иностранного языка<span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'language')->textInput()->label('')?>
                                </div>
                                <div class="form-sign-up-flex">
                                    <p class="main-name-p3">Уровень владения<span class="sign-up-star">*</span></p>
                                    <?= $form->field($registration_model,'level')->textInput()->label('')?>
                                </div>
                            </div>

                        <div>
                            <h4 class="main-name-color-h4">Фото и соглашения</h4>
                            <div class="form-sign-up-flex mb-5">
                                <p class="main-name-p3 mr-5">Фото для вашего профиля</p>
                                <?= $form->field($imgupload, 'imageFile')->fileInput(['id'=>'inputFile', 'class'=>'imgloadbtn'])->label('') ?>
                            </div>
                            <div class="photos-agreements-checkbox">
                                <div class="checkbox-human agreements-checkbox-1">
                                    <p class="main-name-p3">Я подтверждаю, что с правилами акции (оферты) согласен<span class="sign-up-star">*</span></p>
                                    <div class="checkbox-div">
                                        <?=$form->field($registration_model,'user_agreements')->checkbox([])->label('') ?>
                                    </div>
                                </div>
                                <div class="checkbox-human agreements-checkbox-2">
                                    <p class="main-name-p3">Я принимаю условия пользовательского соглашения <span class="sign-up-star">*</span></p>
                                    <div class="checkbox-div">
                                        <?=$form->field($registration_model,'offer_agreements')->checkbox([])->label('') ?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <?= Html::submitButton("Отправить запрос на регистрацию",["class"=>"requireReg"]) ?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php ActiveForm::end()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>