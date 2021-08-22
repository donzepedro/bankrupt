<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
//die
?>

<?php $form=ActiveForm::begin();  ?>
<?= $form->field($moderators,'username')->textInput()->lable('Имя пользователя'); ?>
<?= $form->field($moderators,'password')->passwordInput()->lable('Пароль'); ?>
   <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    <?php ActiveForm::end();?>