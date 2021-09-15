<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<section class="login-text-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <h2 class="main-name-h2">Регистрация и авторизация</h2>
                    <div class="steps-border"></div>
                    <p class="main-text-p2 mt-3">
                        Если Вы являетесь арбитражным управляющим и хотите сотрудничать с нашей платформой, получая заказы от физических и юридических лиц, то пройдите простую регистрацию на сайте.
                        Обязательно ознакомьтесь с пользовательским соглашением и пройдите процедуру регистрации.
                        В случае, если вы забыли данные для входа, пишите на электронную почту поддержки сервиса <a href="#" style="color:#445bd4"><?= EMAIL ?></a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <?php $form = ActiveForm::begin() ?>
                <div class="login-container-form">
                    <h2 class="main-name-h2">Вход</h2>
                    <?= $form->field($service_model,'phone')->textInput(['placeholder'=>'Номер телефона','class'=>''])->label('')?>
                    <?= $form->field($service_model,'password')->textInput(['placeholder'=>'Пароль','class'=>''])->label('')?>
                    <?= Html::submitButton('Вход') ?>
                    <?= Html::tag('a','Перейти к регистрации',["class"=>"myregisterbtn","href"=>"#"]) ?>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</section>